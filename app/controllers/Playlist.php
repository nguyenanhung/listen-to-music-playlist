<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Playlist
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property Grab $grab
 */
class Playlist extends HungNG_CI_Base_Controllers
{
    const TPL_FOLDER = 'mp3/';
    const CACHE_TTL = 600; // Cache 10P

    protected $grabber;

    /**
     * Playlist constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'string', 'array'));
        $this->load->library('grab');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }

    /**
     * Function data
     *
     * @param string $musicId
     *
     * @link     /playlist/data/$musicId
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 19:35
     */
    public function data(string $musicId = '')
    {
        $this->output->set_status_header()->set_content_type('application/x-javascript', 'utf-8');

        $data = array();
        $data['playlist_data'] = null;
        $playlistId = trim($musicId);
        $listPlaylist = config_item('list_playlist');

        if (array_key_exists($playlistId, $listPlaylist)) {
            $itemPlaylist = $listPlaylist[$playlistId];
            $randomId = random_element($itemPlaylist['playlist']);
            $playlistSiteId = $itemPlaylist['from_source'];

            if ($playlistSiteId === 'nhaccuatui') {
                $playlistXmlUrl = $this->grabber->nhaccuatui->playlist_url . trim($randomId);
            } elseif ($playlistSiteId === 'zing_mp3') {
                $playlistXmlUrl = $this->grabber->zing_mp3->playlist_url . trim($randomId);
            } else {
                $playlistXmlUrl = null;
            }

            if ($playlistXmlUrl !== null) {
                // Settings Cache
                $this->load->driver('cache', DEFAULT_CACHE_ADAPTER);
                $cacheFile = DEFAULT_CACHE_PREFIX . 'PlaylistData' . md5($playlistXmlUrl);

                if (!$resultPlaylist = $this->cache->get($cacheFile)) {

                    if ($playlistSiteId === 'nhaccuatui') {
                        $resultPlaylist = $this->grab->nct($playlistXmlUrl);
                    } elseif ($playlistSiteId === 'zing_mp3') {
                        $resultPlaylist = $this->grab->zing_mp3($playlistXmlUrl);
                    } else {
                        $resultPlaylist = null;
                    }

                    if (!empty($resultPlaylist)) {
                        // Nếu file Grab không rỗng thì mới cache
                        $this->cache->save($cacheFile, $resultPlaylist, self::CACHE_TTL);
                    }

                }
                $data['playlist_data'] = $resultPlaylist;
            }
        }

        $this->load->view(self::TPL_FOLDER . 'playlist', $data);
    }
}

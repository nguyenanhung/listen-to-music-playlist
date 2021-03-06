<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property object config
 * @property object output
 * @property object input
 * @property object cache
 */
class Home extends CI_Controller
{
    const TPL_FOLDER = 'mp3/';
    const CACHE_TTL  = 86400;
    protected $grabber;

    /**
     * Home constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'string', 'array'));
        $this->load->library('grab_link');
        $this->config->load('config_site');
        $this->config->load('config_grabber');
        $this->config->load('config_player');
        $this->config->load('config_album');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }

    /**
     * Function index
     *
     * @link     /home/index.html
     * @link     /musics.html
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 25:04
     */
    public function index()
    {
        $data                     = array();
        $data['sites']            = arrayToObject(config_item('site_data'));
        $data['author']           = arrayToObject(config_item('site_author'));
        $data['tracking']         = arrayToObject(config_item('tracking_code'));
        $data['list_location']    = config_item('list_location');
        $data['list_location_id'] = config_item('list_location_id');
        $data['list_playlist']    = config_item('list_playlist');
        $data['page_title']       = 'Nghe nhạc thư giãn';
        $data['canonical_url']    = base_url();
        $this->load->view(self::TPL_FOLDER . 'page_index', $data);
    }

    /**
     * Playlist Music
     *
     * @link     /den-location_id-va-nghe-nhac-music_id.html
     *
     * @param string $location_id
     * @param string $music_id
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 25:13
     */
    public function playlist($location_id = '', $music_id = '')
    {
        $list_location    = config_item('list_location');
        $list_location_id = config_item('list_location_id');
        $list_playlist    = config_item('list_playlist');
        $location_id      = trim($location_id);
        $music_id         = trim($music_id);
        if (!array_key_exists($location_id, $list_location)) {
            redirect();
        }
        if (!array_key_exists($music_id, $list_playlist)) {
            redirect();
        }
        $uriString                   = 'den-' . $location_id . '-va-nghe-nhac-' . $music_id;
        $playlistData                = $list_playlist[$music_id];
        $data                        = array();
        $data['sites']               = arrayToObject(config_item('site_data'));
        $data['author']              = arrayToObject(config_item('site_author'));
        $data['tracking']            = arrayToObject(config_item('tracking_code'));
        $data['list_location']       = $list_location;
        $data['list_location_id']    = $list_location_id;
        $data['list_playlist']       = $list_playlist;
        $data['page_title']          = 'Đến ' . $list_location[$location_id]['name'] . ' và nghe nhạc ' . $playlistData['name'];
        $data['canonical_url']       = site_url($uriString);
        $data['current_location_db'] = $list_location[$location_id];
        $data['current_location']    = $location_id;
        $data['current_playlist']    = $music_id;
        if (isset($playlistData['poster'])) {
            $data['image_src'] = $playlistData['poster'];
        }
        $this->load->view(self::TPL_FOLDER . 'page_index', $data);
    }

    /**
     * Function Sitemap
     *
     * @link     /sitemap.xml
     * @link     /home/sitemap.html
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 25:32
     */
    public function sitemap()
    {
        $this->output->set_status_header(200)->set_content_type('application/xml', 'utf-8')->cache(self::CACHE_TTL);
        $list_location = config_item('list_location');
        $list_playlist = config_item('list_playlist');
        $album_list    = config_item('album_list');
        // Album + MV
        $list_album     = '';
        $list_album_key = '___';
        foreach ($album_list as $album_id => $album_value) {
            $list_album .= site_url('album/' . $album_id) . $list_album_key;
        }
        $list_album = trim($list_album, $list_album_key);
        // Link Playlist
        $list_link     = '';
        $list_link_key = '___';
        foreach ($list_location as $location_id => $location_value) {
            foreach ($list_playlist as $music_id => $music_value) {
                $list_link .= site_url('den-' . ($location_id) . '-va-nghe-nhac-' . trim($music_id)) . $list_link_key;
            }
        }
        $list_link = trim($list_link, $list_link_key);
        // Push Data
        $data               = array();
        $data['list_link']  = explode($list_link_key, $list_link);
        $data['list_album'] = explode($list_album_key, $list_album);
        $this->load->view(self::TPL_FOLDER . 'sitemap', $data);
    }

    /**
     * Function Clean Cache
     *
     * @link     /home/clean_cache.html
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 25:41
     */
    public function clean_cache()
    {
        $this->config->load('admin_config');
        $auth = config_item('authentication');
        // API
        $username = $this->input->get_post('username', TRUE);
        $password = $this->input->get_post('password', TRUE);
        $type     = $this->input->get_post('type', TRUE);
        if ($username === NULL || $password === NULL) {
            $response = array(
                'result' => 2,
                'desc'   => 'Sai hoặc thiếu tham số'
            );
        } elseif ($username != $auth['username'] || $password != $auth['password']) {
            $response = array(
                'result' => 3,
                'desc'   => 'Sai chữ ký xác thực'
            );
        } else {
            $this->load->driver('cache', array(
                'adapter' => 'apc',
                'backup'  => 'file'
            ));
            if ($type === 'info') {
                $response = array(
                    'result'  => 0,
                    'desc'    => 'Lấy thông tin Cache',
                    'details' => array(
                        'info' => $this->cache->cache_info()
                    )
                );
            } else {
                $response = array(
                    'result'  => 0,
                    'desc'    => 'Xóa Cache',
                    'details' => array(
                        'info'  => $this->cache->cache_info(),
                        'clean' => $this->cache->clean()
                    )
                );
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response))->_display();
        exit();
    }
}

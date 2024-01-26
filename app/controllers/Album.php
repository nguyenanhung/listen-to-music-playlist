<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Album
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Album extends HungNG_CI_Base_Controllers
{
    const TPL_FOLDER = 'album/';

    /**
     * Album constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'string', 'array'));
        $this->load->library('grab');
    }

    /**
     * Album nhạc - một module nhỏ, lưu trữ những album tôi yêu
     *
     * @param string $albumId
     *
     * @link     /album/album-name.html
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 23:35
     */
    public function index(string $albumId = '')
    {
        $albumId = trim($albumId);
        $albumList = config_item('album_list');

        if (!array_key_exists($albumId, $albumList)) {
            redirect();
        }

        $albumData = $albumList[$albumId];

        $data = array(
            'sites' => arrayToObject(config_item('site_data')),
            'author' => arrayToObject(config_item('site_author')),
            'tracking' => arrayToObject(config_item('tracking_code')),
            'album_data' => $albumData,
            'page_title' => 'Album nhạc ' . $albumData['name'],
            'page_description' => 'Album nhạc ' . $albumData['name'],
            'page_keywords' => 'Album nhạc ' . $albumData['name'],
            'canonical_url' => site_url('album/' . $albumId),
            'image_src' => youtube_image_thumbnail($albumData['id']),
        );

        $this->load->view(self::TPL_FOLDER . 'album', $data);
    }
}

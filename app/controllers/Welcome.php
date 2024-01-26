<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Project listen-to-music-playlist
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/08/2021
 * Time: 07:01
 */

/**
 * Class Welcome
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Welcome extends HungNG_CI_Base_Controllers
{
    /**
     * Welcome constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'directory']);
    }

    /**
     * Function index
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/09/2020 34:12
     * @link     : /welcome/index.html
     */
    public function index()
    {
        $this->load->view(
            'my_welcome',
            [
                'author' => arrayToObject(config_item('site_author')),
                'site_data' => arrayToObject(config_item('site_data')),
                'tracking' => arrayToObject(config_item('tracking_code'))
            ]
        );
    }
}

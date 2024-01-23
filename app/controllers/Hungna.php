<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Project listen-to-music-playlist
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/04/2021
 * Time: 08:23
 */

/**
 * Class Hungna
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Hungna extends HungNG_CI_Base_Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$response = config_item('site_author');
		$this->output
			->set_status_header()
			->set_content_type('application/json', 'utf-8')
			->set_output(
				json_encode(
					$response,
					JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
				)
			)
			->_display();
		exit;
	}

	public function show_avatar()
	{
		$response = array(
			'small' => bear_framework_show_gravatar('nguyenanhung', 100),
			'large' => bear_framework_show_gravatar('nguyenanhung', 350)
		);
		$this->output
			->set_status_header()
			->set_content_type('application/json', 'utf-8')
			->set_output(
				json_encode(
					$response,
					JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
				)
			)
			->_display();
		exit;
	}
}

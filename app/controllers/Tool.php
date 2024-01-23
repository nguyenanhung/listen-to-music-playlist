<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Tool
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Tool extends HungNG_CI_Base_Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Function index
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 08/25/2021 54:21
	 */
	public function index()
	{
		$this->load->helper('url');
		redirect();
	}

	/**
	 * Function clean_cache
	 *
	 * @return void
	 * @copyright 2020 Hung Nguyen
	 *
	 * @author    : 713uk13m <dev@nguyenanhung.com>
	 */
	public function clean_cache()
	{
		if (is_cli()) {
			$this->load->driver('cache', DEFAULT_CACHE_ADAPTER);
			$this->cache->clean();
			exit();
		}
		show_404();
	}

	/**
	 * Function flush_opcache
	 *
	 * @return void
	 * @copyright 2020 Hung Nguyen
	 *
	 * @author    : 713uk13m <dev@nguyenanhung.com>
	 */
	public function flush_opcache()
	{
		if (function_exists('opcache_reset') && is_cli()) {
			opcache_reset();
			exit();
		}
		show_404();
	}

	/**
	 * Function pipelines
	 *
	 * @param string $project
	 * @param string $stages
	 * @param mixed $url
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 08/25/2021 54:12
	 */
	public function pipelines(string $project = '', string $stages = '', $url = '')
	{
		$this->load->helper('url');
		if (is_cli()) {
			$project = trim($project);
			$stages = mb_strtoupper(trim($stages));
			if (empty($url)) {
				$url = base_url();
			}
			$message = $project . ' - ' . $stages . ' -> SUCCESS | On time ' . date('Y-m-d H:i:s') . ' | Visit: ' . $url;
			$result = telegram_simple_message(TELEGRAM_JARVIS_BOT, MY_TELEGRAM_ID, 'CI/CD Monitoring - ' . $message);
			$status = $result ? ' is Success!' : ' is Failed!';
			echo "Send Message " . $message . $status . PHP_EOL;
			exit();
		}
		show_404();
	}
}

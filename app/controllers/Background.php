<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Background
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Background extends HungNG_CI_Base_Controllers
{
	const GITHUB_REPO_API = 'https://api.github.com/repositories/740265525/contents/assets/background/';
	const GITHUB_STATIC_DOMAIN = 'https://hungna.github.io/';
	const FOLDER_JSON_BACKGROUND = '';
	const TPL_FOLDER = 'mp3/';

	/**
	 * Background constructor.
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'string', 'array', 'directory'));
	}

	/**
	 * List Background
	 *
	 * @param string $locationId
	 *
	 * @link     /background/index/$locationId
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 05/15/2020 24:13
	 */
	public function index(string $locationId = '')
	{
		$locationId = trim($locationId);

		if (empty($locationId)) {
			ResponseOutput::writeLn('Input Params Invalid!');
			exit();
		}

		$this->output->set_status_header()->set_content_type('application/x-javascript', 'utf-8');

		$data = array();
		$listLocation = config_item('list_location');

		if (array_key_exists($locationId, $listLocation)) {
			$itemLocation = $listLocation[$locationId];

			if (isset($itemLocation['with_github']) && $itemLocation['with_github'] === true) {
				$listImages = $this->_parseWithGitHub($locationId);
			} elseif (isset($itemLocation['self_host_folder'])) {
				$listImages = directory_map(FCPATH . trim($itemLocation['self_host_folder']));
			} else {
				$listImages = $itemLocation['list_images'];
			}

			if (is_array($listImages)) {
				$data['location_data'] = $this->_parseData(
					$itemLocation['name'],
					$listImages,
					$itemLocation['with_github'],
					$itemLocation['self_host'],
					$itemLocation['self_host_folder']
				);
			} else {
				$data['location_data'] = null;
			}


		} else {
			$data['location_data'] = null;
		}

		$this->load->view(self::TPL_FOLDER . 'background', $data);
	}

	/**
	 * Function _parseWithGitHub
	 *
	 * @param string $location_id
	 * User: 713uk13m <dev@nguyenanhung.com>
	 * Copyright: 713uk13m <dev@nguyenanhung.com>
	 * @return array
	 */
	private function _parseWithGitHub(string $location_id = ''): array
	{
		$location_id = trim($location_id);
		$githubApi = self::GITHUB_REPO_API . $location_id;
		$fetchData = sendSimpleGetRequest($githubApi);
		$jsonData = json_decode($fetchData);
		if ($jsonData === null) {
			return [];
		}
		$data = array();
		foreach ($jsonData as $item) {
			$data[] = self::GITHUB_STATIC_DOMAIN . $item->path;
		}
		return $data;
	}

	/**
	 * Parse Data Image into JS File
	 *
	 * @param string $title
	 * @param array $arrayData
	 * @param bool $withGitHub
	 * @param bool $selfHost
	 * @param string $selfHostFolder
	 *
	 * @return null|string
	 */
	private function _parseData(string $title = 'IMG', array $arrayData = array(), bool $withGitHub = false, bool $selfHost = false, string $selfHostFolder = '')
	{
		if (!is_array($arrayData)) {
			return null;
		}

		$result = '';

		foreach ($arrayData as $key => $item) {
			if ($withGitHub === true) {
				$result .= '{image: "' . trim(trim($item)) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . trim(trim($item)) . '",url: ""},';
			} elseif ($selfHost === true) {
				$result .= '{image: "' . trim(base_url($selfHostFolder . trim($item))) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . trim(base_url($selfHostFolder . trim($item))) . '",url: ""},';
			} else {
				$result .= '{image: "' . trim(trim($item)) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . trim(trim($item)) . '",url: ""},';
			}

		}

		return trim($result, ',');
	}
}

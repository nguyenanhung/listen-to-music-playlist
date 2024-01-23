<?php
defined('BASEPATH') or exit('No direct script access allowed');

use nguyenanhung\CodeIgniter\BasicHelper\SimpleCurl;

/**
 * Class Grab
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Grab
{
	/** @var \CI_Controller */
	protected $CI;

	/** @var array|false|\stdClass $grabber */
	protected $grabber;

	/**
	 * Grab constructor.
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 */
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->helper(array('url', 'string', 'array'));
		$this->grabber = arrayToObject(config_item('config_grabber'));
	}

	/**
	 * Function nct
	 *
	 * @param string $url
	 *
	 * @return string
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 04/27/2021 09:58
	 */
	public function nct(string $url = ''): string
	{
		$url = trim($url);
		$getContents = $this->sendRequest($url);
		$xmlContents = simplexml_load_string($getContents, 'SimpleXMLElement', LIBXML_NOCDATA);
		$strOutput = '';
		if (isset($xmlContents->track)) {
			/** @var object $item */
			foreach ($xmlContents->track as $item) {
				$strOutput .= '{title:"' . trim(addslashes($item->title)) . ' - ' . trim(addslashes($item->creator)) . '",mp3:"' . trim($item->location) . '"},'; // Str Output theo format của jPlayer
			}
		}
		unset($xmlContents, $getContents);

		return trim($strOutput, ',');

	}

	/**
	 * Function zing_mp3
	 *
	 * @param string $url
	 *
	 * @return string
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 09/07/2020 39:26
	 */
	public function zing_mp3(string $url = ''): string
	{
		$url = trim($url);
		$getContents = $this->sendRequest($url);
		$zingMp3 = json_decode(trim($getContents), true);
		$strOutput = '';
		if (isset($zingMp3['data']['items'])) {
			foreach ($zingMp3['data']['items'] as $item) {
				$strOutput .= '{title:"' . trim(addslashes($item['title'])) . ' - ' . trim(addslashes($item['artists_names'])) . '",mp3:"' . trim($item['source']['128']) . '"},'; // Str Output theo format của jPlayer
			}
		}
		unset($zingMp3, $getContents);

		return trim($strOutput, ',');
	}

	/**
	 * Function sendRequest
	 *
	 * @param string $url
	 * @param array|string $data
	 * @param string $method
	 *
	 * @return string|null
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 08/25/2021 45:44
	 */
	protected function sendRequest(string $url = '', $data = array(), string $method = 'GET')
	{
		$method = mb_strtoupper($method);
		try {
			$curl = new SimpleCurl();
			$curl->setCookieFileLocation(__DIR__ . '/../files/cookies.txt');
			if ($method === 'POST') {
				$curl->setPost($data)->createCurl($url);
			} elseif ($method === 'JSON') {
				$curl->setJson($data)->createCurl($url);
			} elseif ($method === 'XML') {
				$curl->setXml($data)->createCurl($url);
			} else {
				$endpoint = !empty($data) ? $url . '?' . http_build_query($data) : $url;
				$curl->createCurl($endpoint);
			}
			$response = $curl->__toString();
			$error = $curl->isError();
			$errorMessage = $curl->getError();
			$result = $error === true ? $errorMessage : $response;
			$curl->closeCurl();

			return $result;
		} catch (Exception $e) {
			log_message('error', __get_error_message__($e));
			log_message('error', __get_error_trace__($e));

			return null;
		}
	}
}

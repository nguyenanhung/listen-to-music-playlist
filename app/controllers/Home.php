<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Home
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Home extends HungNG_CI_Base_Controllers
{
	const TPL_FOLDER = 'mp3/';
	const CACHE_TTL = 86400;
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
		$this->load->library('grab');
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
		$listLocationId = config_item('list_location_id');
		$listPlaylist = config_item('list_playlist');
		$data = [
			'page_title' => 'Nghe nhạc & Thư giãn',
			'sites' => arrayToObject(config_item('site_data')),
			'author' => arrayToObject(config_item('site_author')),
			'tracking' => arrayToObject(config_item('tracking_code')),
			'list_location' => config_item('list_location'),
			'list_location_id' => $listLocationId,
			'list_playlist' => $listPlaylist,
			'canonical_url' => base_url(),
			'background_js' => background_js_url(random_element($listLocationId)),
			'playlist_js' => playlist_js_url(array_rand($listPlaylist)),
		];
		$this->load->view(self::TPL_FOLDER . 'page_index', $data);
	}

	/**
	 * Playlist Music
	 *
	 * @param string $locationId
	 * @param string $musicId
	 *
	 * @link     /den-location_id-va-nghe-nhac-music_id.html
	 *
	 * @author   : 713uk13m <dev@nguyenanhung.com>
	 * @copyright: 713uk13m <dev@nguyenanhung.com>
	 * @time     : 05/15/2020 25:13
	 */
	public function playlist(string $locationId = '', string $musicId = '')
	{
		$listLocation = config_item('list_location');
		$listLocationId = config_item('list_location_id');
		$listPlaylist = config_item('list_playlist');
		$locationId = trim($locationId);
		$musicId = trim($musicId);

		if (!array_key_exists($locationId, $listLocation)) {
			redirect();
		}
		if (!array_key_exists($musicId, $listPlaylist)) {
			redirect();
		}

		$uriString = 'den-' . $locationId . '-va-nghe-nhac-' . $musicId;
		$playlistData = $listPlaylist[$musicId];

		$data = array(
			'sites' => arrayToObject(config_item('site_data')),
			'author' => arrayToObject(config_item('site_author')),
			'tracking' => arrayToObject(config_item('tracking_code')),
			'list_location' => $listLocation,
			'list_location_id' => $listLocationId,
			'list_playlist' => $listPlaylist,
			'page_title' => 'Đến ' . $listLocation[$locationId]['name'] . ' và nghe nhạc ' . $playlistData['name'],
			'canonical_url' => site_url($uriString),
			'current_location_db' => $listLocation[$locationId],
			'current_location' => $locationId,
			'current_playlist' => $musicId,
		);

		if (!empty($locationId)) {
			$data['background_js'] = background_js_url($locationId);
		} else {
			$data['background_js'] = background_js_url(random_element($listLocationId));
		}
		if (!empty($musicId)) {
			$data['playlist_js'] = playlist_js_url($musicId);
		} else {
			$data['playlist_js'] = playlist_js_url(array_rand($listPlaylist));
		}
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
		$this->output->set_status_header()->set_content_type('application/xml', 'utf-8')->cache(self::CACHE_TTL);

		$listLocation = config_item('list_location');
		$listPlaylist = config_item('list_playlist');
		$albumList = config_item('album_list');

		// Album + MV
		$listAlbum = '';
		$listAlbumKey = '___';
		foreach ($albumList as $albumId => $albumValue) {
			$listAlbum .= site_url('album/' . $albumId) . $listAlbumKey;
		}
		$listAlbum = trim($listAlbum, $listAlbumKey);

		// Link Playlist
		$listLink = '';
		$listLinkKey = '___';
		foreach ($listLocation as $locationId => $locationValue) {
			foreach ($listPlaylist as $musicId => $musicValue) {
				$listLink .= site_url('den-' . ($locationId) . '-va-nghe-nhac-' . trim($musicId)) . $listLinkKey;
			}
		}
		$listLink = trim($listLink, $listLinkKey);

		// Push Data
		$data = [
			'list_link' => explode($listLinkKey, $listLink),
			'list_album' => explode($listAlbumKey, $listAlbum)
		];

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
		$auth = config_item('authentication');

		$username = (string)$this->input->get_post('username', true);
		$password = (string)$this->input->get_post('password', true);
		$type = (string)$this->input->get_post('type', true);

		if ($username !== $auth['username'] || $password !== $auth['password']) {
			$response = [
				'result' => EXIT_ERROR,
				'desc' => 'Thiếu thông tin đầu vào'
			];
		} else {
			$this->load->driver('cache', DEFAULT_CACHE_ADAPTER);
			if ($type === 'info') {
				$response = [
					'result' => EXIT_SUCCESS,
					'desc' => 'Lấy thông tin Cache',
					'details' => [
						'info' => $this->cache->cache_info()
					]
				];
			} else {
				$response = [
					'result' => EXIT_SUCCESS,
					'desc' => 'Xóa Cache',
					'details' => [
						'info' => $this->cache->cache_info(),
						'clean' => $this->cache->clean()
					]
				];
			}
		}

		$this->output->set_status_header()->set_content_type('application/json')->set_output(json_encode($response))->_display();
		exit();
	}
}

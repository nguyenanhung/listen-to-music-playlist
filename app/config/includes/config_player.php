<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 02:36
 */
/**
 * Location Data
 * name: Tên Location
 * self_host: Tự map ảnh trong thư mục quy định trong biến self_host_folder, false = Map trong array list_images
 * self_host_folder: Đường dẫn đến thư mục
 * list_images: Mảng chứa link ảnh ở host ngoài
 * media_files: File MP3 background nhạc cho các zone cần âm thanh
 */
$config['list_location'] = [
	/**'nam-moi'                     => array(
	 * 'name'             => 'Năm Mới',
	 * 'self_host'        => TRUE,
	 *'self_host_folder' => 'assets/background/happy-new-year/',
	 * 'list_images'      => array()
	 * ),*/
	'thien-duong' => [
		'name' => 'Thiên đường',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/thien-duong/',
		'list_images' => []
	],
	'doi-nui' => [
		'name' => 'Đồi núi',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/doi-nui/',
		'list_images' => [],
		'media_files' => trim('https://hungna.github.io/assets/media/tieng-nuoc-chay.mp3')
	],
	'song-suoi' => [
		'name' => 'Sông suối',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/song-suoi/',
		'list_images' => [],
		'media_files' => trim('https://hungna.github.io/assets/media/tieng-nuoc-chay.mp3')
	],
	'khong-gian-bien' => [
		'name' => 'Không gian biển',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/khong-gian-bien/',
		'list_images' => []
	],
	'khong-gian-mua' => [
		'name' => 'Không gian mưa',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/khong-gian-mua/',
		'list_images' => [],
		'media_files' => trim('https://hungna.github.io/assets/media/tieng-mua-roi.mp3')
	],
	'khong-gian-rung' => [
		'name' => 'Không gian rừng',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/khong-gian-rung/',
		'list_images' => []
	],
	'viet-nam' => [
		'name' => 'Việt Nam',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/viet-nam/',
		'list_images' => []
	],
	'ha-noi' => [
		'name' => 'Hà Nội',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/ha-noi/',
		'list_images' => []
	],
	'anh-quoc' => [
		'name' => 'Anh quốc',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/anh-quoc/',
		'list_images' => []
	],
	'wakanda-forever' => [
		'name' => 'Wakanda',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/wakanda/',
		'list_images' => []
	],
	'paris' => [
		'name' => 'Paris',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/paris/',
		'list_images' => []
	],
	'party' => [
		'name' => 'Party',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/party/',
		'list_images' => []
	],
	'hot-girl' => [
		'name' => 'Hot Girl',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/hot-girl/',
		'list_images' => []
	],
	'final-fantasy' => [
		'name' => 'Fantasy',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/final-fantasy/',
		'list_images' => []
	],
	'middle-earth' => [
		'name' => 'Middle Earth',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/middle-earth/',
		'list_images' => []
	],
	'vung-dat-ghibli-huyen-thoai' => [
		'name' => 'Vùng đất Ghibli',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/ghibli/',
		'list_images' => []
	],
	'crash-landing-on-you' => [
		'name' => 'Crash Landing On You',
		'with_github' => true,
		'self_host' => false,
		'self_host_folder' => 'assets/background/crash-landing-on-you/',
		'list_images' => []
	],
];
$config['list_location_id'] = [
	//'nam-moi',
	'thien-duong',
	'doi-nui',
	'song-suoi',
	'khong-gian-bien',
	'khong-gian-mua',
	'khong-gian-rung',
	'viet-nam',
	'ha-noi',
	'anh-quoc',
	'paris',
	'party',
	'hot-girl',
	'final-fantasy',
	'middle-earth',
	'vung-dat-ghibli-huyen-thoai',
	'crash-landing-on-you',
];
$config['list_playlist'] = [
	/**
	 * 'nhac-tet'                             => array(
	 * 'name'        => 'Nhạc Tết',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * '6b9c0d587707b504d4748ec6f4fc4ee3',
	 * 'cdf0dfaac13089739ca331837b94c81d',
	 * '22c14d68b84bb0d62ddcb79435b83618',
	 * '4b67deb22ec4c6352bbda59141a67d60',
	 * 'c331f031d9d32e8eac600052008c2f90',
	 * '307217656d7221e3bd97da6631100a6f',
	 * '4461054a8a854d6eedd097bf2fbe90b3',
	 * 'cc8821c3b01aedc7e6102a1e7e88af4a',
	 * '358814241de793fc5d2c1ea2d7c70530',
	 * '7f215be457d12603b18de8a27dbadb5b'
	 * ),
	 * 'poster'      => 'https://i.postimg.cc/VLpP5VW5/18.jpg'
	 * ),*/
	'remix-gay-nghien' => [
		'name' => 'Remix Gây Nghiện',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'97ee93b766335e8773ceae8790ecbc06'
		]
	],
	'day-la-rap-viet' => [
		'name' => 'Đây Là Rap Việt',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'4a85e4f9f2f15da685ffdf4e9dbe8ea5',
			'a55bd5d7664f92b72a20399dcc85b6c9',
			'd3a0d795859688441bc3531c40f7713c',
			'f62ca9401e30399efb6a7c5ecbb79b00',
			'5ce08b333561cfc1b3a70f5006d21de7',
			'c9018c3ff048af822cd3cc0793489bdf'
		],
		'poster' => 'https://i.postimg.cc/J7DFvq80/1598522055668.jpg'
	],
	'danh-cho-nguoi-yeu-xa' => [
		'name' => 'Yêu Xa',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'7b1b4a9687faea9432e130fe8d124bef'
		],
		'poster' => 'https://s22.postimg.cc/rqo8nnp81/Ca_u-no_i-hay-ve_-ti_nh-ye_u-xa-1.jpg'
	],
	// Hot Trending
	'rap-viet' => [
		'name' => 'Rap Việt',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'e9f3411ed8d8b9a3dd55f587fcc915f0',
			'3fe0a586d952acab4cee57e1b08bcaab',
			'3e1ae0db91e9b9c04ccb9c89813823cd',
			'192ee055e059faaa98cb0f5cb8410cb1',
			'04a6e244b84897262a9009481fdd9d63',
			'ca3db0deba5b9b695ab9cce68ba4b292',
			'7e9ed51c5571960dcf12203aa948ec22',
			'af440dcdfe1487d7b2679107eea90722',
			'd3a0d795859688441bc3531c40f7713c',
			'f62ca9401e30399efb6a7c5ecbb79b00',
			'5ce08b333561cfc1b3a70f5006d21de7',
			'c9018c3ff048af822cd3cc0793489bdf',
			'ebe4579198f7e6d1d822c94bdfedd3c0',
			'a3bf51c6eb710e2578557d035fe73937',
			'0bd626aeb456b6e95c38cf2ca0795dc9',
			'0918ca21272497815036ba1136316f49',
			'7ee7abf5f9c726a4255a35cf3874b94b',
			'2ffaf4c8656915f4b4de0b04828c968b',
			'5b3ca813a58a39365527e2d8ccbf33e7',
			'8eee7a1704a6d003ca330696ceed44fa',
			'2d36fa5f15363e2218caf434f2718a7c',
			'c0d7b8e64b3da7f8b46d2d54ca8cbe84',
			'0fc168a8d158349539e392ab3a355522',
			'7b9a9cc05106617e63f2a326b348e0af',
			'6938b6fdcbd43e5538c4256e2468b9e1'
		],
		'poster' => 'https://i.postimg.cc/J7DFvq80/1598522055668.jpg'
	],
	'top-100-rap-viet' => [
		'name' => 'Top 100 Rap Việt 2020',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'e9f3411ed8d8b9a3dd55f587fcc915f0'
		],
		'poster' => 'https://i.postimg.cc/J7DFvq80/1598522055668.jpg'
	],
	'top-100-nhac-hoa' => [
		'name' => 'Top 100 nhạc Hoa',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'dff8c50989c52c920d6bc52edc6713a7'
		]
	],
	'top-100-nhac-khong-loi-hay-nhat' => [
		'name' => 'Top 100 nhạc Không lời',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'84be112e71efc7b7dc77b11da01eebb0'
		]
	],
	// Ca sĩ Việt Nam
	'son-tung-mtp' => [
		'name' => 'Sơn Tùng M-TP',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'4eb1101485e57931ee2a2a04705b3fe4'
		]
	],
	'isaac' => [
		'name' => 'Isaac',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'88bd4bb2e9b746159d1c100e2180c8cb'
		]
	],
	'bich-phuong-idol' => [
		'name' => 'Bích Phương Idol',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"72251fa812e73b11a0998c46c1dbbeb0",
			"7aede3e862fc57bde329dbd702eca483"
		]
	],
	'my-tam' => [
		'name' => 'Mỹ Tâm',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'ed86e6f676ecff95d924a58c16ccb78c'
		]
	],
	'thuy-chi' => [
		'name' => 'Thùy Chi',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"4e6b0a0861a086c1a860022fc5627aa0",
			"f2c044c19393f041572a9c4624b79309",
			"696f4974bded068cca495dda4ebd2e5f",
			"50c7e9fcec17bf00e4c4615a52139b9d",
			"a8c96a1e73309cee53684b9ef8ff2a13",
			"efc5e88129d2056a807c6c1d485ec524",
			"6072146995f681cb18591fbc2177e75a",
			"d46b48f18523c346b2b8b4564cdcbdcb",
			"87213eedd463337d4f5304fa8587c6b3",
			"4b92931b7f5c8daf20d7a13131c33bc9",
			"7d9a6b95e409cf215a8c853b4d29a77d",
			"ea21cb53ac8a5efc53c4026371263c24"
		]
	],
	'nguyen-ha' => [
		'name' => 'Nguyên Hà',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"dfc5a33150a4730572fbd699376ea543",
			"b2179b45e8d4e1560661b3268d2a7dd0"
		]
	],
	'bui-anh-tuan' => [
		'name' => 'Bùi Anh Tuấn',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"d2916b3790bccecc7ed9c60ed8da542e",
			"e58a1594e0947f34d7e5a196daf35598",
			"3fc5bcd1d61dad9e12de1352d6c1193b",
			"ca9f4bd38cb4621906d7240e7035359c",
			"c28bb4c4e05652d03b074ab7eab32eb8",
			"ef61fd5c89f829bd93b96ed689fff01b",
			"b91c38ad7c5f3f7dff9e64db318bbb33",
			"9b846724a23eae7f5e6248b8f26bd675",
			"d692eda242f2b659f444180ec47cf1b7",
			"859a4407dc84f57fe17a73ee60ecadb8",
			"d0823c7837fee563057b50d76f5742b9",
			"fdc7bd40cf7b612f83057b48238d5e03",
			"fd641833b607caef9b8d8fc8dd5e37e0",
			"398fa608a2498b090780208aa59d8298",
			"75177bf0d03cf91914f3b21f35ddc8f5",
			"34cbe986d6455cff256e8988a2f9d3a1",
			"1cb676985d5557ea26fb61ab00c0eca8",
			"a4498b9635f010d10f74e3f86bcc8c27",
			"03cb5710bdb4a35091c88dc9f093daf9",
			"e8fc0b934ba3bd325ca3196318861516",
			"3f6a11e827d5094be614b7dbb42222a1",
			"5cbb36ef8ac7e334ec13990d3329d1ff"
		]
	],
	'ha-anh-tuan' => [
		'name' => 'Hà Anh Tuấn',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"e19763e2558d4befe4b7fc8d426d30e2",
			"6115aa9306c2123e3786a7005d32e5e5",
			"80bb56df5f4ec6e8003ec3b947a624cd",
			"a49bd597a94d1a15a4e8b0e57b5e1f78",
			"e86be5f4ca37f4914ee2136bdfe49363",
			"add080ab5feef7377df0db7d141a1579",
			"67294c88eda490903a640d1faf62644a",
			"56243e724cc87838b36a7dd8d3bd6231",
			"ddff1c229e9174e939a6241412e76ddc",
			"1a5da8abcba9212d8cac8a58e7926627",
			"3a866ab021681868bfe8bacc334a4e7e",
			"34bd660ad543ebd09dfcb7387c2f9e37",
			"185149db14e476715bc859b6ba47cb74",
			"e55e461c134fc8645d0526781b7867d9",
			"f2ae3cc0750dd1ac56c0be2cd6c826d6",
			"3b2720761e27e5abee63b16871f2ce5a",
			"587decb4b60da170ab4ac9f963c98c8c",
			"37b310b63b98e7ca37f6304b881a3e00",
			"fe26445c4e5807bf0ca8b62467b19454",
			"1f54c868c8c38a4cf74029a9341ed1a8"
		]
	],
	'phan-manh-quynh' => [
		'name' => 'Phan Mạnh Quỳnh',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"b2535300e5c488b3400c7b6e8c16f879",
			"152ef2e79b577f8e0a2cbe15167e8c98",
			"1a495abd98a86dd9a3b042731ce08018",
			"070576633b1d4de311995b11aface176",
			"4cd6a1ce68c25875edec3b2b11979af9",
			"c4a6c96449794a361ee65a47359af2e6",
			"bd99ae33b67753e5f9285adaf1db3c77",
			"a46d77c7a3daf1fa6003a413dc827a97"
		]
	],
	/**'chau-khai-phong'                      => array(
	 * 'name'        => 'Châu Khải Phong',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "6ce0245f5eb3c4c39dbb79df283b5887",
	 * "99e18292e8b003096feb29c562fa68f6",
	 * "c1d908477c13ce66809529972a0735ae"
	 * )
	 * ),
	 * 'trinh-dinh-quang'                     => array(
	 * 'name'        => 'Trịnh Đình Quang',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "3f6a11e827d5094be614b7dbb42222a1",
	 * "b820c3f16e9bf04cff3153c40993e077",
	 * "a20189d40615c628629279878d1e55ad",
	 * "434461c2edac78bad5daf04c794cb7e2",
	 * "33fea6ccb9e1ca28f74e902a5b3133c2"
	 * )
	 * ),*/
	'le-bao-binh' => [
		'name' => 'Lê Bảo Bình',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"f980ca99a21ff4ec576f64436ad384b5",
			"238daf36899a5d55a6f3954a6a672edf",
			"b241fed4e747a996afa4070c4d0d570b",
			"e4cef9b4f0cfcad0e75a3424701b72c3",
			"982593094fba92326854f4dce2072dc9"
		]
	],
	'chu-bin' => [
		'name' => 'Chu Bin',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"a1761717cfa21cc9b65f6d602ac985fc",
			"f5d644e5a9b96b61e20d959693fc5d04",
			"2c8ea239d463227cf6a2d3f8b76029ba",
			"f89e11d12bb151b51ae9440faaea189a",
			"c4625e437651c9767f6e11541eea9e6f",
			"a7a145b7d5e30f4a2709c13387509d61",
			"c62e1c5f8e5b7dfdaf5e02d6d2046b25"
		]
	],
	'tuan-hung' => [
		'name' => 'Tuấn Hưng',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"3bc64fb6b8a3cc985f3f7a5a0232aa00",
			"d55b24feacf9673baaf02293df9e2e52",
			"6c22707b54e51851723a9a6571729169"
		]
	],
	'the-men' => [
		'name' => 'The Men',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"c0742c54bcf8bc7b7f781274421390e2",
			"8c139029d8fdbeec3bda50528ea5ff1c",
			"ef3ac0b7b065bfd39b77ab77b76636d6",
			"14aaca9a892755212ca1dfcbc968eddc",
			"2c3e73d32b4d33e8b6659526304b4759",
			"6485cf0bf3a6b474e6ecec9a3c324c96",
			"4966bf8b787af638c259ddfe957e3286",
			"6e228d3fbfb376e26f491dd9bbc4333f",
			"12bf669789e50f84d7a3a1567a87808f",
			"d2326d9097f92b4cd2063b044e80bf0e",
			"57f985f578e3bad78a4009e0b2204785",
			"f0a3e18729748ff84a406a0753cdc07b",
			"85cdc8817558311848e8ef04749300f8",
			"3a00d5bae3f222689a7949f6e4c113d9",
			"5c810d4ecf108727d2e7e3598b2e3272",
			"bde4a18adcd342ff033b91fff27cc22b"
		]
	],
	'tuan-ngoc' => [
		'name' => 'Tuấn Ngọc',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"6f213dcdf6973c0eed13d7f3c9fd40aa",
			"4e44aace2438f8e83a2c29b15ba62260",
			"d5f9e10cfc648913a99b3dab5c86f698",
			"173adb1597e9cfa84260686eb0564ab4",
			"b6331ce25ea334c79503f27c952943e0"
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/singer/cover/2013/12/05/7/9/3/4/1386226799058.jpg'
	],
	'bang-kieu' => [
		'name' => 'Bằng Kiều',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"64bc7071e37410dc81661894dff1331f",
			"005c26287b4bbf2bc5fa6f016deddc85"
		]
	],
	'le-hieu' => [
		'name' => 'Lê Hiếu',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'7f2e3f745a11aa456c634fcdbebb362a'
		]
	],
	'den-vau' => [
		'name' => 'Đen Vâu',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'8e3b17787b3acd0ba5d789fb3578bd04',
			'b932343ae879deba3946031329aa5015',
			'34ea4168f9d12444b900dcba336f49bd',
			'cd3c9c087d4e5d15269d0c9e49b976d3',
			'13f05f4b2218556ef1ce9ab2b9f155a9',
			'84db8b8f09883e7c1b71556ea3adf555',
			'c1a58953f6e8ada5c73c9da33363d5ed',
			'1f151ad321a3c1e3018b45c03e55a7a9',
			'e3d0fd744a80c76dbed3c09374acdcf8',
			'6518c3f8c12aca81d72a804a49c1228c',
			'f2307e2e0c4ccabda5ddfe29391e24b9',
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/mv/2017/11/07/e/1/b/0/1510018936429_640.jpg'
	],
	'vu' => [
		'name' => 'Vũ',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'1b1659c4ca1cf3d527f0fdbfcef8df6b'
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/07/27/8/c/5/c/1595821101058.jpg'
	],
	'lk' => [
		'name' => 'LK',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"764a37690e6bbf364d6ce886f38aeeed",
			"cfee86d32aedb32e24276e7ce8edcb97",
			"11dc988ca271df0fc02b63c62aa50343",
			"1b6c82b0b8f203487e8d5a98d4effdf2",
			"96167a6f45a205787511ca1575db30bf",
			"196f301bc9d8c27e015ee57e2d9d5d90",
			"eeadfa33322c2c6e15a9ebddabc2c899",
			"37e85887fb74f767d4c114c5af5f8bad",
			"cf2e3dc5ea66df2bd7d75724d4a5b20e",
			"d444ad6aec15d52080169c268445063f",
			"510f97afecae554e54c939de3f8b4499"
		]
	],
	'rhymastic' => [
		'name' => 'Rhymastic',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'1ebb1b701a043cc2683e42ace96c6fe2',
			'e78bdab4e2fb839fb228c94edfb33dca',
			'3c81651f1aaea5e8d1cf49afd8d6878b'
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/07/13/d/a/1/3/1594634699673.jpg'
	],
	'binz' => [
		'name' => 'Binz',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'229345351f8baa7d2d56dc23859a3fd8',
			'9585f1c7a8ba39d5be53f5b93ca520f4'
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/07/06/4/9/b/e/1594031289443.jpg'
	],
	'andree-right-hand' => [
		'name' => 'Andree',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'9c4a367fcd2057a8805c0cea1cc1bd4d'
		]
	],
	'young-uno' => [
		'name' => 'Young Uno',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"610b3a378331fc75f9e8c879d3fd040f",
			"22b424e85e719e668c72a25f72d0cf88"
		]
	],
	'karik' => [
		'name' => 'Karik',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"e4d23ed1f7e285790a86d2648789205e",
			"83135725c9556e44390811ab8f252d95",
			"b763c42d472c03ab44c4139f8998f0d7",
			"faa988d4b2332c959e8640602539b2f8"
		]
	],
	'icd' => [
		'name' => 'ICD',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"33af7046cfa7f4c0b930acb01c452a97"
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/11/20/e/4/0/3/1605843517244.jpg'
	],
	'phao' => [
		'name' => 'Pháo',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"9a6a25b32490177dfd8bfa6e33c4bf2c"
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/11/20/e/4/0/3/1605842241222.jpg'
	],
	'hieuthuhai' => [
		'name' => 'HIEUTHUHAI',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"7892363b66de4d60295b79ad29d9e35f"
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/10/26/5/7/b/c/1603684381359.jpg'
	],
	/**'jaykii'                               => array(
	 * 'name'        => 'JayKii',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * 'ZHJmyLHRsSLiLdxyHyFnkHykpFxWsFkZa',
	 * 'kHcHyZniCZLCmgzyGybHLntLQFcWgJvHh',
	 * 'kHJmTLmEHRlEaFkTmtFGkGykWFJpaHLcs',
	 * 'LmxGTknRWizWWshtGtbGZHyZpvJWgEExW',
	 * 'kmJHtLmiZQJnNnkyHtvmZHyZQbJWCNNHs',
	 * 'LHcHtLHihVZkbSdyGyFHkmtLWFJWNWpgA'
	 * )
	 * ),
	 * 'erik'                                 => array(
	 * 'name'        => 'ERIK',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * 'LHxmtLHEGQhGzFByHyDnLGyLWvcpNVmCD'
	 * )
	 * ),*/
	'masew' => [
		'name' => 'Masew',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'2d9f9c41a0ca690fc3d6de7167b1fd22'
		]
	],
	'dat-g' => [
		'name' => 'Đạt G',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'8eedf4fe95b64809d0bc0fc7efa8f121'
		]
	],
	'only-c' => [
		'name' => 'OnlyC',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'fa3ded3bbe3355606c77b9e02c1674b0',
			'a636255343c3083d1b36a9a6d4bfb341'
		]
	],
	/**'soobin-hoang-son'                     => array(
	 * 'name'        => 'Soobin Hoàng Sơn',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * 'ZHxHyLmJEZaxHQJymybmkmykpbJQsQJHz',
	 * 'LmJGTLHNBJzhcsVynyFHLmykQFxpCNkHW',
	 * 'ZHcGyZGaBcZVakhtHyFHZHTLWFJWaWJZD'
	 * )
	 * ),
	 * 'chi-dan'                              => array(
	 * 'name'        => 'Chi Dân',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * 'ZHJmtkHaBcdRcHhtGtFHLmykpvcQCRWhW',
	 * 'kHJmykHaVxRhLguymybmLntLWbxpaWiGi',
	 * 'kHcmtZHRQuHASsJymTbHkmTZWFJphpzzs',
	 * 'LmxnTZHadxpWdBdtHyFHZntLQvcWNWRZp',
	 * 'ZmJHyZHaBRdhNSJyntFmZHyZQbxQNpRLs',
	 * 'LmcmtZHaBRHJSkEtHtFmkHtLpFcQhWQui',
	 * 'kHxmyknsVJHJxJQyGtFHLGyZWDJpNWxRC',
	 * 'LGcGyLGaBxxdXbRTHyFmZmykpbJWhJcdG'
	 * )
	 * ),*/
	'khac-viet' => [
		'name' => 'Khắc Việt',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"35eee00b7eea5a9a86a3c4bef7819056",
			"f0e001c6055ee9a74fffe775ab3f92b0",
			"8fcfab54592af52692073dcd3a64c61e",
			"253cf5e02418962eb2ddf89285a9c52c",
			"34e86b446f8a49c9cf9b45a831dfb92a",
			"8fcada5d24ada0c18fad954b41281dc1",
			"0988b2ae943b6e651f8105d677075cc2",
			"4eb4a44b9d744ebdd0fc83339304fb1e",
			"492a509ecf68e4ee29487a69812e7bb2",
			"f8c05be233439ed1b2140af6a55553e0",
			"47e178e809f7b90552ac498e24284b90",
			"d58b5a7547c0cde293dfc76d5b39f4b8",
			"3dbdfe85ca95c8375903df0773d77807",
			"738ff90327b48e6930f636ec9f5757e8"
		]
	],
	'justa-tee' => [
		'name' => 'Justa Tee',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"3162a809c1e5486ab176cd9f549d2a43",
			"21d3a05dd793078979a9af852b7c22ac"
		]
	],
	/**'yanbi'                                => array(
	 * 'name'        => 'Yanbi',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "641ef772a494c3249ad618304ed0ce97",
	 * "cfdbb21c2ae63694161b16cfb248afdc",
	 * "5c227b82403f21131e1f7a76ced84c4e",
	 * "293373fd8ac57d14468711e6c3b58f50"
	 * )
	 * ),
	 * 'minh-vuong-m4u'                       => array(
	 * 'name'        => 'Minh vương M4U',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "2d90120c3645955b4d762615ed212a87",
	 * "dd89f90b1cbc521a5bda21ebe56e876e",
	 * "b5f582da9883823e49a1400dd0dd2ab9",
	 * "5acbb528b89d254bd3c65f47d259b03a",
	 * "0732ea8207c282f63dc4de0e2529cde0",
	 * "45f4a973aae227df5823424a020af193",
	 * "05dfafa69b4eecab7c1ea3351b3421fd"
	 * )
	 * ),
	 * 'nguyen-hai-phong'                     => array(
	 * 'name'        => 'Nguyễn Hải Phong',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "0acde0123ae3b82351aa0f85117a79c0",
	 * "0262f6da8ce5d957b4bb954064bec1c0",
	 * "0cae3925130f4ca824e43567630928bb"
	 * )
	 * ),
	 * 'dang-khoi'                            => array(
	 * 'name'        => 'Đăng Khôi',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "4d28454e84d0a0ddbe39143a0a57d2f3",
	 * "0bc50a53465509ee5001c8582d4f9b02",
	 * "6958103f5a923441a434224e89d37823",
	 * "6195f73198548d88901885ebe80ba0cd",
	 * "55aef1a31c3801b4bfc3de270d8663d8",
	 * "d6985e2e1fda65cd5eae64269b802157",
	 * "9a66045dfdcaa83a29b60d27b6c91fa9",
	 * "2425dd635e363076d3b222fdf5c5c9e1",
	 * "53845cf33f3732be235f7a8009835917",
	 * "0f04a4d659bd0cfef79844e0ab0ef8a5",
	 * "e87001836a2e9c4e75b1e37ab0870cf9",
	 * "783caea4a5af6e803d85791280f42acc",
	 * "e8401cc606c765e98d4008751d3be87c",
	 * "2c059c6c5751344c8730437b8ae65e49",
	 * "9b8ad63af1e0c8d4c7fa6cfee5df7939"
	 * )
	 * ),
	 * 'nguyen-phi-hung'                      => array(
	 * 'name'        => 'Nguyễn Phi Hùng',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * "kHxHTLmaBNizapiTGtFnLGtLpFcpahhzh",
	 * "LGcmyZHsBacpmkAynybHLHTZWFJphxiNJ"
	 * )
	 * ),*/
	// Ca sĩ Quốc tế
	'eminem' => [
		'name' => 'Eminem',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"bbf3d78fedeee28c290e4998c351996d",
			"adcc13b14bf562a9c2f993ffb38be663",
			"8c0143961cfdd1a7602c4402db2134bd",
			"fc00f0b6c829fd24d09e85d21f9ecd2b",
			"b773408acfdba996740d0e7ff3dc3113",
			"4d09e4b75975d5c0b8890a47d1f8b4ba",
			"c6d602e33d4b9c35b0149bf835be1c7b",
			"e68fef13dc41e49f36cd132dd378bfc1"
		]
	],
	'alan-walker' => [
		'name' => 'Alan Walker',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"09c51f6fedd67329130a543be62eb5af",
			"630e067096c04c1a3c2a1f25ae8c9ae9",
			"97c88ca71235beae3c13da59917e70d8",
			"43a409f99ed88dd53ec1b8379de332e4",
			"2601d00a827db3b68bdf6a86765fb71c"
		]
	],
	'charlie-puth' => [
		'name' => 'Charlie Puth',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"7235159bd6e8a3fceff4a5497148cd20"
		]
	],
	/**'ed-sheeran'                      => array(
	 * 'name'        => 'Ed Sheeran',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * 'kGxmtZmNdJNNzNLtGtvHLHyLQFcWsWLFd',
	 * 'LGxHtLGJiQihuputmTvHZGtZWFxpNnRxn'
	 * )
	 * ),
	 * 'martin-garrix'                   => array(
	 * 'name'        => 'Martin Garrix',
	 * 'from_source' => 'zing_mp3',
	 * 'playlist'    => array(
	 * 'kmcmyLnJRNkBlLstHyDmLHtkpFcQgNuad',
	 * 'ZmxnyZHuZpxdFmhymTFHLnyLWFcpCaWhi',
	 * 'kmJGTLGsdRFDnkvyHybHLmtLpFxWNbikk'
	 * )
	 * ),*/
	'shayne-ward' => [
		'name' => 'Shayne Ward',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'1458236363bd07920ca694163f881d20',
			'7f2fd50520415a43cc30ee787041cf8c',
			'e1843eb0928166501bd37613fb4dc7ca'
		]
	],
	'maroon-5' => [
		'name' => 'Maroon 5',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"ec3d25d0e00ee274150ad55055feda1a",
			"5a376fc1bb9b5c144b82716e42513838"
		]
	],
	'taylor-swift' => [
		'name' => 'Taylor Swift',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"467e2bbffe171ee8127ed13af2287848",
			"351be436ddbf18c06c23334e13eabf1f",
			"3d211ef88ae634299ec848a90cfb2115",
			"573f5ea604ce05088bc7384151d801c4",
			"60c409f7d292be6b8a6af96150745a64"
		]
	],
	'katy-perry' => [
		'name' => 'Katy Perry',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'c97f12111c853404a1de494463e71b2d',
			'06daad7d2386ac60f8d1f17be26812d2',
			'a8dddd225d79065445c7052735a8e131',
			'89d0442ee756e3962623f576ff47acea',
			'3cbbe3e5729331c6c9adea65aabf763c'
		]
	],
	'bruno-mars' => [
		'name' => 'Bruno Mars',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"289e89a6dcfd557d91765403bf463690",
			"57e59a10d786f7f389954fd6cb179d5b",
			"07df265e1804ebec7328d51fbd4d8bbc"
		]
	],
	'linkin-park' => [
		'name' => 'Linkin Park',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"22e8b3000dc2931e33a657bb560b62b0",
			"079e068121331299f50b6817497bca8e"
		]
	],
	'whitney-houston' => [
		'name' => 'Whitney Houston',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"3d884b36be67944560dc62848744ee00",
			"26907b5e10e62d5362e0e26b9c681f5f",
			"f95e7827ff6ab03c05242f1ac52241f6",
			"05faf52db91798105cb42e21fd2bff59",
			"5fda46cc227b2c9ef3182094412a19c7",
			"424774c28be4ce8708ecc98bbadd0c65",
			"5bfd66b83b175d353ca7313d4d695796",
			"45bbd616783045bb39c323cd3d61a44d"
		]
	],
	'mariah-carey' => [
		'name' => 'Mariah Carey',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"9c727d0d0635466649add360cd45e10e",
			"7390deea42a096545d090224df20b3c7",
			"1bc01fa460d86fa98ef728ab2bb82cb2",
			"c0389aca825d3cbeb48ea9aad97ccbd0",
			"7cb34bed4de9154985a6593755b4284c",
			"f95e7827ff6ab03c05242f1ac52241f6"
		]
	],
	'michael-jackson' => [
		'name' => 'Michael Jackson',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"c2d421da3788c035e6d3902d403d8a7f",
			"c34df167bbc76b162e4431eea4a73390",
			"2af1f1ee3a879f6c11dd0598ebbdeb4d",
			"d7811c06b6efa875d70cb47dffa57897"
		]
	],
	'michael-learns-to-rock' => [
		'name' => 'Michael Learns to Rock',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"57df3a49a2d16db85ec746743c4cfb52",
			"a47712ea97e5c42d419d78168c21044e",
			"b9caf08a0b5bd73742799d636ab5436c",
			"1416dfe6a6017aace5a3b23d45de39d9",
			"a5e4215c7c8d06b546740dd3208fe17b",
			"df21b4029f70709dd4a59ec88645ae99"
		]
	],
	'adele' => [
		'name' => 'Adele',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"36c2b485a8056f9f8eedb7b059ce4785",
			"ed155733832f27e5a3b3aa2da74d304d",
			"25a560dcd0d0893bf35946a55abf4fd9",
			"9244fecaec8cfe739820f8174517a7a2",
			"29dbf852417890c774bf36314231e7d0",
		]
	],
	'one-direction-collection' => [
		'name' => 'One Direction',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'110f81c00a04f68d3834f4410aadfc9c'
		]
	],
	'tokyo-square' => [
		'name' => 'Tokyo Square',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"7bb65a838785bdfb6fb051e1ce271da3",
			"244cf731476f16b22851afaec29827cc"
		]
	],
	'westlife' => [
		'name' => 'Westlife',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"dcb2a9f0e545002655dca3cf3f23462a",
			"f1ee758b6405108ba3e7860b56b7a8d0",
			"e5dacb8d5f31b4ca1d3c74c5df2e9a95",
			"bf21a34d8a576b7f836679e57751cbfd",
			"01e0f720008575c552c26dd1997639cb",
			"b4b7014b565f3c852ef8711cdc8d7a6a",
			"672f2ec9dcf78e3ce9b6e572f0fe7559",
			"329957c585c0b8969304764d00b036eb"
		]
	],
	'jay-chou' => [
		'name' => 'Châu Kiệt Luân',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"1fc1b130c59a18a48e6a4cb191b6282c",
			"8a77c35b21ee65bcab691fca32035919",
			"ff7359bda1d968005cb2ee564dc1fb2d",
			"deef82cc0e3d4f0552e89c3ec43c2252",
			"f08e62195be39d4fb2d4091b4fa92432",
			"df76524d82bf31d4972f66307974e2b9",
			"25d4f8600408c7b5a0e56ce21c55cacf",
			"eb7a8019c1ab02a9cfd92468475b8eaf",
			"a4ab7cacb30bb2581ac2d35b081469c2",
			"7659c158af3a9155e2c77c49e0ba3a4d",
			"66a6618255ccc2b1182c166b2ec0d88e"
		]
	],
	'vuong-luc-hoanh' => [
		'name' => 'Vương Lực Hoành',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'd819614681f66ef12ba2cbd2a52b66c9'
		]
	],
	// Tuyển tập
	'100-bai-hat-nghe-nhieu' => [
		'name' => 'Nghe nhiều',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"3291b025d9a1ecff35cd447a91cbc4fd"
		]
	],
	'fa-va-tu-ky' => [
		'name' => 'FA và tự kỷ',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"bc59fb0d71f4303964e573b801788251",
			"ae8caa569f877368d11d13711949c18e",
			"8de1b94bc42f222e4c4b6e654bcb2e68",
			"fc4677b887b3ade714f92c3b3bfa3a27",
			"0329cd78f2fb9096d940b8f3a14e0fc4",
			"b7ad9a03b8c2f1fe2660c97cfd3ca238",
			"cec4673a0e9f15fc71331f2098f06d19",
			"6d654af2bdd804019fa9fc9fb1e8601f",
			"b40fbf267f9d3934a903356f79499551",
			"bdfa169e7dbe853adfed22c51586dfe6",
			"acedad3d1e1f86d18e7bdfcec5be743f",
			"c3fa680fadeb4d9b3f39b38cd677e340",
			"cfdfce1898c525e398cc70e8e37966d7"
		]
	],
	'bat-hu' => [
		'name' => 'Bất hủ',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"4dd28e79706235a36c547e3d888da0d3",
			"87ad8bfe662d655a4db46559d77a4482",
			"67b8deba76dacede8b6fe3a58b4eb92d",
			"9023eb26c6a844f981bb612d25e2ba3a",
			"41b4b06c55afc6b63d72779cda5da0f8",
			"7e6f48f90a1238626302140282bab5d4",
			"d64faeebedd28ad0a62ce69d409f6616",
			"6835b87debcd84777c11921fa9559976",
			"2273a4acca184a4062bc3acef1f0b2d3",
			"45b46be4d1bc0ee6d69f8537fa279c66",
			"f367687bf153dae7d99dd1613f084189",
			"c63f75478b4465c1f1ad360b5c402165",
			"c207f277518e1dd4a843e78c91700929",
			"37c2174c11af1cfcf9fda5e553d5baa1",
			"9899ddc30ecc0a9e75378b8c410071db",
			"c2738175d759a0159b12b8e4ac715652",
			"8ed187a6dd7e590f0c0f3bcd32a98aa6",
			"0df45440a7280cf983eaf56d58b6c2f2",
			"a96bb5c9c8e7222fe54239e70bf8a486",
			"416000a3d769d2b7371d4064a05862bb",
			"268c452c00004de7dcb9ab4ef6282614",
			"4bb5edfcd6ad9b86857280b10e004db6",
			"d2d6669643222a091b653997f7056b1f",
			"0121bbdf243abacc03f66f6dfb591e28"
		]
	],
	/**'billboard-hot-latin-songs-collection' => array(
	 * 'name'        => 'Top Billboard Latin',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "3401b0e6c739d306211b80d88b9488e2"
	 * )
	 * ),
	 * 'billboards-collection'                => array(
	 * 'name'        => 'Top Billboard',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * "11779096728c952ec777ee649718096e"
	 * )
	 * ),
	 * 'korean-music-awards-collection'       => array(
	 * 'name'        => 'Korean Music Awards',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * 'a2a5cc84857e2128eae42a484e33e67d'
	 * )
	 * ),
	 * 'mtv-music-awards-collection'          => array(
	 * 'name'        => 'MTV Music Awards',
	 * 'from_source' => 'nhaccuatui',
	 * 'playlist'    => array(
	 * '45b078487a94ececf484f98e8e85d0e5'
	 * )
	 * ),*/
	'tu-dai-thien-vuong' => [
		'name' => 'Tứ đại thiên vương',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'3e7f2fc22b8219968ca4577d05c81b73'
		]
	],
	'cafe-dang-va-mua' => [
		'name' => 'Cafe đắng & mưa',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"d31e699dd199f242935898cadfec0fc5",
			"bbb90e78514cb8c2c20ca751e20a3ae4",
			"b6806425538c00129c203f0404ebb15f",
			"5af57df666aecebc9e61902ba7df6b36",
			"c4000bfb0c4656e3e6d6fd261e0d2068",
			"15e55365e54d846af6f1345654eb2b63",
			"e7b66fda6c84c68f2c153f904920b1c1",
			"3c5c61c7ce1a7a784b28d72409b3b311",
			"c26e0880e8c6ce9669210ad95f73e97e",
			"9d7e15900524741746a37b67830d7ce4",
			"6f5dec2074467c85ec08700649e0ac35"
		]
	],
	'giang-sinh' => [
		'name' => 'Giáng sinh',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'2273a4acca184a4062bc3acef1f0b2d3'
		]
	],
	'qua-tang-sinh-nhat' => [
		'name' => 'HPBD',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'0dbd627d26212be2513299b884c2aadf'
		]
	],
	// Theo quốc gia
	'han' => [
		'name' => 'Hàn',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'416000a3d769d2b7371d4064a05862bb'
		]
	],
	'hoa' => [
		'name' => 'Hoa',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'b5abbba0ce39d825435348693fa916ba',
		]
	],
	'hong-kong' => [
		'name' => 'Hong Kong',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'0a5019c70da0c61e57d3063f4b175c91'
		]
	],
	'nhat' => [
		'name' => 'Nhật',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'0df45440a7280cf983eaf56d58b6c2f2'
		]
	],
	'phap' => [
		'name' => 'Pháp',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'c207f277518e1dd4a843e78c91700929'
		]
	],
	// Nhạc phim
	'phim-au-my' => [
		'name' => 'US OST',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'23a84ebfb7a25b52ba61514c121b7c9d'
		]
	],
	'phim-han-quoc' => [
		'name' => 'Korea OST',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'38ba743db70f39d449324b23647071e6'
		]
	],
	'phim-hoa-ngu' => [
		'name' => 'China OST',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'c15715294985de5d12dd5e740f334e78'
		]
	],
	'phim-viet-nam' => [
		'name' => 'Nhạc phim Việt',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'1a31f7ed1a85167bc018bcb0eec235c2'
		]
	],
	// Không lời + thiền
	'kenny-g' => [
		'name' => 'Kenny G',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"d75529eb83c7d901d8e97a0c25f1793c",
			"43a9bbc7af754fd9c4b3af123a338a87",
			"a3bd396f45cf99a7595bbc53e45d5353"
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/share/2020/10/12/9/8/2/c/1602498358050.jpg'
	],
	'yiruma' => [
		'name' => 'Yiruma',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"cdd2a901491541dd265666846327d30d",
			"eb92256f8e09d37acac84667c98eba80",
			"4f42d0f701d1e521cf9127422cb90aa5"
		]
	],
	'secret-garden' => [
		'name' => 'Secret Garden',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"5745ed77918e87c4539db16ab3790342",
			"6b910e6dbe58e09e44d7d0a3501f261c",
			"1b6ff734503d3b0e3ada216d8b2beab6",
			"0bcd5a8b040284fa2bd20a6ae6313801"
		]
	],
	'thien' => [
		'name' => 'Thiền',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"0c5ec925a74563852882ea4d70413ad0",
			"601d3a7d2bb1fb1467f2ab709de6874b",
			"6e34f18e7e62dbe64e76a3897593961d",
			"b7e67351058d231454062662de6b2e7c",
			"c20973fafeba2b1640ccda6e0f7d83d7",
			"7ccab250ac8f44b35b8cd272aa1d4875",
			"7fd14bb26b46868d0c87963f70791ae4",
			"4501a8d02233fba5429f237555a3fa58",
			"ec214a78d18b949418b9db5af30279ac",
			"dd6118b94c8a0c87acfe68daa5085a3a",
			"8c36309ad7e5660f16f1c86a80817fa7",
			"bf648c8506cde32a201a6a59c762ca70",
			"ca3e68989c29ffc7211083ae9547b226",
			"a4797c3995d9539b7f77ea6d0d7c88bc",
			"a407a4f36d4e6ddb5220b56dd43db8dc",
			"4634753cfb88fed350e372a656dbc78f",
			"820747a6fc21d39e2c7314c89ad66134",
			"80e621d40cb295bd494dd2335000c164",
			"32734a15602e8469a1e63a0bed01999e",
			"173380ef2053b39cc98537d2517ffe53",
			"770d3f18e4c0eed7b542607d9aa8454d",
			"cef54765ffca4edf2e6530e92b594c69",
			"e98b99bbe8ef00eea53a63684a377ccc",
			"2e96518e99e6e8a4c42309d0cc3c86e0"
		],
		'poster' => 'https://i.ibb.co/N6zXJcR/nhac-thien.jpg'
	],
	'hoa-tau' => [
		'name' => 'Hòa tấu',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'9899ddc30ecc0a9e75378b8c410071db'
		]
	],
	'khong-loi' => [
		'name' => 'Không lời',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"9899ddc30ecc0a9e75378b8c410071db",
			"7269e5f29afaccfc70c0a952add877f2",
			"192dfd5395ef548890b5f35c66435419",
			"b46fa6f31512f9c94c3fea439dae1cdf",
			"b833eab3af22c6ad6fdfd107222edb0e",
			"36ec18fb1d554a30455239e6fac55cce",
			"3bb4dc78c40580ef35b7313b93deae82",
			"be75b175dc3f5bcb223ae3ccf3e26ad3",
			"ad8775cc587b159c132e31432c30f19f",
			"6ac142563291fe07cb092e95da77b7bd",
			"c6401f414dd20ce39d9cd0dfc7aafce9",
			"11a77c3ffbd708abbe509656b75c3a82",
			"4b53cf958a34fc4adcf3f154f7b2f922",
			"d893f53751751bf7a2cc039c14032837",
			"fcb60bc03bea9491e633da0f26195450"
		]
	],
	'sao-truc' => [
		'name' => 'Sáo trúc',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			'6ac142563291fe07cb092e95da77b7bd'
		]
	],
	'saxophone' => [
		'name' => 'Saxophone',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"e5f1dfd545cd79b32cd238deabdf9261",
			"321551bc51c3dd618064eea9c1c50b33",
			"ff546375e41d46f108788bd1ec5e2056",
			"298ac05d89aaf466b96161815890304b",
			"ac8d4c5e26c4e5e7b936ce5cb060635e",
			"a739021beeb54458c1555869d1c82233",
			"8c38ee0187a27264f70e4246e4d3e4ad"
		]
	],
	'trinh' => [
		'name' => 'Trịnh',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"b2147c9c94e64f19e925518e2b8ed67d",
			"a311f81e25b45e6a8a4b662923de1ffe",
			"d47c078ec56e590abf47508f98e4a411",
			"a9f8ee5476a27d17f8384819602babae",
			"35638d969ead1311f01bdc2583b8f21f",
			"ad651733415e6c712b2ecde22b069170",
			"e0c70f5d7b3d775f6a2b9f6f7d50fea1",
			"467be03fed18828f5d6289875ff280a9"
		]
	],
	'piano' => [
		'name' => 'Piano',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"eb0d7d4163b18c216195d3daa08f3e7d",
			"1c540fbb0fad1606a7b63c9edf3cf4c5",
			"cdd2a901491541dd265666846327d30d",
			"ad4ce9fd9fb0c427dba38f37b4199808",
			"bd83e5fbb6cb130b19c4763a13543400",
			"482e4b06be1ee1d2b473d371c804cc3b",
			"4f42d0f701d1e521cf9127422cb90aa5",
			"eb92256f8e09d37acac84667c98eba80",
			"497b166c2bfbfffbe72d4832f6df4580"
		]
	],
	'crash-landing-on-you-ost' => [
		'name' => 'Crash Landing On You - OST',
		'from_source' => 'nhaccuatui',
		'playlist' => [
			"2e498691989adba1e5d1269c5b3d11ee"
		],
		'poster' => 'https://avatar-ex-swe.nixcdn.com/playlist/2020/02/17/3/b/3/4/1581924090361_500.jpg'
	],
];

<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @var object $sites
 * @var object $author
 * @var object $tracking
 * @var mixed $list_playlist
 * @var mixed $list_location_id
 * @var mixed $list_location
 * @var mixed $page_title
 * @var mixed $canonical_url
 * @var mixed $background_js
 * @var mixed $playlist_js
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"
      lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $page_title ?> - <?= $sites->site_name ?></title>
    <!-- DNS Prefetch -->
    <link href='//fonts.googleapis.com' rel='dns-prefetch'/>
    <link href='//cdnjs.cloudflare.com' rel='dns-prefetch'/>
    <link href='//i0.wp.com' rel='dns-prefetch'/>
    <link href='//i1.wp.com' rel='dns-prefetch'/>
    <link href='//i2.wp.com' rel='dns-prefetch'/>
    <link href='//i3.wp.com' rel='dns-prefetch'/>
    <meta name="description" content="<?= $page_title ?> - <?= $sites->site_name ?>"/>
    <meta name="keywords" content="<?= $sites->keywords ?>"/>
    <meta content="Hung Nguyen" name="author"/>
    <meta name="robots" content="index,follow,nocache,noodp"/>
    <meta name='revisit-after' content='1 days'/>
    <meta property="og:title" content="<?= $page_title ?> - <?= $sites->site_name ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?= $canonical_url ?>"/>
    <meta property="og:image" content="<?= $image_src ?? 'https://live.staticflickr.com/65535/53489162535_39924d3c58_k.jpg' ?>"/>
    <meta property="og:site_name" content="<?= $sites->site_name ?>"/>
    <meta property="og:description" content="<?= $page_title ?> - <?= $sites->site_name ?>"/>
    <link href="<?= $author->facebook ?>" rel="author"/>
    <?php $this->load->view('favicon'); ?>
    <link href="<?= assets_url('css/font-awesome.min.css') ?>" rel="stylesheet"/>
    <!--[if IE 7]>
    <link href="<?= assets_url('css/font-awesome-ie7.min.css') ?>" rel="stylesheet" />
    <![endif]-->
    <link href="<?= assets_url('css/quankhuya.css') ?>" rel="stylesheet"/>
    <link href="<?= assets_url('css/jplayer.pink.flag.css') ?>" rel="stylesheet"/>
    <link href="<?= assets_url('css/pink-modified.css') ?>" rel="stylesheet"/>
    <link href="<?= assets_url('css/supersized.css') ?>" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?= assets_url('css/index.css') ?>" rel="stylesheet" type="text/css" media="screen"/>
    <script type="text/javascript" src="<?= assets_url('js/jquery-1.9.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('js/jquery.idTabs.min.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('js/jquery.jplayer.min.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('js/jplayer.playlist.min.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('js/jquery.easing.min.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('js/supersized.3.2.7.min.js') ?>"></script>
    <script type="text/javascript" src="<?= assets_url('js/supersized.shutter.js') ?>"></script>
    <script type="text/javascript" src="<?= $playlist_js ?>"></script>
    <script language="javascript" type="text/javascript">
        var base_url = "<?= base_url() ?>";
    </script>
    <?= tracking_google_gtag_analytics_default($tracking->google_analytics_id) ?>
</head>
<body>
<div id="fb-root"></div>
<div class="nguyenanhung-wrapper">

    <?php if (isset($current_location_db['media_files'])) { ?>
        <audio id="backgroundAudio" autoplay="autoplay" loop="loop" preload="auto">
            <source src="<?= trim($current_location_db['media_files']) ?>" type="audio/mpeg"/>
            Trình duyệt của bạn không hỗ trợ HTML/audio template
        </audio>
        <script>
            var backgroundAudioControl = document.getElementById("backgroundAudio");
            backgroundAudioControl.volume = 0.5;
        </script>
    <?php } ?>

    <script type="text/javascript" src="<?= $background_js ?>"></script>

    <a class="quankhuya-description" href="<?= base_url() ?>" target="_blank">
        <?= $sites->site_name ?>
    </a>

    <div class="background-pattern"></div>

    <div class="page-like"></div>

</div><!--/wrapper-->

<div id="progress-back" class="load-item">
    <div id="progress-bar"></div>
</div><!--/progress-back-->

<div class="nguyenanhung-footer">
    <div class="logo"><?= $page_title ?></div>
</div><!--/footer + slogan -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".tab-click-item").click(function () {
            if ($(this).hasClass("selected")) {
                setTimeout(function () {
                    $("#list-menu-selection li a.selected").removeClass("selected");
                    $(".tab-item").hide();
                    $(".tab-container").hide();
                }, 0);
            }
            $(".tab-container").show();
            $(".location-tag").removeClass("selected");
            $(".music-tag").removeClass("selected");
        });
        $("#list-menu-selection").idTabs("show-change");
        $("#tab-close").click(function () {
            $("#list-menu-selection li a.selected").removeClass("selected");
            $(".tab-item").hide();
            $(".tab-container").hide();
        });
    });
</script>

<ul id="list-menu-selection">
    <li>
        <a class="tab-click-item" href="#my-player">
            <img src="<?= assets_url('images/playlist_icon.png') ?>" alt=""/>
        </a>
    </li><!--/player-->

    <li>
        <a class="tab-click-item" href="#show-comment"><img src="<?= assets_url('images/comment_icon.png') ?>" alt=""/>
            <div class="noti_bubble">
                <fb:comments-count href="<?= $canonical_url ?>">0</fb:comments-count>
            </div>
        </a>
    </li><!--/comment user facebook -->

    <li>
        <a class="tab-click-item" href="#show-change">
            <i class="icon-cog"></i>
        </a>
    </li><!--/change music style -->

</ul>

<!-- Phần content chính kết thúc ở đây -->

<div class="tab-container">
    <div id="tab-close" class="tab-close">
        <i class="icon-remove"></i>
    </div>

    <div class="tab-item" id="show-change">
        <div id="change-popup" class="change-popup">
            <div class="i-want-to">Tôi muốn đến...</div>
            <div class="choice-tag">
                <?php
                foreach ($list_location as $key => $value) {
                    echo '<div tag-id="' . trim($key) . '" class="item location-tag">' . trim($value['name']) . '</div>';
                }
                ?>
            </div><!--/choice-tag - địa điểm -->
            <div class="i-want-to">và thưởng thức...</div>
            <div class="choice-tag">
                <?php
                foreach ($list_playlist as $key => $value) {
                    echo '<div tag-id="' . trim($key) . '" class="item music-tag">' . trim($value['name']) . '</div>';
                }
                ?>
            </div><!--/choice-tag - gu nhạc -->
            <div class="change-button-list">
                <a class="button" id="btnPlayNow"><i class="icon-play"></i> Play Now !</a>
                <a class="button" href="<?= site_url('musics') ?>" target="_self">Play Random <i class="icon-magic"></i></a>
            </div><!--/button change-->
        </div>
    </div><!--/change style-->

    <div class="tab-item" id="show-comment">
        <div class="fb-comments" data-href="<?= $canonical_url ?>" data-width="280" data-num-posts="5"
             data-colorscheme="light"></div>
    </div><!--/khung comment-->

    <div id="my-player" class="my-player tab-item">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>

        <div id="jp_container_1" class="jp-audio">
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface">
                    <ul class="jp-controls">
                        <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a>
                        </li>
                    </ul>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                    <div class="jp-current-time"></div>
                    <div class="jp-duration"></div>
                    <ul class="jp-toggles">
                        <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                        <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle
                                off</a></li>
                        <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                        <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a>
                        </li>
                    </ul>
                </div>

                <div class="jp-playlist">
                    <ul>
                        <li></li>
                    </ul>
                </div>

                <div class="jp-no-solution">
                    <span>Thông báo</span>Để nghe được nhạc, vui lòng sử dụng trình duyệt Chrome hoặc Firefox.
                </div><!--/ JavaScript is not support-->

            </div>
        </div>
    </div><!--/tất cả options của player -->

</div>

<div class="fanpage-like">
    <div class="fb-like" data-href="<?= $canonical_url ?>" data-layout="standard" data-action="like" data-size="small"
         data-show-faces="true" data-share="true"></div>
</div><!--/fanpage-like-->

<script type="text/javascript" src="<?= assets_url('js/main.js') ?>"></script>
</body>
</html>
<!--
    - A production of Hung Nguyen <dev@nguyenanhung.com>
    - This is relax time and not Commerce product
    - URL: https://mp3.nguyenanhung.com
    - Page generation time: {elapsed_time}
    - Memory usage: {memory_usage}
 -->

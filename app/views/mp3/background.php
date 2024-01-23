<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
$(document).ready(function() {
$.supersized({
slide_interval: 12e3,
transition: 1,
transition_speed: 1e3,
slide_links: "blank",
slides: [<?= $location_data ?? null ?>]
})
});
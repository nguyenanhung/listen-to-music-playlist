<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Project listen-to-music-playlist
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/04/2021
 * Time: 08:22
 */

$config['socket_type'] = 'tcp'; //`tcp` or `unix`
$config['socket'] = '/var/run/redis.sock'; // in case of `unix` socket type
$config['host'] = '127.0.0.1';
$config['password'] = null;
$config['port'] = 6379;
$config['timeout'] = 0;


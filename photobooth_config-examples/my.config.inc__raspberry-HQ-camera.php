<?php
$config = array (
  'ui' => 
  array (
    'language' => 'de',
    'show_fork' => false,
    'skip_welcome' => true,
    'shutter_animation' => false,
    'font_size' => '20px',
    'rounded_corners' => true,
  ),
  'adminpanel' => 
  array (
    'view' => 'expert',
  ),
  'dev' => 
  array (
    'enabled' => false,
  ),
  'start_screen' => 
  array (
    'title' => 'Fotobox',
  ),
  'picture' => 
  array (
    'thumb_size' => '900px',
    'time_to_live' => '6',
    'cntdwn_time' => '3',
    'cntdwn_offset' => '1',
    'frame' => '/var/www/html/resources/img/frames/frame.png',
    'key' => '38',
  ),
  'webserver' => 
  array (
    'ip' => '10.0.0.1',
    'ssid' => 'Fotobox,Passw:12345678',
  ),
  'event' => 
  array (
    'textLeft' => 'Oma Gerti',
    'symbol' => 'fa-camera-retro',
    'textRight' => 'Cam',
  ),
  'filters' => 
  array (
    'enabled' => false,
  ),
  'textonpicture' => 
  array (
    'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'collage' => 
  array (
    'enabled' => false,
    'frame' => '/var/www/html/resources/img/frames/frame.png',
    'limit' => 4,
  ),
  'textoncollage' => 
  array (
    'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'gallery' => 
  array (
    'use_slideshow' => false,
  ),
  'pswp' => 
  array (
    'closeOnOutsideClick' => true,
  ),
  'preview' => 
  array (
    'mode' => 'device_cam',
    'asBackground' => true,
  ),
  'print' => 
  array (
    'frame' => '/var/www/html/resources/img/frames/frame.png',
  ),
  'textonprint' => 
  array (
    'font' => '/var/www/html/resources/fonts/GreatVibes-Regular.ttf',
  ),
  'qr' => 
  array (
    'url' => 'http://10.0.0.1/api/download.php?image=',
  ),
  'mail' => 
  array (
    'subject' => 'Here is your picture',
    'text' => 'Hey, your picture is attached.',
  ),
  'background' => 
  array (
    'defaults' => 'url(/resources/img/bg_bluegray.jpg)',
    'admin' => 'url(/resources/img/bg_bluegray.jpg)',
    'chroma' => 'url(/resources/img/bg_bluegray.jpg)',
  ),
  'jpeg_quality' => 
  array (
    'image' => '-1',
  ),
  'take_picture' => 
  array (
    'cmd' => 'raspistill -n -hf -o %s -q 20 -t 800 -th none --exposure sports | echo "Done"',
    'msg' => 'Done',
  ),
);
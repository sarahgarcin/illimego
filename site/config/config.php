<?php
/*

---------------------------------------
Kirby Configuration For Localhost
---------------------------------------

*/

return [
  'environment' => 'local',
  'debug'  => true, 
  'thumbs' => [
    'srcsets' => [
      'default' => [
      	'300w' => ['width' => 300, 'quality' => 80],
        '800w' => ['width' => 800, 'quality' => 80],
        '1024w' => ['width' => 1024, 'quality' => 80],
        '1440w' => ['width' => 1440, 'quality' => 80],
        '2048w' => ['width' => 2048, 'quality' => 80]
      ]
  	]
  ]
];

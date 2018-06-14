<?php
$kobiton_server_url = 'https://blackundo:176beec9-92c2-47fe-a3f2-a5a2de235e0b@api.kobiton.com/wd/hub';

$capabilities = array(
  'sessionName' =>        'Automation test session',
  'sessionDescription' => 'Black Undo', 
  'deviceOrientation' =>  'portrait',  
  'captureScreenshots' => true, 
  'browserName' =>        'chrome',  
  'deviceGroup' =>        'KOBITON', 
  // For deviceName, platformVersion Kobtion supports wildcard
  // character *, with 3 formats: *text, text* and *text*
  // If there is no *, Kobiton will match the exact text provided
  'deviceName' =>         'SAMSUNG SM-G960U1',
  'platformName' =>       'Android',
  'platformVersion' =>    '8.0.0' 
);
?>
<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'styde/html' => 
  array (
    'providers' => 
    array (
      0 => 'Styde\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Field' => 'Styde\\Html\\Facades\\Field',
      'Alert' => 'Styde\\Html\\Facades\\Alert',
      'Menu' => 'Styde\\Html\\Facades\\Menu',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
    'dont-discover' => 
    array (
      0 => 'laravelcollective/html',
    ),
  ),
);
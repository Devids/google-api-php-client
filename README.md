# Google APIs Client Library for PHP #

## Description ##
This is a fork from Google APIs Client Library (v2). The original library is using a very weird naming convention, which isn't follows the standard PHP conventions for class names and namespaces, therefore it isn't working with our classloader. This is a refactored version of the lib, where the namespaces were introduced and the classes are refactored for this. Only the Analytics is refactored for now.

The Google API Client Library enables you to work with Google APIs such as Google+, Drive, or YouTube on your server.

## Beta ##
This library is in Beta. We're comfortable enough with the stability and features of the library that we want you to build real production applications on it. We will make an effort to support the public and protected surface of the library and maintain backwards compatibility in the future. While we are still in Beta, we reserve the right to make incompatible changes. If we do remove some functionality (typically because better functionality exists or if the feature proved infeasible), our intention is to deprecate and provide ample time for developers to update their code.

## Requirements ##
* [PHP 5.4.0 or higher](http://www.php.net/)

## Developer Documentation ##
http://developers.google.com/api-client-library/php

## Basic Example ##
See the examples/ directory for examples of the key client features. You can
view them in your browser by running the php built-in web server.

```
$ php -S localhost:8000 -t examples/
```

And then browsing to the host and port you specified
(in the above example, `http://localhost:8000`).

```PHP
// include your composer dependencies
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName("Client_Library_Examples");
$client->setDeveloperKey("YOUR_APP_KEY");

$service = new Google_Service_Books($client);
$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br /> \n";
}
```

### Service Specific Examples ###

YouTube: https://github.com/youtube/api-samples/tree/master/php

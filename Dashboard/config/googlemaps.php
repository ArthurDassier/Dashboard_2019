<?php
return [
    /* =====================================================================
    |                                                                       |
    |                  Global Settings For Google Map                       |
    |                                                                       |
    ===================================================================== */



    /* =====================================================================
    General
    ===================================================================== */
    'key' => 'AIzaSyAZF872oVi0tXSGGnI70Ip0PkMFNJ0rEI0', //Get API key: https://code.google.com/apis/console
    'adsense_publisher_id' => '', //Google AdSense publisher ID

    'geocode' => [
        'cache' => false, //Geocode caching into database
        'table_name' => 'gmaps_geocache', //Geocode caching database table name
    ],

    'css_class' => '', //Your custom css class

    'http_proxy' => env('HTTP_PROXY', null), // Proxy host and port
];

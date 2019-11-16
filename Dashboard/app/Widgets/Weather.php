<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Weather extends AbstractWidget
{
    /**
     * The number of seconds before each reload.
     *
     * @var int|float
     */
    // public $reloadTimeout = 5;

    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'city' => ''
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $city = 'paris';
        if (isset($_GET['City'])) {
            $city = $_GET['City'];
        }
        return view('widgets.weather', [
            'city' => $city,
        ]);
    }
}

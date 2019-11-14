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
    public $reloadTimeout = 5;

    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'city' => ''
    ];

    protected $test = [
        'paris',
        'new york',
        'berlin',
        'hong kong',
        'tanger'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.weather', [
            'config' => $this->config,
            'test' => $this->test,
        ]);
    }
}

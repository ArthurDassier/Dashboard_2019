<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Hours extends AbstractWidget
{
    /**
     * The number of seconds before each reload.
     *
     * @var int|float
     */
    public $reloadTimeout = 1;

    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        static $hours = 'Europe/Paris';

        if (isset($_GET['Hours'])) {
            $hours = $_GET['Hours'];
        }
        return view('widgets.hours', [
            'config' => $this->config,
            'hours' => $hours,
        ]);
    }
}

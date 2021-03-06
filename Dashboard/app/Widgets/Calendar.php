<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Calendar extends AbstractWidget
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
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $month = '11';
        if (isset($_GET['Month'])) {
            $month = $_GET['Month'];
        }
        return view('widgets.calendar', [
            'config' => $this->config,
            'month' => $month,
        ]);
    }
}

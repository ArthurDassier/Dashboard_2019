<?php

// namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class GoogleMap extends AbstractWidget
{
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
        // $test_config['center'] = 'Air Canada Centre, Toronto';
        // $test_config['zoom'] = '18';
        // $test_config['map_height'] = '500px';
        // $test_config['scrollwheel'] = false;

        // GMaps::initialize($test_config);
        // $map = GMaps::create_map();
        $config = array();
        $config['center'] = 'New York, USA';
        GMaps::initialize($config);
        $map = GMaps::create_map();

        // echo $map['js'];
        // echo $map['html'];

        return view('widgets.google_map', [
            'config' => $this->config,
            'map' => $map,
        ]);
    }
}

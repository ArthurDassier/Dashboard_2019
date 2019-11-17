<?php

// namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Vinkla\Instagram\Instagram;

class Insta extends AbstractWidget
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
        $insta_key = '6888407695.1677ed0.61ab1c0148824827b0c7804b66f886ce';
        if (isset($_GET['Insta_key'])) {
            $insta_key = $_GET['Insta_key'];
        }

        $instagram = new Instagram($insta_key);
        // var_dump($instagram->self());
        $profil_image = get_object_vars($instagram->self())['profile_picture'];
        $profil_name = get_object_vars($instagram->self())['full_name'];
        $profil_bio = get_object_vars($instagram->self())['bio'];
        $profil_media = get_object_vars(get_object_vars($instagram->self())['counts'])['media'];
        $profil_follows = get_object_vars(get_object_vars($instagram->self())['counts'])['follows'];
        $profil_followed_by = get_object_vars(get_object_vars($instagram->self())['counts'])['followed_by'];
        $info_insta = [
            'profil_image' => $profil_image, 
            'profil_name' => $profil_name,
            'profil_bio' => $profil_bio,
            'profil_media' => $profil_media,
            'profil_follows' => $profil_follows,
            'profil_followed_by' => $profil_followed_by,

        ];
        return view('widgets.insta', [
            'config' => $this->config,
            'info_insta' => $info_insta,
        ]);
    }
}

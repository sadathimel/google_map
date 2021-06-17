<?php
/*
Plugin Name: Google Map
Plugin URI: http://github.com/sadathimel
Description: This plugins Display Google Map pages and Under posts.
Version: 1.0
Author: sadat himel
Author URI: http://github.com/sadathimel
License: GPLv2 or later
Text Domain: googlemap
Domain Path: /languages
 */

function goomap_load_textdomain() {
    load_plugin_textdomain( 'goomaplider', false, dirname( __FILE__ ) . "/languages" );
}
add_action( 'plugin_loaded', 'goomap_load_textdomain' );

function goomap_google_map($attributes){
    $default = array(
        // 'place'=>'Dhaka Museum',
        'width'=>'800',
        'height'=>'500',
        // 'zoom'=>'14'
        'lat' => '23.7059458',
        'long' => '90.4717704'
    );

    $params = shortcode_atts($default,$attributes);

    $map = <<<EOD
<div>
    <div>
        
            <iframe width="{$params['width']}" height="{$params['height']}" src="https://maps.google.com/maps?q={$params['lat']}, {$params['long']}&z=18&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>

    </div>
</div>
EOD;

    return $map;

}
add_shortcode('gmap1','goomap_google_map');


function goomap_google_map2($attributes){
    $default = array(
        'place'=>'Dhaka Museum',
        'width'=>'800',
        'height'=>'500',
        'zoom'=>'14'
    );

    $params = shortcode_atts($default,$attributes);

    $map = <<<EOD
<div>
    <div>
        <iframe width="{$params['width']}" height="{$params['height']}"
                src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
EOD;

    return $map;

}
add_shortcode('gmap1','goomap_google_map2');
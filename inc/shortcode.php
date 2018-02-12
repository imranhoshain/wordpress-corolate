<?php

//Feature shordcode
function feature_shortcode($atts){
    
     extract( shortcode_atts( array(
        'title' => '',
        'text' => '',
    ), $atts) );
         
    
    return'
        <div class="center wow fadeInDown">
            <h2>'.$title.'</h2>
            <p class="lead">'.$text.'</p>
        </div>
    ';
}
add_shortcode('feature','feature_shortcode');


//Youtube shordcode
function youtube_shortcode($atts){
    
     extract( shortcode_atts( array(
        'id' => '',        
    ), $atts) );
         
    
    return'
        <div class="embed-responsive embed-responsive-16by9">
       <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
    ';
}
add_shortcode('youtube','youtube_shortcode');
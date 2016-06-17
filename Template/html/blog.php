<?php

if(isset($LesliController['DATA_params'][0])){
    
    // plantilla single-post
    include $this->template('blog-post','Template','');
    
}elseif(isset($LesliController['DATA_params'][0]) &&
        $LesliController['DATA_params'][0] == 'feed') {
    
    // plantilla de feeds
    include $this->template('blog-feed','Template','');
    
}else{
    
    // plantilla de home
    include $this->template('blog-home','Template','');
    
}
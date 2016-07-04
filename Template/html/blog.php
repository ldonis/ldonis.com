<?php

if(isset($webparams[0])){

    // plantilla single-post
    include $this->template('blog-post','Template','');

}elseif(isset($webparams[0]) &&
              $webparams[0] == 'feed') {

    // plantilla de feeds
    include $this->template('blog-feed','Template','');

}else{

    // plantilla de home
    include $this->template('blog-home','Template','');

}

<?php

if(isset($LesliController['DATA_params'][0])){
    include $this->template('blog-post','Template','');
}else{
    include $this->template('blog-home','Template','');
}

?>

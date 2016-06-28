<?php
$posts = (include $this->template('info.post','blog',''));
$url = $LesliController['HTTP_url'];
$blogurl = $url . DS . 'blog' . DS;
$website = Configure::read('info');
http::header('xml');
echo '<rss version="2.0">';
    echo '<channel>';
        echo '<title>' . $website['name'] . '</title>';
        echo '<link>' . $url . '</link>';
        echo '<description>' . $website['description'] . '</description>';
        foreach($posts as $id => $post){

            echo '<item>';
                echo '<title>' . $post['title'] . '</title>';
                echo '<link>' . $blogurl . $id . '</link>';
                echo '<description>' . $post['excerpt'] . '</description>';
            echo '</item>';

        }
    echo '</channel>';
echo '</rss>';

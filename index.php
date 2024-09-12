<?php
$files=scandir('data');
//i must be set to 2 to skip 2 files from scandir
for ($i=2;$i<count($files); $i++){
    $post=file_get_contents('data/'.$files[$i]);
    //Convert json into an object
    $post=json_decode($post, true);
    echo '<h1>'.$post['title'].'</h1>';
}

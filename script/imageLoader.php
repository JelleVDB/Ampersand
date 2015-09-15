<?php
/**
 * Created by PhpStorm.
 * User: jelle
 * Date: 26/05/2015
 * Time: 15:50
 */

function readAlbum()
{
    $folder = opendir("images/pics"); // Use 'opendir(".")' if the PHP file is in the same folder as your images. Or set a relative path 'opendir("../path/to/folder")'.

    $pic_types = array("jpg", "jpeg", "gif", "png");

    $index = array();

    while ($file = readdir ($folder)) {

        if(in_array(substr(strtolower($file), strrpos($file,".") + 1),$pic_types))
        {
            array_push($index,$file);
        }
    }

    closedir($folder);

// If you don't like the alphabetical order, but date order instead, comment-out the following line with #.
    asort($index);

    foreach($index as $files)
    {
        $info = getimagesize($files);
        $alt = substr($files,0,strrpos($files,"."));
        echo "<a href='".$alt.".php'>";
        echo "<img class=\"album\" src=\"images/pics/".$files."\" alt=\"".$alt."\" />\n";
        echo "</a>";
    }
}

function readImages($value)
{
    $folder = opendir("images/pics/".$value); // Use 'opendir(".")' if the PHP file is in the same folder as your images. Or set a relative path 'opendir("../path/to/folder")'.

    $pic_types = array("jpg", "jpeg", "gif", "png");

    $index = array();

    while ($file = readdir ($folder)) {

        if(in_array(substr(strtolower($file), strrpos($file,".") + 1),$pic_types))
        {
            array_push($index,$file);
        }
    }

    closedir($folder);

// If you don't like the alphabetical order, but date order instead, comment-out the following line with #.
    asort($index);

    foreach($index as $files)
    {
        $info = getimagesize($files);
        $alt = substr($files,0,strrpos($files,"."));

        echo "<a href=\"images/pics/".$value."/".$files."\" data-lightbox='ampersand'>";
        echo "<img class=\"picture\" src=\"images/pics/".$value."/small/".$files."\" alt=\"".$alt."\" />\n";
        echo "</a>";
        //echo "<img src=\"images\\pics\\".$value."\\".$files."\" alt=\"".$alt."\" width=\"400\" height=\"400\" />\n";
    }
}

?>
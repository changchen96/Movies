<?php

$movie = simplexml_load_file("movieXML.xml") or die ("Cannot load file!");
foreach ($movie->children() as $dvd)
{
    echo $dvd->title;
    echo "<br>";
    echo $dvd['category'];
    echo "<br>";
    echo "<br>";
}

?>
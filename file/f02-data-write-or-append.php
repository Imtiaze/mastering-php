<?php

$fileName = "C:\wamp64\www\mastering-php/file/files/f02.txt";

$fp = fopen($fileName, 'a');

fwrite($fp, "Mars\n");
fwrite($fp, "Saturn\n");
fwrite($fp, "Jupitar\n");
fwrite($fp, "Uranus\n");
fclose($fp);



/* To remain exiting data */

// $existingData = file_get_contents($fileName);

// $fp = fopen($fileName, "w");

// fwrite($fp, $existingData);
// fwrite($fp, "Mercury\n");
// fwrite($fp, "Venus\n");
// fwrite($fp, "Earth\n");

// fclose($fp);


/* Each time we run it will delete exiting data and write newly */

// $fp = fopen($fileName, "w");

// fwrite($fp, "Mercury\n");
// fwrite($fp, "Venus\n");
// fwrite($fp, "Earth\n");

// fclose($fp);
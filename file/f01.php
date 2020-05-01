<?php

$fileName = getcwd() . '/file/files/f01.txt';

$fp = fopen($fileName, 'r');


if (is_readable($fileName)) {                 // for checking the permission
    $data = file_get_contents($fileName);     // return the full contents
    echo $data;
}



// $data = file($fileName);                   // return array; each line as a data element
// echo gettype($data);
// print_r($data);




// while($line = fgets($fp)){
//     echo $line;
// }
// fseek($fp, 16);                             // move the cursor anywhere we want
// while($line = fgets($fp)){
//     echo $line;
// }
// fclose($fp);




// while($line = fgets($fp)){
//     echo $line;
// }
// rewind($fp);                                // move the cursor to the first place             
// while($line = fgets($fp, 5)){
//     echo $line . '-';
// }
// fclose($fp);




// while($line = fgets($fp)){
//     echo $line;
// }
// rewind($fp);
// while($line = fgets($fp)){
//     echo $line;
// }
// fclose($fp);



// $file = fgets($fp);
// echo $file;
// $file = fgets($fp);
// echo $file;


// $file = fgets($fp, 4);
// echo $file;


// echo $file;


// echo getcwd();                              // get the current working directory
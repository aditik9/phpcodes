<?php
    $file = fopen("myfile.txt","x+") or die("Unable to open the file");
    $text = "This is the original file.";
    fwrite($file,$text);
    $c_file = fopen("newfile.txt","x+") or die("Unable to open the file");
    echo "After copying, the data in newfile.txt is<br>";
    copy("myfile.txt","newfile.txt");
    echo fread($c_file,filesize("newfile.txt"));
    fclose($file);
    fclose($c_file);
?>
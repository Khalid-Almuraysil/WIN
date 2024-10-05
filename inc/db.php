<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'khalid waleed almuraysil');
if (!$conn) { 
    echo 'Error:  ' . mysqli_connect_error(); 
}

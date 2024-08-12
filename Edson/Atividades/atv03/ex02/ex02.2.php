<?php
$idade = $_GET['idade'];

if ($idade < 18) {
    echo "<img src='https://img.freepik.com/free-photo/smiley-little-boy-isolated-pink_23-2148984798.jpg?t=st=1723060383~exp=1723063983~hmac=6d0cd088ee71b80a46f78fe9f3e06e261315e1dfe87450487c1c273a62d68bc4&w=1380'>";
} else if ($idade >= 18 && $idade < 60){
    echo "<img src='https://img.freepik.com/free-photo/medium-shot-man-correcting-grammar-mistakes_23-2150171372.jpg?t=st=1723060807~exp=1723064407~hmac=635f1c83bd335ae5774246bbab3b94daaae876cf6339d89140dde1ee2fb216dd&w=1380'>";
} else {
    echo "<img src='https://img.freepik.com/free-photo/medium-shot-woman-with-walking-stick_23-2148900612.jpg?t=st=1723060411~exp=1723064011~hmac=947fd93fb06dfb14b08ecbdd1af0ad5fd3b2e16f50cac090a71bf9d95a63b53f&w=1380'>";
}
?>
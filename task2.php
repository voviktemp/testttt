<?php

$image = imagecreatefromstring(file_get_contents('https://avatars.dzeninfra.ru/get-zen_doc/29317/pub_5b0ed6d49d5cb3f9e04c24ed_5b17e4709d5cb36f27f57d09/scale_2400');
imageresolution($image,200,200);
header('Content-Type: image/png');
imagepng($image);

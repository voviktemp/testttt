<?php


/*
если текст меньше 180 символов - не обрезаем
если больше 180 - обрезаем и убираем пробелы по краям
если в тексте нет пробелов - выделяем в ссылку только троеточие
если в тексте один пробел - выделяем только последнее слово и троеточие
если не все то что выше - выделяем последние 2 слова и троеточие в ссылку
*/

$link = 'https://yandex.ru';
$a = 'text text text text texttext text text text  texttext text text text texttext text text text texttext text hjk abc gty';
// $a = 'text text text text texttext text text text  texttext text text text texttext text text text texttext text hjk abc gty text text text text texttext text text text  texttext text text text texttext text text text texttext text hjk abc gty';
// $a = 'asdasdasdasdasdasdasdasasdasd';
// $a = 'asdasdasdasdasdasdasd asasdasd';

$cut_size = 180;
if(($len = strlen($a)) > $cut_size) {
	$a = trim(mb_substr($a,0,$cut_size));
	$len = $cut_size;
}

$spacePosition = ($len - (int) strripos($a,' '));
if($spacePosition < $len){
	$spacePosition2 = (int) strripos($a,' ', -($spacePosition+1));
	$splited_str = str_split($a, ($spacePosition2 > 0 ? $spacePosition2 : $spacePosition) +1);
}else{
	$splited_str[0] = $a;
}

echo $splited_str[0] . "<a href='$link'>" . ($splited_str[1] ?? '') . '...' . '</a>';




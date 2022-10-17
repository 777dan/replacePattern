<?php
$text =
    "<p>Права пользователей:</p>
<ul>
<li>Administrator</li>
<li>Editor</li>
<li>Subscriber</li>
</ul>";

$pattern = '#<li>\w+</li>#';
// $array = ["Administrator", "Editor", "Subscriber"];
// if (preg_match_all($pattern, $text, $arr)) {
//     for ($i = 0; $i < 3; $i++) {
//         $arrayLower = strtolower($array[$i]);
//         $arr[$i] = "<li><a href='http://www.php.kh.ua/script.php?role={$arrayLower}'>{$array[$i]}</a></li>";
//     }
// }
// print_r($arr);

echo 
preg_replace("#<li>Subscriber</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Subscriber</a></li>", 
preg_replace("#<li>Editor</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Editor</a></li>", 
preg_replace("#<li>Administrator</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Administrator</a></li>", $text)));
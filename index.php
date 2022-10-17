<?php
$text = 
"<p>Права пользователей:</p>
<ul>
<li>Administrator</li>
<li>Editor</li>
<li>Subscriber</li>
</ul>";

$pattern = '#<li>\w+</li>#';
$array = ["Administrator", "Editor", "Subscriber"];
if (preg_match_all($pattern, $text, $arr)) {
    for ($i=0; $i < func_num_args(); $i++) { 
        $arrayLower = strtolower($array[$i]);
        $arr[$i] = "<li><a href='http://www.php.kh.ua/script.php?role={$arrayLower}'>{$array[$i]}</a></li>";
    }
}
print_r($arr);
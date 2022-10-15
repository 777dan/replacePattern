<?php
$text = 
"<p>Права пользователей:</p>
<ul>
<li>Administrator</li>
<li>Editor</li>
<li>Subscriber</li>
</ul>";
// $replace1 =  preg_replace("#<li>Administrator</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Administrator</a></li>", $text);
// $replace2 =  preg_replace("#<li>Editor</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Editor</a></li>", $replace1);
echo 
preg_replace("#<li>Subscriber</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Subscriber</a></li>", 
preg_replace("#<li>Editor</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Editor</a></li>", 
preg_replace("#<li>Administrator</li>#", "<li><a href=\"http://www.php.kh.ua/script.php?role=роль\">Administrator</a></li>", $text)));
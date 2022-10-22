<?php
$text = "<p>Права пользователей:</p><ul><li>Administrator</li><li>Editor</li><li>Subscriber</li></ul>";
$pattern = '#(<li>\w+</li>)(<li>\w+</li>)(<li>\w+</li>)#';
$replacement = 
'${1}<li><a href=\"http://www.php.kh.ua/script.php?role=administrator\">Administrator</a></li>
${2}<li><a href=\"http://www.php.kh.ua/script.php?role=editor\">Editor</a></li>
${3}<li><a href=\"http://www.php.kh.ua/script.php?role=subscriber\">Subscriber</a></li>';
echo preg_replace($pattern, $replacement, $text);
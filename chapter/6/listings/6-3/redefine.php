<meta charset='utf-8'>
<?php
if(define('VALUE', 'Hello, World!')) {
    echo VALUE.'<br />';
}

if(define('VALUE', 1)){
    echo VALUE;
}
echo VALUE;
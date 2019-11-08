<meta charset='utf-8'>
<?php

require_once '../6-8/constant_class.php';

if(defined('ConstantClass::NAME')){
    echo 'True';
} else {
    echo 'False';
}
echo '<br />';
if(defined('ConstantClass::POSIION')){
    echo 'True';
} else {
    echo 'False';
}


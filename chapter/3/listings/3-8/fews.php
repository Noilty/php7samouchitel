<meta charset='utf-8'>
<?php
if(mt_rand(0, 1)) {
    ?>
    <div style="color:green;"><?= 'True' ?></div>
    <?php
} else {
    ?>
    <div style="color: red;"><?= 'False' ?></div>
    <?php
}
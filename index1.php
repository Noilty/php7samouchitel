<html>
    <head>
        <meta charset='utf-8'>
        <title>Самоучитель РНР 7</title>
    </head>
    <body>
        <?php
        $name = 'Roma';
        echo Hello($name);
        ?>
		<h1>https://github.com/Noilty/php7samouchitel.loc.git</h1>
    </body>
</html>

<?php
function Hello($str){
    return 'Hello, '.$str.'!';
}
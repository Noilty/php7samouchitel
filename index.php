<html>
    <head>
        <title>One</title>
    </head>
    <body>
        <?php
        $name = 'Roma';
        echo Hello($name);
        ?>
    </body>
</html>

<?php
function Hello($str){
    return 'Hello, '.$str.'!';
}

<!DOCTYPE HTML>
<?php

	//$url_path = "http://fit.tdc.edu.vn/courses/cdw2/tai/code_module_1600_v2";

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    }
?>
<html lang="en">

    <head>
        <title>Home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="./js/jquery-2.1.4.min.js" ></script>
        <script src="./js/bootstrap.min.js" ></script>
        <script src="./js/swiper.min.js"></script>

        <link href="./blocks/1601/css/1601.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1602/css/1602.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1603/css/1603.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1604/css/1604.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1605/css/1605.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1607/css/1607.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1608/css/1608.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1609/css/1609.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1610/css/1610.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1611/css/1611.css" rel="stylesheet" type="text/css" />
        <link href="./blocks/1612/css/1612.css" rel="stylesheet" type="text/css" />

        <script src="./blocks/1601/js/1601.js" ></script>
        <script src="./blocks/1604/js/1604.js" ></script>
        <script src="./blocks/1608/js/1608.js" ></script>
        <script src="./blocks/1610/js/1610.js" ></script>

        <!-- <link rel="stylesheet" href="./blocks/1601/css/d.css"> -->

    </head>

    <body>
        
        <?php include $dir_block.'/blocks/1601/1601-content.php'; ?>
        <?php include $dir_block.'/blocks/1602/1602-content.php'; ?>
        <?php include $dir_block.'/blocks/1603/1603-content.php'; ?>
        
        
        
        <?php include $dir_block.'/blocks/1611/1611-content.php'; ?>
        <?php include $dir_block.'/blocks/1612/1612-content.php'; ?>

    </body>

</html>
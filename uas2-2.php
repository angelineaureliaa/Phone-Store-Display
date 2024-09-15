<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS 2</title>
    <style type="text/css">
        body {
            margin: 0px;
        }
        .header {
            background: royalblue;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo img {
            height: 50px; 
			width: 50px;
            padding: 10px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 70px;
        }
        .columns {
            display: flex;
            justify-content: space-between;
        }
        .column {
            width: 45%
        }
        .column.left {
            text-align: left;
        }
        .column.right {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="ubaya.png" alt="Ubaya Logo">
        </div>
    </div>
    <div class="container">
        <div class="main">
            <div class="columns">
			<?php
    		$number = $_POST['number'];
    		$paragraph = $_POST['paragraph'];
    		$paragraphs = [];

    		for ($i = 0; $i < $number; $i++) {
        		$paragraphs[] = $paragraph;
			}

    		$total = count($paragraphs);
    		$left = ceil($total / 2);
    		$right = floor($total / 2);

    		echo '<div class = "column left">';
    		for ($i = 0; $i < $left; $i++) {
        		echo "<p>" . $paragraphs[$i] . "</p>";
    		}
    		echo '</div>';

    		echo '<div class = "column right">';
    		for ($i = 0; $i < $right; $i++) {
        		echo "<p>" . $paragraphs[$i] . "</p>";
    		}
    		echo '</div>';
			?>
            </div>
        </div>
    </div>
</body>
</html>

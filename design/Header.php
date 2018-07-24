<?php
    include "ConnectToDatabase.php";
// session_start();
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"> </script>
</head>
<body class="index">
    <header class="header">
        <div class="header-page-container">
    	    <h1><?php echo $SiteText; ?></h1>
            <nav class="nav_main">
                <ul>
                    <li><a href="">List1</a></li>
                    <li><a href="">List2</a></li>
                    <li><a href="">List3</a></li>
                    <li><a href="">List4</a></li>
                </ul>
            </nav>
        </div>
    </header>

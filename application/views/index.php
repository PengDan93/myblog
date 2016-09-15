<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">

    <script>
        window.addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>

</head>
<body>
    <header id="header">

        <img src="img/head.png" alt="" class="head">
        <h1>Hello..!</h1>
        <p>My name is Web & do Creative Bots</p>
        <a href="#contact-us" id="contact" class="contact">
            <span class="glyphicon glyphicon-triangle-bottom"></span>
        </a>
    </header>
    <div id="content"></div>
    <dic id="contact-us"></dic>
    <div id="footer"></div>

<script src="js/jquery-1.11.3.min.js"></script>
<script>
    $(function(){

    });
</script>


</body>
</html>
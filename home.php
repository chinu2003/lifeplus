
<?php include 'config.php';?>
<!DOCTYPE html> 
<html>
<head>

<title> lifeplus </title>
<style>
    body {
            margin: 0px;
            padding: 0px;
            border: 2px solid red;

        }

    .left{
        border: 2px solid green;
    }
</style>
</head>

 <frameset rows = "1%,*%" border=0>
        <frame name = "top" src = "./main/top.html">  
    <frameset cols = "100%,*%">" 
        <!-- <frame class="left" name = "left" src = "./main/service.php" />   -->
        <frame name = "" src = "main.php" /> 
        
    </frameset> 
</frameset>




</html>

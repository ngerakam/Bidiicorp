<?php
session_start();
if($_SESSION['username']==null){
    header("location: login.html");
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <title>BIDIIcorp.</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sicky-top">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" collapsed data-toogle="collapse" data-target=".nav-collapse" id="#menuitem">
                        <span class="icon-th-list"></span>
                    </button>
                    <a href="#" class="brand">
                       <a>
                            <img src="pics/bidii.png" width="60" height="50" />
                        </a>
                    </a>
                </div>
                <div class="nav-collapse collapse" id="menuitem">
                    <ul class="nav pull-right">
                        <li class="nav-item" active>
                            <a class="nav-link" href="" ><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="info.html">Mycontact info.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">ACCOUNTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LOGOUT </a>
                        </li>
                    </ul>

                </div>
            </div>
    </nav>
    <div class="hero-unit">

    
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span3" id="table">
                <ul id="navlist">
                    <li>
                        <a title="LINK: NEWS " href="news.html">News</a>
                    </li>
                    <li>
                        <a title="LINK: Advice page" href="disease.html">Advice & DISEASES</a>
                    </li>
                    <li><a href="blank.html" target="_blank">
                     milk exchange rate</a>
                    </li>
                </ul>
            </div>
            <div class="span9" color="red">
                <h3>My objective</h3>
                <p>
                    My objective is to ensure that  I work towards
                    ensuring a productive output from my cattle.</br>
                    To utilize all resources allocated to me by the company 
                    and to ensure I provide education to other farmers who
                    may need to be help.<br>
                    To go to farming workshops and ensure that I mordernize
                    my farming by purchasing quality equipments.
                    </p><br><br>

                    <div class="row-fluid" align="center">
                        <div class="span5">
                            <strong>My picture</strong><br><br>
                    <img src="pics/56.jfif" alt="farmer's pic">
                    </div>
                    <div class="span4">
                        <strong>Ambition</strong><br><br>
                        <img src="pics/21.jfif" alt="ambition">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="row-fluid">
                <div class="span3">
                
            </div>
            <div class="span9" id="DISEASES">
                
            </div>
            </div>
        </div>
        
    </div>

    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="js/bootstrap.js"></script>



</body>

</html>

<style type="text/css">
    body {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 10pt;
    }
    
    #navlist {
        width: 250px;
        padding-left: 0;
        margin-left: 0;
        border-bottom: 1px solid #cccccc;
    }
    
    #navlist li {
        list-style: none;
        margin: 0;
        border-top: 1px solid #666666;
        line-height: 200%;
    }
    
    body {
        margin: 10px 10px 0px 10px;
        padding: 0px;
    }
    
    #table {
        background-color: 0;
    }
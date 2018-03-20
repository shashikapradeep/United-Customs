<!DOCTYPE html>
<html >
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
   
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body id="page-top">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html#page-top">United Customs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a class="page-scroll" href="login.html#page-top">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#portfolio">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="cont">
        <form id="order" action="edit.php" method="post">
        <div class="imgpanel imghead" id="pattern">
            <h2>Select Pattern:</h2>
       <div class="gallery">
           <input type="radio" name="pat" value="bc">
  <a target="_blank">
    <img src="img/bc.jpg" alt="Blue Camo" width="300" height="200">
  </a>
</div>

<div class="gallery">
    <input type="radio" name="pat" value="brc">
  <a target="_blank" >
    <img src="img/brc.jpg" alt="Brown Camo" width="300" height="200">
  </a>
 </div>

<div class="gallery">
    <input type="radio" name="pat" value="gc">
  <a target="_blank">
    <img src="img/gc.jpg" alt="Green Camo" width="300" height="200">
  </a>
 </div>
        </div>
        
         <div class="imgpanel imghead" id="shoe">
            <h2>Select Type:</h2>
       <div class="gallery">
           <input type="radio" name="sho" value="ht">
  <a target="_blank">
    <img src="img/hi-top-custom.jpg" alt="High Top" width="300" height="200">
  </a>
</div>
<div class="gallery">
    <input type="radio" name="sho" value="lt">
  <a target="_blank">
    <img src="img/low-top-custom.jpg" alt="Low Top" width="300" height="200" >
  </a>
 </div>
        </div>
         
    <div class="imgpanel imghead" id="combo">
            <h2>Select Combination:</h2>
       <div class="gallery">
           <input type="radio" name="comb" value="c1">
  <a target="_blank">
    <img src="img/c1.jpg" alt="c1" width="300" height="200">
  </a>
</div>

<div class="gallery">
    <input type="radio" name="comb" value="c2" width="300" height="200">
  <a target="_blank" >
    <img src="img/c2.jpg" alt="c2" >
  </a>
 </div>

<div class="gallery">
    <input type="radio" name="comb" value="c3" width="300" height="200">
  <a target="_blank">
    <img src="img/c3.jpg" alt="c3" >
  </a>
 </div>
        </div>
        <center><button class="login_submit" style="width: 50%;">Order Now</button></center>
        </form>
    </div>
    <?php
    @session_start();
    $client = $_SESSION["user"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pattern = mysql_real_escape_string($_POST['pat']);
    $shoetype = mysql_real_escape_string($_POST['sho']);
    $combination = mysql_real_escape_string($_POST['comb']);
	$amount=400;
    $bool = true;
    if($pattern == null || $shoetype == null || $combination == null)
    {
        Print '<script>alert("Select all the aspects of combination!!");</script>'; // Prompts the user
		Print '<script>window.location.assign("edit.html");</script>'; // redirects to register.php
        break;
    }
    if($shoetype == "ht")
    {
        $amount = $amount+600;
    }
    else
    {
        $amount = $amount+800;
    }
    if($combination == "c1")
    {
        $amount = $amount+1000;
    }
    else if($combination == "c2")
    {
        $amount = $amount+800;
    }
    else
    {
        $amount = $amount+600;
    }
    $address = "/img/".$pattern.$shoetype.$combination.".jpg";
    $_SESSION["ad"]=$address;
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("data3") or die("Cannot connect to database"); //Connect to database
	mysql_query("INSERT INTO data3.order VALUES ('$client','$pattern','$shoetype','$combination','$amount','$address')"); //Inserts the value to table users
	Print '<script>window.location.assign("final.php");</script>'; // redirects to register.php
    
}
?>
     <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
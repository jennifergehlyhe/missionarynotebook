<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">   
    <style>
.clearfix{*zoom:1;}.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
.clearfix:after{clear:both;}
.hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.btn-file{overflow:hidden;position:relative;vertical-align:middle;}.btn-file>input{position:absolute;top:0;right:0;margin:0;opacity:0;filter:alpha(opacity=0);transform:translate(-300px, 0) scale(4);font-size:23px;direction:ltr;cursor:pointer;}
.fileupload{margin-bottom:9px;}.fileupload .uneditable-input{display:inline-block;margin-bottom:0px;vertical-align:middle;cursor:text;}
.fileupload .thumbnail{overflow:hidden;display:inline-block;margin-bottom:5px;vertical-align:middle;text-align:center;}.fileupload .thumbnail>img{display:inline-block;vertical-align:middle;max-height:100%;}
.fileupload .btn{vertical-align:middle;}
.fileupload-exists .fileupload-new,.fileupload-new .fileupload-exists{display:none;}
.fileupload-inline .fileupload-controls{display:inline;}
.fileupload-new .input-append .btn-file{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0;}
.thumbnail-borderless .thumbnail{border:none;padding:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.fileupload-new.thumbnail-borderless .thumbnail{border:1px solid #ddd;}
.control-group.warning .fileupload .uneditable-input{color:#a47e3c;border-color:#a47e3c;}
.control-group.warning .fileupload .fileupload-preview{color:#a47e3c;}
.control-group.warning .fileupload .thumbnail{border-color:#a47e3c;}
.control-group.error .fileupload .uneditable-input{color:#b94a48;border-color:#b94a48;}
.control-group.error .fileupload .fileupload-preview{color:#b94a48;}
.control-group.error .fileupload .thumbnail{border-color:#b94a48;}
.control-group.success .fileupload .uneditable-input{color:#468847;border-color:#468847;}
.control-group.success .fileupload .fileupload-preview{color:#468847;}
.control-group.success .fileupload .thumbnail{border-color:#468847;}
    </style>
</head>
<body>
    
<!--Navigation menu Bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>  
    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="home.php">HOME</a></li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">POSTS
     <span class="caret"></span></a>
     <ul class="dropdown-menu">
     <li><a href="posts.php">PHOTO GALLERY</a></li>
     <li><a href="journal.php">JOURNAL</a></li>    
     <li><a href="biographies.php">BIOGRAPHIES</a></li>
     <li><a href="maps.php">MISSIONARY MAP</a></li>
     </ul>
     </li>      
     <li class="dropdown">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#">MISSION PROGRAM
     <span class="caret"></span></a>
     <ul class="dropdown-menu">
     <li><a href="program.php">PROGRAM INFO</a></li>  
     <li><a href="upcoming-events.php">UPCOMING EVENTS</a></li>     
     <li><a href="events-calendar.php">EVENTS CALENDAR</a></li>
     <li><a href="resources.php">RESOURCES</a></li>
     </ul>
     </li> 
     <li><a href="donate.php">DONATE</a></li>
     <li><a href="submit.php">SUBMIT</a></li>
     <li class="dropdown">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#">STORE
     <span class="caret"></span></a>
     <ul class="dropdown-menu">
     <li><a href="shop.php">SHOP</a></li>
     <li><a href="login.php">ACCOUNT</a></li>
     <li><a href="shop-policies.php">SHOP FACTS</a></li>
      </ul>     
      </li>
      <li><a href="contact-form.php">CONTACT</a></li>
      <li><a href="about.php">ABOUT</a></li>
      </ul>  
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> ACCOUNT</a></li>
      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> CART</a></li> 
      <li><a href="#" class="fa fa-facebook"></a></li>
      <li><a href="#" class="fa fa-twitter"></a></li>
     </ul>
    </div>
  </div>
</nav>
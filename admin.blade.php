<!doctype html>
<html lang="en">
  <head>
  
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="../css/style1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/5b21c2f0d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="container-fluid navbar navbar-expand" id="bg">
<a href="index1.html"><img src="img/logo1-removebg-preview.png" alt="NKS BRANDS" class="navbar-brand img-fluid img-responsive" id="logo"></a>
<div class="logo">
<a href="index1.html" class="text-decoration-none" ><h5>NKS BRANDS</h5></a>
</div>
<div class="offset-1 input">
<input type="text" placeholder="Search Here...">
<button type="submit"><i class="fas fa-search" ></i></button>
</div>
<div class="about row">
<i class="fas fa-shopping-cart"></i>
<a href="about.blade.php"><h5>About</h5></a>
<a href="contact.blade.php"><h5>Contact Us</h5></a>
</div>
</nav>
<nav class="navbar fixed-top d-lg-none" id="bg1">
<a href="index1.html"><img src="img/logo1-removebg-preview.png" alt="NKS BRANDS" class="navbar-brand img img-responsive" id="logo"></a>
<a href="index1.html" class="mr-auto"><h5>NKS BRANDS</h5></a>
<div class="input">
<input type="text" placeholder="Search Here..." onclick="wi()" id="width">
<button type="submit"><i class="fas fa-search" ></i></button>
</div>
<div id="mySidenav" class="sidenav float-right">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="about.blade.php">About</a>
<a href="contact.blade.php">Contact Us</a>
<a href="#">Show Cart <i class="fas fa-shopping-cart pl-2"></i> </a>
<div class="dropdown">
<a style="color: #818181;" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Categories:
</a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Truck Accessories</a> <hr>
<a class="dropdown-item" href="#">Motorcycle Accessories</a> <hr>
<a class="dropdown-item" href="#">Car Accessories</a> <hr>
<a class="dropdown-item" href="#">Reflector</a> <hr>
<a class="dropdown-item" href="#">Road Guide</a>
</div>
</div>
<div class="news">
<label class="btn" for="toggle"><span>Sign up for Newsletter</span></label>
<form class="form-popup active">
<div class="content">
<i class="fas fa-times"></i>
<h4>Become Our Family!</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloremque?</p>
<label>Email:</label>
<br>
<input type="email" placeholder="Email" required>
<input type="button" value="Subscribe">
</div>
</form>
</div>
</div>
<div class="icon pr-1">
<button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook">
<a href="https://www.facebook.com/nksbrand" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
</button>
<button type="button" class="btn wechat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wechat">
<a href="we.html" target="_blank"><i class="fab fa-weixin fa-2x"></i></a>
</button>
</div>
<div id="main">
<span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776;</span>
</div>
</nav>
<header class="container-fluid" id="header">
<div class="row offset-2">
<a href="#">Truck Accessories</a>
<a href="#">Motorcycle Accessories</a>
<a href="#">Car Accessories</a>
<a href="#">Reflector</a>
<a href="#">Road Guide</a>
</div>
</header> 
@yield('orgbody')

<footer class="d-sm-block mt-4">
<div class="footer">
<div class="soc">
<span>Our Social Media Links:</span> 
</div>
<div class="con">
<span>Contacts:</span>
</div>
<div class="news mt-3">
<span class="btn btn-info border border-collapse" id="sp">Sign up for Newsletter</span>
<form class="form-popup active">
<div class="content">
<i class="fas fa-times"></i>
<h4>Become Our Family!</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, doloremque?</p>
<label>Email:</label>
<br>
<input type="email" placeholder="Email" required>
<input type="button" value="Subscribe">
</div>
</form>
</div>
<div class="loc">
<span>Location:</span>
</div>
<div class="icon">
<button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook">
<a href="https://www.facebook.com/nksbrand" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
</button>
<button type="button" class="btn wechat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wechat">
<a href="we.html" target="_blank"><i class="fab fa-weixin fa-2x"></i></a>
</button>
</div>
<div class="con">
<span>Number 1</span> <br>
<span>Number 2</span> <br>
<span>Number 3</span>
</div>
<div class="loc">
<span>Somewhere, street</span>
</div>
</div>
</footer>
<footer>
<div class="intro col-xs-12">
<span>This website is designed and managed by someone, somewhere in the world.</span>
</div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
$("form").hide();
$("span").click(function(){
$("form").show();
})
$(document).ready(function(){
$("i").click(function(){
$("form").hide();
})
})
})
</script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style = "disable";
  }
  function wi() {
    document.getElementById("width").style.width = "139px";
  }
  </script>
</body>
</html>
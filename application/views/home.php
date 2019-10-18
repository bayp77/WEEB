<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px; 
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}
.scrollbar {
    background-color: #F5F5F5;
    float: left;
    height: 300px;
    margin-bottom: 25px;
    margin-left: 22px;
    margin-top: 40px;
    width: 65px;
    overflow-y: scroll;
}

.force-overflow {
    min-height: 450px;
}
#style-1::-webkit-scrollbar {
    width: 6px;
    background-color: #F5F5F5;
}
#style-1::-webkit-scrollbar-thumb {
    background-color: #000000;
}
#style-1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
} 

::-webkit-scrollbar { 
    display: none; 
}

</style>

	<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/main.css">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


<body>

<div id="container ">
   
            <div class="jumbotron" style="height: 772px; width: 1370px; background-image: url(./assets/image/2.jpg); background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;   ">
                <h1 class="text-center" style="font-family: PointedOut; color: #fff ; font-size: 160px; margin-top: 150px;"  >READ.ME</h1>
                <h2 class="text-center" style="font-family: kaiti;color:#fff; font-size: 80px ;padding-top:10px; margin-top: 100px ">MADEAFUCKINGNEWSFORYOU</h2>
                <h4 class="text-center" style="color: #fff; letter-spacing: 2px;opacity: 0.6;" > asdasdasdsasad32ioqklasdijoasdkqiwodamsklxiwqkmsdalqowilsdasadgrwoeipwfkpdsjfwkpdwl </h4>
                <h4 class="text-center" style="color: #fff;letter-spacing: 2px;opacity: 0.6;">aghjfkdlghfjdlghjfdsghfjdshwrhewrjewfhjdwjdlsdjfkdlnijrnmkfjhgnfmkcjvhngfmkdicujvhngfmdicujvhnf</h4>
            </div>


            <div class="jumbotron " style="height: 1000px;background-color:#bae1ff;width: 1370px">
              <h1 class="text-center" style="font-family:Kaiti;letter-spacing: 2px">DAILY INDEX</h1><P>
          
          <?php 
              $ID  = 1; 
              foreach($berita as $u){ 
     
          ?>

      
   <div class="col-xs-4">

     <a href='<?php echo $berita['ID']?>' ><img style="width: 400px; "  src="<?php echo base_url() . 'assets/image/'.$u->Gambar?>"/></a>  
    <figcaption style="font-family:Lovelo Black;font-size: 25px"   class="text-center"><?php echo $u->Judul ?></figcaption>
  </div>
    <?php } ?>
            
       <button  type="button" class="btn btn-dark btn-lg btn-block  " style="margin-top: 775px;">Dark</button> 

        <hr>
    </div>
    

 <div class="jumbotron" style="height:200px;">
  <h1 class="text-center" style="font-family:Kaiti;letter-spacing: 2px">DAILY INDEX</h1>

  </div>
</body>

<footer>
 
  </footer> 

</html>s



<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Lily</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Parisienne|Cookie|ubuntu">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet'>
<style>
body,h1,h2,h3,h4,h5 {font-family: Signika;}
* {
  box-sizing: border-box;
}
  .submitbutton{
    background-color: green;
    color: white;
    border-radius: 8px;
    border-width: 0px;
    width: 100px;
    font-size: 15px;
    font-family: 'Signika', sans-serif;
  }
/* ******* step 3: box sizing */
/* For mobile phones: */
@media only screen and (max-width: 1030px) {
  /* For tablets: */
  .col-t-0{width: 4.165%;display: none;}
  .col-t-1 {width: 8.33%;display: none;}
  .col-t-15{width: 12.495%;display: none;}
  .col-t-175{width: 14.5775%;display: none;}
  .col-t-2 {width: 16.66%;display: none;}
  .col-t-25{width: 20.8225%;display: none;}
  .col-t-3 {width: 25%;display: none;}
  .col-t-35{width: 29.165%;display: none;}
  .col-t-4 {width: 33.33%;}
  .col-t-5 {width: 41.66%;}
  .col-t-6 {width: 50%;}
  .col-t-7 {width: 58.33%;}
  .col-t-8 {width: 66.66%;}
  .col-t-9 {width: 75%;}
  .col-t-10 {width: 83.33%;}
  .col-t-11 {width: 91.66%;}
  .col-t-12 {width: 100%;}
  .two{width: 25%; display: block;}
}

@media only screen and (min-width: 1030px) {
  /* For desktop: */
  .col-v-0{width: 4.165%;}
  .col-v-1 {width: 8.33%;}
  .col-v-15{width: 12.495%;}
  .col-v-175{width: 14.5775%;}
  .col-v-2 {width: 16.66%;}
  .col-v-25{width: 20.8225%;}
  .col-v-3 {width: 25%;}
  .col-v-35{width: 29.165%;}
  .col-v-4 {width: 33.33%;}
  .col-v-5 {width: 41.66%;}
  .col-v-6 {width: 50%;}
  .col-v-7 {width: 58.33%;}
  .col-v-8 {width: 66.66%;}
  .col-v-9 {width: 75%;}
  .col-v-10 {width: 83.33%;}
  .col-v-11 {width: 91.66%;}
  .col-v-12 {width: 100%;}
  .two1{display: none;}
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-m-0 {width: 4.165%;}
  .col-m-1 {width: 8.33%;}
  .col-m-125{width: 10.4225%;}
  .col-m-15{width: 12.495%;}
  .col-m-1625{width: 13.53625%;}
  .col-m-175{width: 14.5775%;}
  .col-m-2 {width: 16.66%;}
  .col-m-25{width: 20.8225%;}
  .col-m-3 {width: 25%;}
  .col-m-35{width: 29.165%;}
  .col-m-4 {width: 33.33%;}
  .col-m-5 {width: 41.66%;}
  .col-m-6 {width: 50%;}
  .col-m-7 {width: 58.33%;}
  .col-m-8 {width: 66.66%;}
  .col-m-9 {width: 75%;}
  .col-m-10 {width: 83.33%;}
  .col-m-11 {width: 91.66%;}
  .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 300px) {
  /* For tablets: */
  .col-n-0 {width: 4.165%;}
  .col-n-1 {width: 8.33%;}
  .col-n-125{width: 10.4225%;}
  .col-n-15{width: 12.495%;}
  .col-n-1625{width: 13.53625%;}
  .col-n-175{width: 14.5775%;}
  .col-n-2 {width: 16.66%;}
  .col-n-25{width: 20.8225%;}
  .col-n-3 {width: 25%;}
  .col-n-35{width: 29.165%;}
  .col-n-4 {width: 33.33%;}
  .col-n-5 {width: 41.66%;}
  .col-n-6 {width: 50%;}
  .col-n-7 {width: 58.33%;}
  .col-n-8 {width: 66.66%;}
  .col-n-9 {width: 75%;}
  .col-n-10 {width: 83.33%;}
  .col-n-11 {width: 91.66%;}
  .col-n-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-0 {width: 4.165%;}
  .col-1 {width: 8.33%;}
  .col-125{width: 10.4225%;}
  .col-15{width: 12.495%;}
  .col-1625{width: 13.53625%;}
  .col-175{width: 14.5775%;}
  .col-2 {width: 16.66%;}
  .col-25{width: 20.8225%;}
  .col-35{width: 29.165%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
[class*="col-"] {
  float: right;
  padding-top: 20px;
}

/* ******* step 5: clear both */
.row::after {
  content: "";
  clear: both;
  display: block;
}
 .menu-position{
    position: fixed;
    display: block;
    z-index: 99;
    width: 100%;
    background-color:black;
  }
.container {
  width: 200px;
  clear: both;
}

.container input {
  width: 200px;
  clear: both;
}
.button {
    border-radius: 25px;
    padding: 10px; 
    width: 150px; 
    text-shadow: 2px;
    color:??white;
    text-shadow:??-1px 0   black, 
                   0   1px black,  
                   1px 0   black, 
                  0  -1px black;

    font-style:bold;
}


#footer {
  background: #333;
  padding: 30px 0 20px;
}
#footer h3 {
  color: #1e7a46;
  font-weight: 400;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 20px;
}
#footer .social {
  margin: 10px 0 50px 0;
}
#footer .social ul li {
  display: inline-block;
  margin: 0 20px;
}
#footer .social i.fa {
  font-size: 22px;
  width: 40px;
  height: 40px;
  padding: 10px;
  background: #444;
  color: #6aaf08;
  border-radius: 50%;
  transition: all 0.3s;
}
#footer .social i.fa:hover {
  background: #6aaf08;
  color: #fff;
}
#footer p {
  color: #666;
  font-size: 15px;
}
#footer a {
  color: #888;
}
#footer a:hover {
  color: #ccc;
}
  .menu{
    background-color: black;
    color: white;
    float: left; 
    margin: 0px;
    text-align: center;
    font-family: Signika;
    font-size: 15px;
    border-left-color: white ;
    border-left-width: 2px;
    border-left-style: solid;

  }
  .menu:hover{
    color: green;
  }
  .two:hover {background-color: black;}

  .dropdown:hover {background-color: indigo;}
  .footer2{
    background-color: #141414;
    text-align: center;
    color: white;
    font-family: Verdana, sans-serif;
    font-size: 16px;
    width: 100%
    height: 50px;
    padding-top: 12px;
    padding-bottom: 12px;
    transform: translate(-20% 0%);
    margin-top: 0px;
  }
.dropbtn {
    color: white;
    background-color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    background-color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;color: indigo;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: indigo;}

</style>
<body class="w3-white" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;">
  <div class="container" style="width:100%;padding:0%; float:left"> 
      <div class="menu-position" style="padding-left: 0px;" align="left;">
    <div align="left" style="margin-left:-60px;padding-left: 0px;">
    <div class="menu two two1" style="border-left-style: none; float: left;padding-top: 13px;margin-right: 0px;padding-right: 0px;margin-left: -30px;padding-left: 0px;"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" style="border-left-style: none;float: left;text-align: left; vertical-align: center;padding-top: 15px;margin-left: 0px;padding-left: 0px;"><h3 style="font-family: ubuntu ;color: white;display: inline; padding-bottom: 4px;">Plant </h3><h3 style="font-family: ubuntu ;color: blue; font-style: bold;display: inline; padding-bottom: 04px;">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none; float: left;padding-left: 0px;padding-top: 0px;"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none;padding-left: 0px;"><b style="width: 100%;border-left-style: none;padding-left: 0px;"><a href="HomePage.php" style="color: white;">HOME</a></b></div>
<div class="menu col-15 col-m-15 col-n-2"><b style="width: 100%;"><a href="plantsMain (1).php" style="color: white;">PLANTS</a></b></div> 
  <div class="menu col-25 col-m-25 col-n-5"><b style="width: 100%;"><a href="HomePage.php?#Seasonal" style="color: white;">SEASONAL</a></b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b style="width: 100%;"><a href="ToolPage.php" style="color: white;">TOOLS</a></b></div>
  <div class="menu col-1 col-m-1 col-n-15"><b style="width: 100%;"><a href="TipsPage.php" style="color: white;">TIPS</a></b></div>
 <div class="menu col-15 col-m-15 col-n-3"><b style="width: 100%;"><a href="NurseryPage.php" style="color: white;">NURSERIES</a></b></div>
  <div class="menu col-15 col-m-15 col-n-3"  ><b style="width: 100%;"><a href="SignUpForm.php" style="color: white;">SIGN UP</a></b></div>



  <?php

        if(isset($_SESSION['t3'])){
          if(isset($_GET['r'])){
session_destroy();echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';}
else{
  echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href="cart.php" style="color: white;">CART</a></b>
<div class="dropdown-content">
    <a href="cart.php" style="color: white;">View Cart</a><a href="logout.php" style="color: white;">Log Out</a>
  </div>
        </div>';
}
 
      }
      else if(isset($_SESSION['r1'])){
        if(isset($_GET['ret'])){
        $re=$_GET['ret'];}
        $r1=$_SESSION['r1'];
        if($r1==="Administrator"){echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"admin.php?ret='.$re.'" style="color: white;">ADMIN</a></b>
<div class="dropdown-content">
    <a href='.'"admin.php?ret='.$re.'">Editations</a>
    <a href="logout.php">Log Out</a>
  </div>
        </div>';}
          else{if(isset($_GET['re'])){
        $re=$_GET['re'];}

        echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"retailer.php?ret='.$re.'" style="color: white;">RETAILER</a></b>
<div class="dropdown-content">
    <a href='.'"retailer.php?ret='.$re.'">Account</a>
    <a href="logout.php">Log Out</a>
  </div>
        </div>';}
        if(isset($_GET['r'])){
session_destroy();echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';}
      }
     else{
         
    
          echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';
        }
            //display cart
?>

   <div class="menu two two1 dropdown" style="float: right;border-left-style: none;margin-right:0px;padding-top: 0px;"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php" style="color: white;">HOME</a>
    <a href="PlantsMain (1).php" style="color: white;">PLANTS</a>
    <a href="HomePage.php?#Seasonal" style="color: white;">SEASONAL PICKS</a>
    <a href="ToolPage.php" style="color: white;">TOOLS</a>
    <a href="TipsPage.php" style="color: white;">TIPS</a>
    <a href="SignUpForm.php" style="color: white;">SIGN UP</a>
    <a href="NurseryPage" style="color: white;">NURSERIES</a>
    <a href="logout.php" style="color: white;">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" style="border-left-style: none; float: right;padding-top: 17px;padding-bottom: 0px;"><a href="SignUpForm.php"><div style="float: right;padding-right: 22px;" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  style="background-color: black;border-radius:50%;border: 1px solid white;"></div><br><div style="clear: right; float: right;"><a href="SignUpForm.php" style="color: white;">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<br><br><br>

<header>
          <div style="max-width: 100%;width: 1350px; max-height: 50%;padding-top:0px;align-content: right">
            <h1 style="font-size: 5vw;color:  #FF1493;font-family: 'Signika', sans-serif;display:inline;font-weight: bold;opacity: 0.85;padding-right: 58vh;"><br>Product Name: Lily<br></h1>
            <div id="backdrop" style="background: url(css/WebsiteImages/n10.jpg) fixed no-repeat ; background-size:cover; height: 100%; height: 500px;width: 100%; margin-right: auto; margin-left: auto; display: block;margin-bottom: 30px;opacity: 0.85">
          </div>
        </div>
        
            
<div class="w3-row">
    <div class="w3-container w3-padding" style="background-color:#FF1493;opacity: 0.8;max-width: 100%; max-height: 20%">
      <h2 style="color: white; font-family:Gruppo;font-weight:bold;font-size: 70px;text-align: center">Lily: Product Description</h2><center><img src="https://images.homedepot-static.com/productImages/38de5f1d-135e-4826-b5b6-45c4830b46b4/svn/van-zyverden-flower-bulbs-11351-64_1000.jpg" width=20% height=20% style="border-radius:50%"></center>
      
    </div>
      
    </div>
    <div class="w3-container">
      <p style="color: hotpink; font-family: Gruppo">
      <h2 style="color: hotpink; font-family: Gruppo"><b>Description:</b></h2><br>

      <?php
  
      $db=mysqli_connect('localhost','root','','new');
        if(!$db){
          die("Connection failed" . mysqli_connect_error());
        }
        $query="SELECT Information,Fid FROM flower where FName='Lily'";
        $results=mysqli_query($db,$query);
        if($results){
        if (mysqli_num_rows($results) >0 ){
          while($row=mysqli_fetch_assoc($results)){
            echo $row['Information'];
          $fid=$row['Fid'];
        }}}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php
//redirecting once req sent
if(isset($_GET['count'])){
    $c=$_GET['count'];
    if($c>0){echo '<script>
      $(document).ready(function(){alert("Your Request Has been sent");
      })</script>';}
}
?>
<div class="w3-row">
        <div class="w3-col m8 s12">
          <p><?php
          echo "<form action='edit.php'> 
            <input type='hidden' name='fid' value='".$fid."''>

            <textarea name='ta' rows='7' cols='150'>Edit product description...</textarea><br>
            <input type='submit' name='edit' class='w3-button w3-padding-large w3-white w3-border' value='Edit' style='background-color:green; font-weight:bold'></form>";

            ?></p>

        </div>
        
      </div>


   
    </p>
    <p style="color: hotpink;font-family: Gruppo">
      <h2 style="text-align:justify;color: hotpink; font-family: Gruppo"><b>Cultivation:</b></h2><br<p style="font-family: Gruppo; text-align: justify; font-size: 20px">
    Many species are widely grown in the garden in temperate and sub-tropical regions. They may also be grown as potted plants. Numerous ornamental hybrids have been developed. They can be used in herbaceous borders, woodland and shrub plantings, and as patio plants. Some lilies, especially Lilium longiflorum, form important cut flower crops. These may be forced for particular markets; for instance, Lilium longiflorum for the Easter trade, when it may be called the Easter lily.

Lilies are usually planted as bulbs in the dormant season. They are best planted in a south-facing (northern hemisphere), slightly sloping aspect, in sun or part shade, at a depth 2?? times the height of the bulb (except Lilium candidum which should be planted at the surface). Most prefer a porous, loamy soil, and good drainage is essential. Most species bloom in July or August (northern hemisphere). The flowering periods of certain lily species begin in late spring, while others bloom in late summer or early autumn.They have contractile roots which pull the plant down to the correct depth, therefore it is better to plant them too shallowly than too deep. A soil pH of around 6.5 is generally safe. The soil should be well-drained, and plants must be kept watered during the growing season. Some plants have strong wiry stems, but those with heavy flower heads may need staking
    </p>
  </br<p>

<p style="color: hotpink; font-family: Gruppo; text-align: justify">
      <h2 style="color: hotpink; font-family: Gruppo"><b>Culinary and herb uses:</b></h2><br<p style="font-family: Gruppo; text-align: justify; font-size: 20px">
    Lilium bulbs are starchy and edible as root vegetables, although bulbs of some species may be very bitter. The non-bitter bulbs of Lilium lancifolium, Lilium pumilum, and especially Lilium brownii and Lilium davidii var. unicolor are grown on a large scale in China as a luxury or health food, and are most often sold in dry form for herb, the fresh form often appears with other vegetables. The dried bulbs are commonly used in the south to flavor soup. Lily flowers are also said to be efficacious in pulmonary affections, and to have tonic properties.Lily flowers and bulbs are eaten especially in the summer, for their perceived ability to reduce internal heat. They may be reconstituted and stir-fried, grated and used to thicken soup, or processed to extract starch. Their texture and taste draw comparisons with the potato, although the individual bulb scales are much smaller. There are also species which are meant to be suitable for culinary and/or herb uses. There are five traditional lily species whose bulbs are certified and classified as "vegetable and non-staple foodstuffs" on the National geographical indication product list of China.</p>
  </br<p>

    </div>
  </div>

  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white" align="center">
        <div class="w3-row">
      </div>

  </div>

</div>
<div id="footer" class="container text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;">
  <center>
  <div style="clear:right;color: white;"><caption>&copy;2021 PlantWorld. All rights reserved</caption></div>
</center>
<form><center><h1 style="color: gray;">DROP US A MESSAGE</h1>
  <div class="container" style="color: gray;">
      
First Name:<br><input type="text" name="t1"><br><br>
              Last Name:<br><input type="text" name="t2"/><br><br>
              Email Address:<sup>*</sup><br><input type="Email" name="e1" placeholder="required"/><br><br>
              Message:<br><input type="text" name="t2"><br><br>
  


<input type="submit" name="b1" value="Send Message"></center><br></form>
   
  </div>  </div>
</body>
</html>
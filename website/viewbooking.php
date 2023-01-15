<! DOCTYPE html >
<html  lang="en" dir="ltr">
 <head>
    <title> view football courts </title>
    <link rel="stylesheet" href="style/football.css"> 
    <meta charset="UTF-8">
    <meta name="keywords"content="booking ,courts,blayground">
    <meta name="description"content="booking ,courts,blayground">
    <meta name="viewport"content="width=device-width,initial-scale:1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="script.js" defer></script>
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
</script>

    
 </head> 

 <body> 
    <div class="floatingMenu">
        <img src="img/menu.png"  onclick="openNav()">
    </div>
    
    <div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index_1.php">Home</a>
			<a href="login.php">Login</a>
			<a href="signup.php">sign up</a>
			<a href="https://aast.edu/en/">About us</a>
			<a href="https://aast.edu/en/contacts/contact-us.php">Contact us</a>
		</div>

    <div class="header">
        <a href="index_1.html"><img src="img/AASTMT-Logo.png" width="200"></a>
    </div>
    <!-- ------------------------------------------------ -->







    







    <div class="screen">


        <div id="booking-body">
        <div id="price">
                <label> Trainning without lights: 1500 EGP</label>
                <label> Trainning with lights: 3000 EGP</label>
                <label> Trainning in handball court 90 min: 300 EGP</label>
                <label> Match without lights: 3000 EGP</label>
                <label> Match with lights: 5000 EGP</label>
                <label> Match in handball court : 500 EGP</label>
              
            </div>
            <div id="bookimg">
              <img src="img/DSC_0026 _cleanup.JPG" style="width: 20%; "> </div> 
            </div>
         
        <div id="form">
           <?php 
            include "config.php";
            $viewbooking ="SELECT * FROM football";
            $result = mysqli_query($con,$viewbooking);
            if(!$result){
                die("Error:".mysqli_errno($con));
            }
        //   while($row = mysqli_fetch_array($result))  {

        //     $row = mysqli_fetch_array($result);
        //   }
        $row = mysqli_fetch_array($result);
            echo "<h1>". $row["fcourt"]."</h1>"." ";
            echo "<h1>". $row["flights"]."</h1>"." ";
            echo "<h1>". $row["ftime"]."</h1>"." ";
           ?>

     </div>

   </div>

   
   <!-- ------------------------------------------------------------- -->

   <div class="footer">

    <div class="row">
       <div id="col-footer1">
           <div class="card">
               <a href="https://aast.edu/en/services/sports-services/videos.php" ><h1>Our videos</h1></a>
           <div class="portfolio-image">
               <a href="https://aast.edu/en/services/sports-services/videos.php" target="_blank"><img src="https://aast.edu/en/services/sports-services/img/video.jpg" alt="Our videos"></a>
           </div>
           </div>
       </div>
       <!-- colomn 2 -->
       <div id="col-footer2">
           <div class="card">
           <h1>important links</h1>
           <ul>
               <li><a href="https://aast.edu/ar/services/sports-services/contenttemp.php?page_id=48000054">About Us</a></li>
               <li><a href="https://aast.edu/ar/services/sports-services/contenttemp.php?page_id=48000064">Achievments</a></li>
               <li><a href="https://aast.edu/ar/services/sports-services/contenttemp.php?page_id=48000065">Trainning </a></li>
               <li><a href="https://aast.edu/ar/services/sports-services/contenttemp.php?page_id=48000057">Our Activities</a></li>
               <li><a href="https://aast.edu/ar/services/sports-services/contenttemp.php?page_id=48000039">Summer Camps</a></li>
               <li><a href="https://aast.edu/ar/services/sports-services/contenttemp.php?page_id=48000035">Gymnasium </a></li> 
           </ul>
           </div>

       </div>
       
       <!-- colomn 3 -->
       <div id="col-footer3">
           <div class="card">
               <h1>Our Contacts</h1>
               <p class="contact-us-footer">
                   Arab Academy for Science,Technology &amp; Maritime Transport<br>Abu Kir, Alexandria, Egypt<br>
                   P.O. Box 1029<br>
                   Tel:(+203) 5622366 - 5622388 - 5610950<br>
                   Fax:(+203) 5622525 - 5610950<br>
                   Email: <a href="mailto:sportsaast@aast.edu">sportsaast@aast.edu</a>
               </p>
           </div>

       </div>
           <br><br><br><br><br><br><br><br>
           <div class="row2">
           <div class="footer-copyright"> 2022 © All Rights Reserved IDC - Arab Academy for Science, Technology &amp; Maritime Transport | call center   19838 </div>
           </div>
   </div>

    
  </body>
</html>
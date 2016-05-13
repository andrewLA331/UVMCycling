<?php include("head.php") ?>
<!-- End Head Section -->

<!-- Start Body Section -->
<body id="uvmAbout">
<!-- Start Header/Nav Section -->

 <?php include("nav.php")?>

<!-- End Header/Nav Section -->
<!-- Start Main Content Section -->
<div class="main-content">
<div class="h1-wrap">
        <span class="h1" id="a-front"></span>
        <h1>About Us</h1>
        <span class="h1" id="a-after"></span>
        <span class="h1" id="skew"></span>
    </div>
<section class="parallax">
<div class="parallax-inner">

    <div class="slide">
    <div id="team-wrap">
        <div id="team">
<h2>Team</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
</div>
</div>
    
    <div class="slide">
     <div id="alumni-wrap">
        <div id="alumni">
<h2>Alumni</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
</div>
    </div>

<div class="slide">
<div id="contact-wrap">
<div id="contact-form">
<div id="contact">
<h2>Contact Us</h2>
    <fieldset>
    Name: <input type="text" name="name" value="<?php echo $name;?>"><br>
    Number: <input type="text" name="number" value="<?php echo $number;?>"><br>
    Email <input type="text" name="name" value="<?php echo $email;?>"><br>
    Comment:<br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  </fieldset>

</div>
</div>
</div>  
</div>
</div>
</section>
<div class="buffer"></div>
<?php include("uvm_subfooter.php")?>
<!-- End Main Content Section -->
<!-- Start Footer Section -->   
<?php include("footer.php")?>
<!-- End Footer Section -->
</body>
<!-- End Body Section -->
</html>
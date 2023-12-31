<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?> 

<header class="header">

   <!-- <div class="header-1">
      <div class="flex">
         <p><a href="login.php">Log In</a></p>
      </div>
   </div> -->

   <div class="header-2">
      <div class="flex">
         <!-- <a href="home.php" class="logo">Bookly.</a>
       -->
         <div class="logo">
            <a href="home.php">
               <img src="images/logo.png" alt="img">
            </a>
         </div>

         <nav class="navbar">
         <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="event.php">Events</a>
            <a href="contact.php">Feedback</a>
            <a href="orders.php">Orders</a>
            <a href="booking.php">My Bookings</a><span>(<?php echo $cart_rows_number; ?>)</span>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>
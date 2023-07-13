<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutus.jpg" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>LocalBash is an online event booking website that allows people to create or plan certain events like birthdays,
            anniversaries, graduations, and pasni online from a range of restaurants, clubs, and hotels. Based on the event 
            they are setting up and the expected attendance, it provides the user the opportunity to select any venue they like. 
            LocalBash will provide in depth details about the venues including images, and description. To plan an event the user 
            must create an account by signing up and logging into the system. Additionally, the website offers users a wide selection 
            of decorations they desire, like balloons, banners, candles, neon lights, party blowers, and many more. more. Along with the 
            previously mentioned details, the user must also choose the date and time they want the event to start off. Once the user has 
            created their event, they can view their event details consisting of the information they provided. They user will be granted 
            the permission to edit the details for the events like attendees, date & time, and decorations, but cannot change the venue. Furthermore, 
            they will also be allowed to delete the event if they want. A feedback option will also be provided to the user.</p>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
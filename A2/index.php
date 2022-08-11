<!DOCTYPE html>

<head>
   <!-- refrencing an external stylesheet -->
   <link rel="stylesheet" href="style/main.css" />
   <style>
      /* importing a font from online  */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
   </style>
   <title> Life - Home</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="container">

<?php require_once ("includes/header.php"); ?>

   <main>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   </main>

   <div id="logo"> <img src="images/Life.png" alt="LifeLogo.png" width="150"> </div>

   <?php require_once ("includes/sidebar.php"); ?>

   <!-- the use of 3 divs to seperate the main features of the website, highlighting the main 
   elements, almongside a small zoom animation while hovering over the particular div's and images -->

   <div id="content1">
      <a href="locations/yoga.html"><img src="images/Yoga.jpeg" alt="Yoga image" width="100%" height="100%"></a>
      <div class="divheading">Yoga</div>
      <div class="divtext">TIt’s time to roll out your yoga mat and discover the combination of physical and mental
         exercises that for thousands of years have hooked yoga practitioners around the globe. The beauty of yoga is
         that you don’t have to be a yogi or yogini to reap the benefits. Whether you are young or old, overweight or
         fit, yoga has the power to calm the mind and strengthen the body. Don’t be intimidated by yoga terminology,
         fancy yoga studios and complicated poses. Yoga is for everyone. </div>
   </div>

   <div id="content2">
      <a href="locations/stretching.html"><img src="images/Stretching.png" alt="stretching image" width="100%"
            height="100%"></a>
      <div class="divheading">Stretching</div>
      <div class="divtext">Stretching keeps the muscles flexible, strong, and healthy, and we need that flexibility to
         maintain a range of motion in the joints. Without it, the muscles shorten and become tight. Then, when you call
         on the muscles for activity, they are weak and unable to extend all the way. That puts you at risk for joint
         pain, strains, and muscle damage.</div>
   </div>

   <div id="content3">
      <a href="locations/meditation.html"><img src="images/Meditation.jpeg" alt="meditation image" width="100%"
            height="100%"></a>
      <div class="divheading">Meditation</div>
      <div class="divtext">Meditation is the habitual process of training your mind to focus and redirect your thoughts.
         The popularity of meditation is increasing as more people discover its many health benefits.
         You can use it to increase awareness of yourself and your surroundings. Many people think of it as a way to
         reduce stress and develop concentration. People also use the practice to develop other beneficial habits and
         feelings
         , such as a positive mood and outlook, self-discipline, healthy sleep patterns, and even increased pain
         tolerance.</div>
   </div>

   <!-- the footer presents relevant information to its section including the name of the website with a copyright symbol, 
      a link to the covid 19 website and a link to the contact us form (contactus.html). -->

      <?php require_once ("includes/footer.php"); ?>

</div>
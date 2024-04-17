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

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>
When it comes to automotive needs, choose us for quality, expertise, and affordability. We source top-grade spare parts, backed by our expert team's deep knowledge. Your satisfaction is our priority, offering competitive prices without compromising quality. Experience convenience with streamlined processes, ensuring a smooth journey every time.</p>
        
         <p>
Why Choose Us? Discover the Reasons Behind Our Trusted Reputation and Exceptional Service.</p>
         <p>Contact us for more information!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpeg" alt="">
         <p>Impressed with the prompt delivery and quality of the spare parts. Exactly what I needed for my car repairs. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Raffiq</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpeg" alt="">
         <p>Excellent service! The parts arrived quickly and were well-packaged. Will definitely be ordering from here again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Aiman</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpeg" alt="">
         <p>First time ordering from this shop and couldn't be happier. The parts were genuine and reasonably priced. A trustworthy source for all my automotive needs.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-stroke"></i>
         </div>
         <h3>Haziq_03</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpeg" alt="">
         <p>I've been a loyal customer for years, and once again, they've exceeded my expectations. The parts were in perfect condition, and the ordering process was effortless.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>SavageAdam</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.jpeg" alt="">
         <p>I was hesitant to order online, but I'm so glad I did. The parts were exactly as described, and the customer service team was incredibly helpful with my inquiries. Will definitely recommend to friends and family..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mahmud786</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpeg" alt="">
         <p>Fast shipping and high-quality parts. Saved me a trip to the store and got my car back on the road in no time. Thank you for the excellent service!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>DanialShaffiq</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">supportive colleague</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpeg" alt="">
         <div class="share">
            
            <a href="https://www.instagram.com/93_yunus?igsh=MTNvbG01enJ6YXoydA==" class="fab fa-instagram"></a>
            
         </div>
         <h3>Yunus Yusof</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100009993847187&mibextid=ibOpuV" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/rt_thazreen?igsh=OWpudW5iNm1qMmFh" class="fab fa-instagram"></a>
         </div>
         <h3>Raziq Thazreen</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/izz.qayyim?mibextid=LQQJ4d" class="fab fa-facebook-f"></a>
            
            <a href="https://www.instagram.com/izzqayyim?igsh=MXV1bHZ0YzRqcGhicQ==" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/izz-qayyim-3080011a4?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="fab fa-linkedin"></a>
         </div>
         <h3>Izz Qayyim</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/share/i8rDhMppcHuk2M4N/?mibextid=qi2Omg" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/emmansyamiel?igsh=d3dwYzlqbmVmdmtq" class="fab fa-instagram"></a>
           
         </div>
         <h3>Eyman</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpeg" alt="">
         <div class="share">
            
            <a href="https://www.instagram.com/youcheng0770?igsh=MXc2M2NuZW9nZ25maw==" class="fab fa-instagram"></a>
            
         </div>
         <h3>Law You Cheng</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpeg"alt="">
         <div class="share">
			 <a href="https://www.facebook.com/share/uuAgtaN7EkzBkWqC/?mibextid=qi2Omg" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/sha786_66?igsh=NW1wbW9jbHBhY3gx" class="fab fa-instagram"></a>
            
         </div>
         <h3>Shaffiq</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
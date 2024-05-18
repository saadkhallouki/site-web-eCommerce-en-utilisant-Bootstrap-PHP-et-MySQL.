<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/contact-us.png" id="cus" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Dear Valued Customer,<br>
         Thank you for visiting our cosmetics website and showing interest in our products. We appreciate your time and are here to assist you in any way we can. In this message, we'd like to introduce ourselves, explain why you should choose us, and provide you with contact information for any inquiries or assistance you may need.<br>
         If you have any questions, require assistance, or would like to provide feedback, please don't hesitate to get in touch with us. We're here to help!
         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-11.png" alt="">
         <p>As an avid believer in the power of natural remedies and aromatherapy, I was eager to explore the world of Essential Oils by PURE AROMA, and I must say, I was absolutely blown away by the exceptional quality and transformative benefits these oils offer.
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user x</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-22.png" alt="">
         <p>After trying all the essential oils that I received, I am thrilled to say that they all smell amazing. You only need to put couple drops and it can last for hours. There is no doubt that this would make an amazing gift for someone who loves good smells.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user x1</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-33.png" alt="">
         <p>I was disappointed that the carrier did not leave the product and after a long delay. It didn't arrive and I had to ask for a refund of my money after more than 1 month of waiting. I had to reorder the product again I had to reorder the product again, the carrier's fault.</p>
         <div class="stars">
         <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user x2</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-44.png" alt="">
         <p>After trying all the essential oils that I received, I am thrilled to say that they all smell amazing. You only need to put couple drops and it can last for hours. There is no doubt that this would make an amazing gift for someone who loves good smells.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user x3</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-55.png" alt="">
         <p>As an avid believer in the power of natural remedies and aromatherapy, I was eager to explore the world of Essential Oils by PURE AROMA, and I must say, I was absolutely blown away by the exceptional quality and transformative benefits these oils offer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user x4</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-66.png" alt="">
         <p>I was disappointed that the carrier did not leave the product and after a long delay. It didn't arrive and I had to ask for a refund of my money after more than 1 month of waiting. I had to reorder the product again I had to reorder the product again, the carrier's fault.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>user x5</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
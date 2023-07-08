<?php
include "components/variables.php";
include "components/connect.php";

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
?>

<?php define("TITLE","About Us | $companyName");?>

<!-- head section  -->
<?php include "components/user_head.php" ?>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php' ?>
    <!-- header section ends -->

<!-- about section starts  -->

<div class="heading">
   <h1>A Propos De Nous!</h1>
   <p>Explorez et parcourez le monde qui vous entoure</p>
</div>
<div class="nous">
  <h2>Activigo en quelques mots</h2>
  <p class="about-txt" >Activigo est une application web conçue pour simplifier la réservation, l'organisation et la planification de vos séjours en vacances. Notre équipe de cinq membres s'est réunie en janvier 2023 avec une vision commune : créer un outil pratique et personnalisé pour aider les utilisateurs à trouver les meilleures activités et destinations en fonction de leurs préférences et de leurs contraintes.</p>
</div>
<div class="about-container">
   <section class="about">
      <div class="about-image">
         <img src="img\pexels-photo-2325446.jpeg">
      </div>
      <div class="about-content">
         <!-- service section starts  -->
      <div class="accordion">
      <!-- Item 1 -->
      <h2>Faites des découvertes aux quatre coins du monde ou dans votre quartier</h2>
      <div class="accordion-item">
        <input type="checkbox" id="item-1" />
        <label for="item-1" class="accordion-header">
          <span>Découvrez des lieux susceptibles de vous plaire</span>
          <span class="arrow">
            <i class="fa-solid fa-caret-right"></i>
          </span>
        </label>
        <div class="accordion-content">
          <p>
          Découvrez des lieux qui reflètent vos intérêts à travers un algorithme qui analyse les informations que vous nous fournissez volontairement. Partagez des détails tels que votre lieu de vie, vos moyens financiers, vos centres d'intérêts et bien plus encore. Ces informations nous aident à comprendre vos préférences et à vous proposer des recommandations précises et personnalisées.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item">
        <input type="checkbox" id="item-2" />
        <label for="item-2" class="accordion-header">
          <span>Notre Objectif </span>
          <span class="arrow">
            <i class="fa-solid fa-caret-right"></i>
          </span>
        </label>
        <div class="accordion-content">
          <p>
          offrir une expérience de voyage unique, en vous permettant de découvrir de nouvelles destinations, de profiter d'activités passionnantes et de créer des souvenirs inoubliables avec vos proches. Nous sommes fiers de mettre notre expertise à votre service afin de rendre votre voyage aussi enrichissant et plaisant que possible.
          </p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item">
        <input type="checkbox" id="item-3" />
        <label for="item-3" class="accordion-header">
          <span>Flexibilité </span>
          <span class="arrow">
            <i class="fa-solid fa-caret-right"></i>
          </span>
        </label>
        <div class="accordion-content">
          <p>
          Activigo offre la possibilité de créer un emploi du temps personnalisé en prenant en compte les activités favorites des utilisateurs. Vous pouvez organiser votre journée en fonction de vos préférences et de vos contraintes,
           tout en vous assurant de ne pas manquer les expériences incontournables de votre destination.
          </p>
        </div>
      </div>
    </div>
    
      </div>
      
   </section>
   <p style=" font-size: 30px;padding-top: 100px;text-align: center;justify-content: center;"  >Rejoignez-nous sur Activigo et laissez-nous vous aider à planifier le voyage de vos rêves, en prenant en compte vos préférences, en vous offrant une communauté d'échange et en vous permettant de profiter d'un emploi du temps flexible. Nous sommes impatients de vous accompagner dans vos futures aventures !</p>
    <!-- service section ends  -->
      </div>
    
   </section>
   <!-- our team section start  -->
<section class="team">
      <div class="row">
        <h1>Our Team</h1>
      </div>
      <div class="row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img\matteo.jfif" />
            </div>
            <h3>Luna Turner</h3>
            <p>Founder</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img\matteo.jfif" />
            </div>
            <h3>Bryant Hall</h3>
            <p>Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img\matteo.jfif" />
            </div>
            <h3>Bryant Hall</h3>
            <p>Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 4-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="img\matteo.jfif" />
            </div>
            <h3>Hope Watkins</h3>
            <p>Designer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
   </section>
<!-- our team section end -->
   

<!-- about section ends -->



  </body>




<!-- review section starts  -->

<style>
   .reviews {
      text-align: center;
      padding: 20px;
   }
   
   .heading {
      font-size: 24px;
      margin-bottom: 20px;
   }
   
   .box-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
   }
   
   .boxx {
      width: 300px;
      padding: 20px;
      margin: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: left;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
   }
   
   .user {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
   }
   
   .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
   }
   
   .stars {
      color: #ffc107;
   }
   
   .stars i {
      margin-right: 3px;
   }
   
   .box p {
      font-size: 14px;
      color: #666;
   }
   
</style>

<section class="reviews">

   <h1 class="heading">Avis des clients</h1>

   <div class="box-container">

      <div class="boxx">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Émilie Dupont</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>J'ai eu une expérience incroyable avec ce service. Le personnel était amical et professionnel, et la qualité de leur travail a dépassé mes attentes. Je le recommande vivement !</p>
      </div>

      <div class="boxx">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>David Martin</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Je suis extrêmement satisfait du service que j'ai reçu. L'équipe était réactive, efficace et a livré d'excellents résultats. Je les utiliserai certainement à nouveau !</p>
      </div>

      <div class="boxx">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>Sarah Dupuis</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Ce service a vraiment fait preuve de professionnalisme. Ils ont répondu rapidement à toutes mes questions et ont fourni un travail de qualité exceptionnelle. Je les recommande vivement !</p>
      </div>

      <div class="boxx">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>Julie Lefebvre</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>J'ai eu une expérience fantastique avec ce service. L'équipe était compétente, amicale et a terminé le travail à temps. Je suis extrêmement satisfait du résultat. Merci !</p>
      </div>

      <div class="boxx">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>Thomas Lambert</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Le service fourni était exceptionnel. L'équipe était professionnelle, réactive et a livré des résultats de haute qualité. Je recommande vivement leurs services !</p>
      </div>

      <div class="boxx">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>Sophie Bertrand</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Un service impressionnant ! L'équipe était compétente, amicale et a terminé le travail à temps. Je suis extrêmement satisfait du résultat. Merci !</p>
      </div>

   </div>

</section>


<!-- review section ends -->

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
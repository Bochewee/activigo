<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
        
         <?php
         foreach($footerBox1 as $footerItem){
            echo "<a href=\" {$footerItem['slug']}\"><span>{$footerItem['title']}</span></a>";
         }
         ?>
         
      </div>

      <div class="box">
      <?php
         foreach($footerBox2 as $footerItem){
            echo "<a href=\"{$footerItem['slug']}\"><i class=\"{$footerItem['icon']}\"></i><span>{$footerItem['title']}</span></a>";
         }
         ?>
      </div>

      <div class="box">
         <?php 
         foreach ($footerSocials as $footerItem){
            echo "<a href=\"{$footerItem['slug']}\"><span>{$footerItem['title']}</span><i class=\"{$footerItem['icon']}\"></i></a>";
        }
         ?>
      </div>

   </section>

   <div class="credit">&copy; copyright @ <?php echo $companyName; ?> | all rights reserved!</div>


</footer>

<!-- footer section ends -->
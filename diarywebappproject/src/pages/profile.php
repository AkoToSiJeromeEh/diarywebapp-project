<?php 
    include('../php/checkUser.php');
    include('../static/header.php')
    ?>
    <section
      class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-5 "
    >
      <div>
      <?php
        include('../static/navbar.php');
       ?>
      </div>
      <div class="  p-5 flex flex-col items-start md:items-center justify-center md:flex-row gap-5  ">
        <div class="flex flex-col items-center   gap-6  bg-accent-white rounded-[20px] profile-cont   w-full lg:w-[30rem]  static lg:relative lg:-right-10 ">
          <div class="mt-5 text-center profile-img " >
            <img class="w-[150px] h-[150px] rounded-full" src="../assets/images/Couple-image.jpg" alt="" />
          <p class="font-semibold text-lg"> <?php
              include('../php/renderUser.php')
              
           ?></p>
          </div>

           <div class="p-5 rounded-se-xl border-[#6e6da7] bg-white border-8 mb-5 w-11/12">
            <p class=" text-[0.8rem] w-11/12 md:w-80 font-semibold text-center  tracking-wide  m-auto ">
              We are a dynamic duo, combining the skills of a full-stack web
              developer and a creative graphic designer. With expertise in both
              areas, we deliver stunning websites that are not only visually
              appealing but also functionally robust. Our seamless collaboration
              ensures a harmonious blend of aesthetics and functionality,
              resulting in exceptional digital experiences.
            </p>
           </div>
        </div>
        <div class="profile-other-interest p-5 rounded-[20px] flex flex-col gap-8 bg-accent-white items-center  md:items-start w-full lg:w-[40rem]  lg:h-[40rem]  md:h-full md:w-8/12 overflow-visible ">
          <div class="text-4xl text-primary-darkviolet lg:m-5 ">
            <h1>Other Interest</h1>
          </div>
         <div class="flex flex-col gap-8 justify-evenly md:flex-row  w-[full] flex-wrap m-3 other-interest">
          <div class="bg-secondary-lightviolet rounded-md p-3 relative ">
            <p class="font-bold">Watching Movie</p>
            <span class="absolute -top-5 p-1 bg-black-hsl rounded-[30px] text-white w-16 text-center">Both</span>
        </div>
        
        <div class="bg-primary-darkviolet rounded-md p-3 relative text-white">
          <p class="font-bold">Reading Manga</p>
          <span class="absolute -top-5 p-1 bg-black-hsl rounded-[30px] text-white w-16 text-center">Both</span>
      </div>

      <div class="bg-primary-darkviolet rounded-md p-3 relative text-white">
        <p class="font-bold">Playing Games</p>
        <span class="absolute -top-5 p-1 bg-black-hsl rounded-[30px] text-white w-16 text-center">Both</span>
    </div>
      
         </div>
          
        </div>
      </div>
    </section>
    <script src="../js/scriptNav.js"></script>
  </body>
</html>

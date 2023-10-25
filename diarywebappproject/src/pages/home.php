<?php
 include('../php/checkUser.php');
 include('../static/header.php')
?>
    <section
      class="home-section bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen relative flex flex-col gap-5 scroll-m-0 overflow-hidden z-0 "
    >
      <div>
       <?php
        include('../static/navbar.php');
       ?> 
      </div>
      <div class="flex flex-col lg:flex-row  items-center justify-center relative z-0 ">
			<div class="bg-[#ffffff3c] p-6 m-10 border-[#6e6da7] border-8 flex flex-col  items-center justify-center text-center gap-5 rounded-se-xl h-[19rem] text-black w-[90%] md:w-fit  ">
        <img width="50px" src="../icons/pin.png" class=" absolute top-4 m-auto " alt="">
				<h1 class="text-[5vw] sm:text-3xl h1-home md:text-4xl text-primary-darkviolet ">
					Welcome to journaling!
				</h1>
				<p class="text-[4vw] sm:text-[1rem] font-normal w-full md:w-[25rem]  md:text-[1.1rem] ">
					Welcome to our journal TwoHeartsMemoir, your digital sanctuary for creativity, reflection, and personal growth. Start writing your journey today!
				</p>
		</div>
      <div class="hidden lg:block  ">
         <img class=" w-[20rem]  " src="../assets/images/book 1.png" alt="">
         <div class="flex flex-col items-center justify-center w-fit text-center absolute bottom-5 p-3 ms-[5.5rem]   " >
          <h1 class="text-primary-darkviolet">
            <!-- Check if its exists -->
           <?php
              include('../php/renderUser.php')
              
           ?>
            Journal
          </h1>
           <p class="w-40 font-normal">
            “Aim for the moon. If you miss, you may hit a star”
           </p>
         </div>
      </div>
				<div class="flex flex-col sm:flex-row gap-2 sm:gap-0 -bottom-[9rem] absolute sm:-bottom-[6rem] text-center lg:hidden    ">
          <div class="bg-[#ffffff3c] text-white p-6  border-[#6e6da7] border-8 rounded-se-lg sm:m-10 sm:w-[9.37rem]  backdrop-blur-md flex items-center justify-center w-[90%] mx-5  ">
            <img src="../assets/icons/tape.png" class="w-10 absolute -top-6 m-auto" alt="">
            <p class="font-bold text-md text-[0.8rem]  ">
              “Aim for the moon. If you miss, you may hit a star”
            </p>
          </div>
          <div class="bg-[#ffffff3c]  p-6  border-[#6e6daa] border-8 rounded-ss-lg sm:m-10 sm:w-[9.37rem] flex items-center backdrop-blur-md lg:hidden justify-center w-[90%] mx-5 ">
            <img src="../assets/icons/tape.png" class="w-10 absolute -top-6 m-auto" alt="">
            <p class="journal-p text-primary-darkviolet m-auto text-[1.2rem]  ">
              Ysje Journal
            </p>
          </div>
        </div>
		</div>
    </section>
    <script src="../js/scriptNav.js"></script>
  </body>
</html>

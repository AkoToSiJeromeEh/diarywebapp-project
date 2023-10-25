<?php 
include('../static/header.php')
?>
	<section class="bg-login-pattern min-h-screen bg-cover bg-center bg-no-repeat  text-white grid grid-cols-1 lg:bg-none lg-fixed lg:bg-black overflow-hidden lg:grid-cols-2" >
       <div class="m-0 flex flex-col gap-5 h-[30rem] justify-around md:justify-start md:gap-8 lg:gap-5 lg:justify-around p-8 md:h-full md:m-10 lg:m-5  ">
        <div>
            <p class="font-light mb-2 text-[4vw]  md:text-2xl lg:text-[1.4rem]">
                Welcome <span class="font-bold text-secondary-lightviolet text-[4vw] md:text-2xl lg:text-[1.4rem]">Two Hearts Memoir</span>
            </p>
            <h1 class="text-[4vw] md:text-2xl tracking-wide lg:text-[1.4rem]">
                Register Now
            </h1>
        </div>
        <form action="../php/signup-insert.php" class="flex flex-col gap-6 " method="POST" id="form-login">
            <div class="flex flex-col gap-3">
                <label for="">Username</label>
                <input id="input-username" name="input-username" class="rounded-sm h-[2.5rem] text-black" type="text">
                <p id="emailErr"></p>
            </div>
			<div class="flex flex-col gap-3">
                <label for="">Email</label>
                <input id="email-username" name="input-email" class="rounded-sm h-[2.5rem] text-black" type="email">
                <p id="email"></p>
            </div>
            <div class="flex flex-col gap-3">
                <label for="">Password</label>
                <input id="input-password" class="rounded-sm h-[2.5rem] text-black" type="password" name="input-password">
                <p id="passErr"></p>
            </div>
            <div class="text-center text-red-600">
			</div>
            <button type="submit" class="bg-black-hsl rounded-sm h-[2.5rem]  md:bg-primary-darkviolet ">
                Register 
            </button>
        </form>
        <div class="self-center">
            <p class=" text-[3vw] sm:text-[1.1rem] ">
                Have an Account ? 
                <span class=" font-bold text-secondary-lightviolet">
                   <a href="../pages/login.php">Login Now</a>
                </span>
            </p>
        </div>
       </div>
	   <div class=" w-[50vw] hidden lg:block relative -right-92">
		<img class="h-full  scale-[1.1] origin-left" src="../../public/login-bg.jpg" alt="">
		</div>
       <footer class="text-center  md:absolute md:left-2  md:bottom-2 ">
        <p class="text-[0.7rem] md:text-[0.7rem]">@ 2023 Darling All Rights Reserved.</p>
       </footer>
    </section>
  </body>
</html>

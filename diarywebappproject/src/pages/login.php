    <?php 
    include('../static/header.php')
    ?>
	<section class="bg-login-pattern min-h-screen bg-cover bg-center bg-no-repeat  text-white grid grid-cols-1 lg:bg-none lg-fixed lg:bg-black overflow-hidden lg:grid-cols-2" >
        <div class=" w-[50vw] hidden lg:block relative">
            <img class="h-full rotate-[16.516deg] scale-[1.1] origin-top-right" src="../../public/login-bg.jpg" alt="">
        </div>
       <div class="m-0 flex flex-col gap-5 h-[30rem] justify-around md:justify-start md:gap-8 lg:gap-5 lg:justify-around p-8 md:h-full md:m-10 lg:m-5  ">
        <div>
            <p class="font-light mb-2 text-[4vw]  md:text-2xl lg:text-[1.4rem]">
                Welcome <span class="font-bold text-secondary-lightviolet text-[4vw] md:text-2xl lg:text-[1.4rem]">Two Hearts Memoir</span>
            </p>
            <h1 class="text-[4vw] md:text-2xl tracking-wide lg:text-[1.4rem]">
                Login to your account
            </h1>
        </div>
        <form action="../php/login-excute.php" class="flex flex-col gap-6 " method="POST" id="form-login">
            <div class="flex flex-col gap-3">
                <label for="">Name</label>
                <input id="input-username" class="rounded-sm h-[2.5rem] text-black" type="text" name="Username">
                <p id="emailErr"></p>
            </div>
            <div class="flex flex-col gap-3">
                <label for="">Password</label>
                <input id="input-password" class="rounded-sm h-[2.5rem] text-black" type="password" name="Password">
                <p id="passErr"></p>
            </div>
            <div class="text-center text-red-600">
            <?php
                if(isset($_GET['error'])) { ?>

                     <p class=" font-semibold" style="color:red"><?php echo $_GET['error']; ?></p>
                     <?php unset($_SESSION['errorMessage']);
                     } ?>
            </div>
            <button type="submit" class="bg-black-hsl rounded-sm h-[2.5rem]  md:bg-primary-darkviolet ">
                Login
            </button>
        </form>
        <div class="self-center">
            <p class=" text-[3vw] sm:text-[1.1rem] ">
                Don't Have an Account ? 
                <span class=" font-bold text-secondary-lightviolet">
                    <a href="../pages/signup.php">Register Now</a>
                </span>
            </p>
        </div>
       </div>
       <footer class="text-center  md:absolute md:left-2  md:bottom-2 ">
        <p class="text-[0.7rem] md:text-[0.7rem]">@ 2023 Darling All Rights Reserved.</p>
       </footer>
    </section>
    <script src="../js/scriptLogin.js"></script>
</body>
</html>
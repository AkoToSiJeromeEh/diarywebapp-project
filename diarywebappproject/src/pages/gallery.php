<?php

include('../php/checkUser.php');
include('../static/header.php')

  ?>
<section
  class="home-section bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen relative flex flex-col gap-5 scroll-m-0 overflow-hidden">
  <div>
    <?php
    include('../static/navbar.php');
    ?>
  </div>

  <div class="grid grid-flow-dense grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-8 m-5 gap-4 ">
    <div
      class="bg-[#ffffff3c] col-span-1 lg:col-span-2 h-[65vh] rounded-md p-5 text-white overflow-y-auto flex flex-col gap-5 order-last md:order-first">
      <div class="flex flex-col items-start md:flex-row md:items-center gap-2 text-black">
        <h1 class="font-extrabold text-lg  md:text-2xl text-primary-darkviolet">
          Good morning
        </h1>
        <p class="font-extrabold">Ysje</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-3 gap-y-3">
        <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
          <img class="w-10 rounded-sm" src="../assets/images/Couple-image.jpg" alt="">
          <h1 class="text-lg">Aniversary</h1>
        </div>
        <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
          <img class="w-10 rounded-sm" src="../assets/images/Couple-image.jpg" alt="">
          <h1 class="text-lg">Achivement</h1>
        </div>
        <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
          <img class="w-10 rounded-sm" src="../assets/images/Couple-image.jpg" alt="">
          <h1 class="text-lg">Bonding</h1>
        </div>
        <div class="bg-[#4514583c] p-0 flex flex-row gap-3 items-center rounded-sm">
          <img class="w-10 rounded-sm" src="../assets/images/Couple-image.jpg" alt="">
          <h1 class="text-lg">Family</h1>
        </div>
      </div>
      <div class="flex flex-col gap-3">
        <div>
          <h1 class="text-primary-darkviolet text-[1rem] md:text-lg">Your Featured Entry</h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 grid-flow-dense">
          <?php
          //db connection first
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "twoheartsmemoir";

          //create connection to db and localhost
          $conn = new mysqli($servername, $username, $password, $dbname);

          //check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          if(isset($_SESSION['UserID'])){
            $UserID = $_SESSION['UserID'];
                 
            
          //using SELECT to fetch the data
          $sql = "SELECT title, category, entry_date, entry_content, text_color, bg_color FROM diary_entry WHERE EntryID='$UserID' ORDER BY entry_date DESC LIMIT 4";


          //result
          $result = $conn->query($sql);


          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              //create variables for the data
              $titleData = $row["title"];
              $categoryData = $row["category"];
              $dateData = $row["entry_date"];
              $contentData = $row["entry_content"];
              $textcolorData = $row["text_color"];
              $bgcolorData = $row["bg_color"];
              ?>

              <?php if ($categoryData === 'Gallery') { ?>
                <div class="bg-white rounded-md p-3 text-black">
                  <div class="flex flex-col md:flex-row gap-3 items-center w-full mb-3">
                    <h1 class="text-lg">
                      <?= $titleData ?>
                    </h1>
                    <p class="font-semibold ms-0 md:ms-auto">
                      <?= $categoryData ?>
                    </p>
                  </div>
                  <p>
                    <?= $contentData ?>
                  </p>
                </div>
              <?php }
            }
          } else {
            echo "No entries found.";
          }
          $conn->close();
          }

          ?>
        </div>
        <div>
          <h1 class="text-[1rem] md:text-lg text-primary-darkviolet">Videos Describe US</h1>
          <div class="w-full">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/aG9WlyMZx_A?si=vFZH-FCZD92jyLU5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-md"></iframe>
          </div>
        </div>
        <div>
          <h1 class="text-[1rem] md:text-lg text-primary-darkviolet">Quotes</h1>
          <div class="grid grid-cols-1 gap-6 w-full md:grid-cols-2 grid-flow-dense h-full lg:grid-cols-3">
            <div>
                <img src="../assets/images/q1.jpg" alt="" class="rounded-sm h-full">
            </div>
            <div>
                <img src="../assets/images/q2.jpg" alt="" class="rounded-sm h-full">
            </div>
            <div>
                <img src="../assets/images/q3.jpg" alt="" class="rounded-sm h-full">
            </div>
            <div>
                <img src="../assets/images/q4.jpg" alt="" class="rounded-sm h-full">
            </div>
            <div>
                <img src="../assets/images/q5.jpg" alt="" class="rounded-sm h-full">
            </div>
            <div>
                <img src="../assets/images/q6.jpg" alt="" class="rounded-sm h-full">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="bg-[#ffffff3c] border-4 p-2 overflow-y-scroll flex flex-col gap-4 h-[65vh] rounded-md order-first md:-order-last">
      <div class="p-5 flex flex-col gap-5 rounded-lg text-white  " id="music-list-container">
        <div class="grid grid-cols-1 place-content-center place-items-center gap-8 text-center">
          <div>
            <h1 id="musicName" class="text-2xl font-bold">
              Sparks
            </h1>
            <h2 id="artistName" class="text-md">
              Cold Play
            </h2>
          </div>
          <img id="music-cover" class="w-52 rounded-xl img-album "
            src="../images/artworks-000016783437-9xp37m-t500x500.jpg" alt="">
          <p id="musicDescription" class="text-center w-full md:w-5/6 text-sm md:text-[1rem]">
            Our Top Three Favorite Songs
          </p>
        </div>
      </div>
      <div class="flex flex-col bg-black text-white p-3 rounded-md gap-4">
        <h1 class="text-secondary-lightviolet text-lg">About the Song</h1>
        <p class="leading-6 text-sm md:text-[1rem]">
        We love these songs because they each tap into different aspects of human experience. "Sparks" resonates with its emotional depth and nostalgia. "Here with Me" speaks to the warmth of love and companionship. "Paint the Town Red" ignites our spirits with its infectious energy, providing a soundtrack for joy and celebration. These songs connect with us on an emotional level, making them beloved.
      </div>
      <div class="flex flex-col bg-black text-white p-3 rounded-md gap-4 mb-2">
        <h1 class="text-secondary-lightviolet text-lg">Next in queue</h1>
        <div class="flex flex-row gap-2">
          <img id="next-queue-img" class=" w-10 small:w-20 rounded-md "
            src="../images/Doja_Cat_-_Paint_the_Town_Red.png" alt="">
          <div class="flex flex-col gap-2">
            <p id="next-queue-p" class=" text-sm small:text-[1rem] font-bold">Paint the town red</p>
            <small id="next-queue-artist" class="font-normal text-sm small:text-[0.8rem]">Doja Cat</small>
          </div>
        </div>
      </div>
    </div>

    <div class="fixed bg-black-hsl small:bg-[#ffffff3c] bottom-0 p-4 left-0 right-0  backdrop-blur-0 small:backdrop-blur-md grid grid-cols-1 
      small:grid-cols-2 md:gap-y-0 md:grid-cols-3 small:place-items-center small:place-content-center  ">
      <div class="flex flex-col  text-white rounded-md gap-4">
        <div class="flex flex-row gap-2 w-full small:w-fit mb-5 small:mb-0  ">
          <img id="playing-img" class="w-10 rounded-md hidden small:block "
            src="../images/artworks-000016783437-9xp37m-t500x500.jpg" alt="">
          <div class="flex flex-row gap-4 small:gap-0 small:flex-col w-full small:w-fit  ">
            <p id="playing-music" class="font-bold text-sm ">Sparks</p>
            <small id="playing-artist" class="font-normal ms-auto small:ms-0">Cold Play</small>
          </div>
        </div>
      </div>
      <div class="flex flex-row gap-8 self-center  m-auto small:m-0  ">
        <button id="prev-button">
          <i class="fa-solid fa-backward-step fa-lg" style="color: #ffffff;"></i>
        </button>
        <button id="play-button">
          <i class="fa-solid fa-pause fa-lg" style="color: #ffffff;"></i>
        </button>
        <button id="next-button">
          <i class="fa-solid fa-forward-step fa-lg" style="color: #ffffff;"></i>
        </button>

      </div>
      <div class="col-span-2 md:col-span-1 self-center hidden md:block">
        <p class="text-[0.7rem] md:text-[0.7rem] text-white font-bold ">@ 2023 Darling All Rights Reserved.</p>
      </div>
    </div>
  </div>
</section>
<script src="../js/scriptNav.js"></script>
<script src="../js/scriptGallery.js"></script>
</body>

</html>
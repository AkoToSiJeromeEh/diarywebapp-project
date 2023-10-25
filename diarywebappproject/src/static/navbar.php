<nav class="bg-[#ffffff] p-6 flex flex-row items-center justify-between h-full ">
  <div class="nav-toggle z-[60]">
    <button class="p-1 rounded-full" id="nav-toggler">
      <img width="40px" src="../assets/icons/navbar/ico-menu.png" alt="" />
    </button>
  </div>
  <div id="nav-links" class="nav-links text-primary-darkviolet absolute bg-accent-white left-0 top-0 right-0 md:right-auto bottom-0 p-5 z-50 rounded-e-md hidden">
    <ul class="text-[1.3rem] flex flex-col gap-3 m-12 mt-16">
      <li class="nav-item">
        <img class="inline" width="50px" src="../assets/icons/navlinks/dashboard.png" alt="" /><a href="../pages/dashboard.php" class="ms-2">Dashboard</a>
      </li>
      <li class="nav-item">
        <img class="inline" width="40px" src="../assets/icons/navlinks/newentry3.png" alt="" />
        <a href="../pages/newentry.php" class="ms-2">New Entry</a>
      </li>
      <li class="nav-item">
        <img class="inline" width="40px" src="../assets/icons/navlinks/gallery.png" alt="" />
        <a href="../pages/gallery.php" class="ms-2">Gallery</a>
      </li>
      <li class="nav-item">
        <img class="inline" width="40px" src="../assets/icons/navlinks/allentry2.png" alt="" />
        <a href="../pages/allentry.php" class="ms-2">All Entries</a>
      </li>
      <li class="nav-item">
        <img class="inline" width="40px" src="../assets/icons/navlinks/profile.png" alt="" />
        <a href="../pages/profile.php" class="ms-2">Profile</a>
      </li>
    </ul>
  </div>
  <div class="nav-title">
    <h1 class="text-primary-darkviolet text-[1rem] md:text-2xl">
      <a href="../pages/home.php">TwoHeartsMemoir</a>
    </h1>
  </div>
  <div class="nav-profile flex flex-row gap-3 items-center">
    <?php
    if (isset($_SESSION['Username']) && !empty($_SESSION['Username'])) {
      echo "<h1 class='font-semibold text-[0.9rem]'>" . $_SESSION['Username'] . "</h1>";
      echo '<button class="bg-primary-darkviolet p-1 rounded-md text-sm text-white">
          <a href="../php/logout.php">Logout</a>
          </button>';
    } else {
      echo '<button class="bg-primary-darkviolet p-1 rounded-md text-sm text-white">
          <a href="../pages/login.php">Login</a>
          </button>';
    }
    ?>


  </div>
</nav>
<?php

include('../php/checkUser.php');
include('../static/header.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twoheartsmemoir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_SESSION['UserID'])){
    $UserID = $_SESSION['UserID'];
    // Initialize variables
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';


        // Fetch entries based on the category filter and search term
        $query = "SELECT EntryID, diaryID, title, category, entry_date, entry_content, text_color, bg_color FROM diary_entry WHERE EntryID='$UserID'";

   // Check if a category filter is selected and/or a search term is provided
if ($categoryFilter || $searchTerm) {
    $query .= " AND";
}

// Add the category filter condition if it's provided
if ($categoryFilter) {
    $query .= " category = '$categoryFilter'";
}

// Add the search term condition if it's provided
if ($searchTerm) {
    if ($categoryFilter) {
        $query .= " AND"; // Add AND if both category and search term are present
    }
    $query .= " (title LIKE '%$searchTerm%' OR entry_content LIKE '%$searchTerm%')";
}

$query .= " ORDER BY entry_date DESC";
    $result = $conn->query($query);

}

?>

<div id="add-bg-cont"
    class="text-black p-5 fixed top-[5.5rem] left-0 flex-col gap-4 justify-around items-start side-nav right-0">
    <div class="hidden" id="hidden-content">
        <div class="flex flex-col gap-14 items-start">
            <div>
                <form method="GET" class="flex items-center gap-2">
                    <input class="border-primary-darkviolet rounded-md border-2 p-2" type="text" name="search"
                        placeholder="Search" />
                    <button class="fa-solid fa-magnifying-glass text-black p-3 relative -left-[2.8rem]"></button>
                </form>
            </div>
            <h1 class="ms-2 leading-tight tracking-widest">List All</h1>
            <h1 class="ms-2 leading-tight tracking-widest">Info</h1>
        </div>
    </div>
    <div class="btn-toggle" id="show-toggle">
        <button class="fa-solid fa-chevron-right fa-md"></button>
    </div>
</div>

<section class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-5">
    <div>
        <?php include('../static/navbar.php'); ?>
    </div>
    <div class="flex flex-col gap-5">
        <div class="flex flex-row flex-wrap gap-4 p-5 items-center justify-center small:justify-start md:items-start">
            <a href="?category=Relationship"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Relationship</a>
            <a href="?category=Bonding"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Bonding</a>
            <a href="?category=With Family"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">With Family</a>
            <a href="?category=Anniversary"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Anniversary</a>
            <a href="?category=Achievement"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Achievement</a>
            <a href="?category=Featured"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Featured</a>
            <a href="?category=Gallery"
                class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Gallery</a>
            <a href="?category=Other" class="bg-secondary-lightviolet p-2 rounded-md border-slate-50 border-2">Other</a>
            <a href="?category=" class="p-2 rounded-md border-slate-50 border-2">Clear Filter</a>
        </div>
        <div>
            <h1 class="mx-5 text-2xl border-b-2 border-cyan-50 p-1 tracking-wider text-primary-darkviolet">
                <i class="fa-solid fa-border-all"></i> All Entries
            </h1>
        </div>
        <div class="grid grid-cols-1 gap-4 mb-5 md:grid-cols-3 p-5 h-[60vh] overflow-y-auto">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $diaryID = $row['diaryID'];
                    $titleData = $row["title"];
                    $categoryData = $row["category"];
                    $dateData = $row["entry_date"];
                    $contentData = $row["entry_content"];
                    $textcolorData = $row["text_color"];
                    $bgcolorData = $row["bg_color"];
                    ?>
                    <div class="p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl h-full"
                        style="background-color: <?php echo $bgcolorData ?>;">
                        <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
                            <h1 class="text-4xl lg:text-[2rem]" style="color: <?php echo $textcolorData ?>;">
                                <?php echo $titleData; ?>
                            </h1>
                            <button class="font-normal rounded-2xl px-3 py-1 text-sm"
                                style="color: <?php echo $bgcolorData ?>; background-color: <?php echo $textcolorData ?>;">
                                <?php echo $categoryData; ?>
                            </button>
                        </div>
                        <div class="flex flex-row flex-wrap gap-4 w-full justify-end ">
                            <div>
                            <a href='../pages/editentry.php?id=<?php echo $diaryID; ?>;' ><button class="border-b-2 border-primary-darkviolet p-2 rounded-md text-black bg-white"id="edit-trigger">Edit</button></a>
                            
                            </div>
                            <div>
                                <a href='../php/entry-delete.php?id=<?php echo $diaryID; ?>;' > <button class="border-b-2 border-primary-darkviolet p-2 rounded-md text-black bg-white">Delete</button></a>
                            </div>
                        </div>
                        <p style="color: <?php echo $textcolorData ?>; background-color: <?php echo $bgcolorData ?>;">
                            <?php echo $contentData; ?>
                        </p>
                    </div>
                    <?php
                }
            } else {
                echo "No entries found.";
            }
            $conn->close();
            ?>
        </div>
    </div>
    <!-- <div class="hidden" id="modal-cont">
        <div class="modal absolute left-0 right-0 flex items-center justify-center top-0 overflow-hidden   ">
            <div class=" p-5 flex flex-col gap-8 bg-accent-white items-start w-full h-full  ">
                <div class="flex flex-row justify-between flex-wrap w-full">
                    <div>
                        <h1 class="text-lg ">Update Entry</h1>
                    </div>
                    <div>
                        <button class="fa fa-xmark fa-lg  text-black" id="close-trigger">

                        </button>
                    </div>
                </div>
                <div class="flex flex-row gap-2 justify-between w-full">
                    <input id="title-input" type="text" placeholder="Enter Title" />
                    <button id="btn-submit" type="submit" class="fa-solid fa-plus"></button>
                </div>
                <div class="flex flex-col small:flex-row gap-2 justify-between w-full">
                    <input id="category-input" type="text" placeholder="Enter Category" />
                    <input id="date-input" type="text" placeholder="Enter Date" />
                </div>
                <h1 class="text-lg  text-primary-darkviolet font-bold">Choose Output Colors</h1>
                <div class="flex flex-row gap-4 w-full items-start flex-wrap color-picker">
                    <div class="flex flex-row flex-wrap gap-2 items-center">

                        <h1 class="text-lg  text-primary-darkviolet"> Text Color</h1>
                        <input id="text-picker" type="color"
                            class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet ">
                    </div>
                    <div class="flex flex-row flex-wrap gap-2 items-center">

                        <h1 class="text-lg font- text-primary-darkviolet"> Bg Color</h1>
                        <input id="bg-picker" type="color"
                            class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet ">
                    </div>
                </div>
                <div class="grid grid-cols-1 w-full lg:w-[90%] h-[32rem] relative">
                    <div>
                        <textarea class="h-full w-full" id="textarea-input" class="w-full"
                            placeholder="Start writing..."></textarea>
                    </div>
                    <div class="absolute   right-[20px] bottom-0 m-5 p-2  rounded-full text-primary-darkviolet border-2 border-secondary-lightviolet bg-slate-50 font-extrabold "
                        id="count-container">
                        <p class="text-[1rem] font-extrabold">
                            <span id="start-count">0</span> / <span id="max-count">0</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>
<script src="../js/scriptDashboard.js"></script>
<script src="../js/scriptNav.js"></script>
<script src="../js/scriptAllentry.js"></script>
</body>

</html>
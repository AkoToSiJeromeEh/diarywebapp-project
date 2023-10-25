<?php
session_start();
include('../static/header.php')
    ?>
<section class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-32 md:gap-24">
    <div>
        <?php
        include('../static/navbar.php');
        ?>
    </div>
    <div class="grid grid-cols-1 gap-6 mb-5 lg:grid-cols-3 gap-x-5 gap-y-3 grid-flow-dense w-fit m-2 md:m-10">
        <!-- Reusable component for each item -->
        <!-- php code here -->
        <?php 
            function getRecentEntry($category){
                //db connection first
                    $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "twoheartsmemoir";

                // create connection to db and localhost
                $conn = new mysqli($servername, $username, $password, $dbname);

                // check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch the most recent entry for the category
                $sql = "SELECT title, entry_content FROM diary_entry WHERE category = '$category' ORDER BY entry_date DESC LIMIT 1";

                // result
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $title = $row["title"];
                    $content = $row["entry_content"];
                    $conn->close();
                    return [$title, $content];
                } else {
                    $conn->close();
                    return ["No Entry", "No Content"];
                }
            }

          
        $categories = ["Relationship", "Featured", "With Family", "Bonding", "Achievement"];

        foreach ($categories as $category) {
            $recentEntry = getRecentEntry($category);
            ?>
            <?php if ($category === 'Relationship') { ?>
            <!-- Div for Relationship category -->
            <div class="bg-accent-white p-4 self-center w-[95%] m-auto flex flex-col gap-4 rounded-2xl lg:w-full">
                <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
                    <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
                        <?php echo $recentEntry[0]; ?>
                    </h1>
                    <button class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm">
                        <?php echo $category; ?>
                    </button>
                </div>
                <p>
                    <?php echo $recentEntry[1]; ?> <!-- Display the most recent entry title -->
                </p>
            </div>
            
            <?php } else if ($category === 'Featured') { ?>
            <!-- Repeat this component as needed -->
            <div
                class="bg-accent-white p-4 self-center w-[95%] ] m-auto flex flex-col gap-4 rounded-2xl lg:w-full lg:col-span-2 lg:row-span-5 h-full order-first lg:order-none">
                <div class="flex flex-col md:flex-row justify-between">
                    <h1 class="text-primary-darkviolet text-2xl md:text-4xl">
                        Featured Diary | <?php echo $recentEntry[0]; ?>
                    </h1>
                    <button
                        class="text-white font-normal bg-primary-darkviolet rounded-sm md:rounded-2xl px-3 py-1 text-sm">
                        <?php echo $category; ?>
                    </button>
                </div>
                <p>
                    <?php echo $recentEntry[1]; ?>
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 grid-flow-dense gap-y-5 gap-x-6">
                    <div
                        class="flex flex-col md:flex-col items-start md:items-center justify-between w-full gap-6 small:flex-row">
                        <img class="rounded-full w-20 lg:w-52 self-center" src="../assets/images/Doja_Cat_-_Paint_the_Town_Red.png" alt="" />
                        <p class="font-normal text-center small:text-start md:text-center text-sm lg:text-[1rem]">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus, eos. Consectetur nemo nisi assumenda mollitia in quo
                            voluptates error labore.
                        </p>
                    </div>
                    <div
                        class="flex flex-col small:flex-row md:flex-col items-start text-center small:text-start md:items-center justify-between w-full md:text-center gap-6">
                        <img class="rounded-full w-20 lg:w-52 self-center" src="../assets/images/music-image-1.jpg" alt="" />
                        <p class="font-normal text-center small:text-start md:text-center text-sm lg:text-[1rem]">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus, eos. Consectetur nemo nisi assumenda mollitia in quo
                            voluptates error labore.
                        </p>
                    </div>
                    <div
                        class="flex flex-col small:flex-row md:flex-col items-start text-start md:items-center justify-between w-full md:text-center gap-6">
                        <img class="rounded-full w-20 lg:w-52 self-center"
                            src="../assets/images/artworks-000016783437-9xp37m-t500x500.jpg" alt="" />
                        <p class="font-normal text-center small:text-start md:text-center text-sm lg:text-[1rem]">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Possimus, eos. Consectetur nemo nisi assumenda mollitia in quo
                            voluptates error labore.
                        </p>
                    </div>
                </div>
            </div>
            
            <?php } else if ($category === 'Bonding') { ?>
            <!-- Repeat this component as needed -->
            <div class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl">
                <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
                    <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
                        <?php echo $recentEntry[0]; ?>
                    </h1>
                    <button class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm">
                        <?php echo $category; ?>
                    </button>
                </div>
                <p>
                    <?php echo $recentEntry[1]; ?>
                </p>
            </div>

            <?php } else if ($category === 'With Family') { ?>
            <!-- Repeat this component as needed -->
            <div class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl">
                <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
                    <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
                        <?php echo $recentEntry[0]; ?>
                    </h1>
                    <button class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm">
                        <?php echo $category; ?>
                    </button>
                </div>
                <p>
                    <?php echo $recentEntry[1]; ?>
                </p>
            </div>

            <?php } else if ($category === 'Achievement') { ?>
            <!-- Repeat this component as needed -->
            <div class="bg-accent-white p-4 self-center w-[95%] lg:w-full m-auto flex flex-col gap-4 rounded-2xl">
                <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
                    <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
                        <?php echo $recentEntry[0]; ?>
                    </h1>
                    <button class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm">
                        <?php echo $category; ?>
                    </button>
                </div>
                <p>
                    <?php echo $recentEntry[1]; ?>
                </p>
            </div>

            <?php } else { ?>
            <!-- Repeat this component as needed -->
            <div class="bg-accent-white p-4 self-center w-[95%] m-auto flex flex-col gap-4 rounded-2xl lg:w-full">
                <div class="flex flex-col gap-2 sm:flex-row justify-between flex-wrap">
                    <h1 class="text-primary-darkviolet text-4xl lg:text-[2rem]">
                        <?php echo $recentEntry[0]; ?>
                    </h1>
                    <button class="text-white font-normal bg-primary-darkviolet rounded-2xl px-3 py-1 text-sm">
                        <?php echo $category; ?>
                    </button>
                </div>
                <p>
                    <?php echo $recentEntry[1]; ?>
                </p>
            </div>
            <?php } ?>
            <?php
        }
        ?>
    
        </div>
</section>
<script src="../js/scriptDashboard.js"></script>
<script src="../js/scriptNav.js"></script>
</body>

</html>
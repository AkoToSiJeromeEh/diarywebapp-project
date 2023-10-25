<?php
 session_start();
 include('../static/header.php')
?>
    <section
      class="bg-pages-pattern bg-no-repeat bg-cover bg-center min-h-screen flex flex-col gap-5"
    >
    <div>
    <?php
        include('../static/navbar.php');
       ?> 
      </div>

      <div
        class="p-5 flex flex-col items-start md:items-center justify-center lg:flex-row gap-5"
      >
        <form
          class="profile-other-interest p-5 rounded-[20px] flex flex-col gap-8 bg-accent-white items-start w-full lg:w-[40rem] lg:h-[40rem] md:h-full overflow-hidden" action="../php/entry-insert.php" method="post"
        >
          <div class="flex flex-row gap-2 justify-between w-full">
            <input id="title-input" name="title-input" type="text" placeholder="Enter Title" />
            <button id="btn-submit" type="submit" class="fa-solid fa-plus"></button>
          </div>
          <div
            class="flex flex-col small:flex-row gap-2 justify-between w-full"
          >
            <select name="category-input" id="category-input">
              <option disabled selected value="">Select Category</option>
              <option value="Relationship">Relationship</option>
              <option value="Bonding">Bonding</option>
              <option value="With Family">With Family</option>
              <option value="Anniversary">Anniversary</option>
              <option value="Achievement">Achievement</option>
              <option value="Featured">Featured</option>
              <option value="Gallery">Gallery</option>
              <option value="Achievement">Other</option>
            </select>
            <input id="date-input" name="date-input" type="text" placeholder="Enter Date" />
          </div>
          <h1 class="text-lg  text-primary-darkviolet font-bold">Choose Output Colors</h1>
          <div class="flex flex-row gap-4 w-full items-start flex-wrap color-picker">
            <div class="flex flex-row flex-wrap gap-2 items-center">
               
                <h1 class="text-lg  text-primary-darkviolet"> Text Color</h1>
                <input id="text-picker" name="textcolor-input"  type="color" class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet " >
            </div>
            <div class="flex flex-row flex-wrap gap-2 items-center">
               
              <h1 class="text-lg font- text-primary-darkviolet"> Bg Color</h1>
              <input id="bg-picker" name="bgcolor-input" type="color" class="fa-solid fa-fill-drip w-28 p-5 rounded-md text-secondary-lightviolet " >
          </div>
          </div>
          <div class="grid grid-cols-1 w-full lg:w-[90%] h-[32rem] relative">
           <div>
           <textarea
           class="h-full w-full" 
              id="textarea-input"
              name="textarea-input"
              class="w-full"
              placeholder="Start writing..."
            ></textarea>
           </div>
           <div class="absolute   right-[20px] bottom-0 m-5 p-2  rounded-full text-primary-darkviolet border-2 border-secondary-lightviolet bg-slate-50 font-extrabold " id="count-container">
            <p class="text-[1rem] font-extrabold" >
              <span id="start-count">0</span> / <span id="max-count">0</span>
            </p>
          </div>
          </div>
        </form>

        <div
          id="newEntryCont"
          class="flex flex-col items-center gap-6 w-full lg:w-[30rem] z-30 static lg:relative lg:-left-[5rem] profile-cont  p-5 rounded-[20px] lg:h-[20rem] overflow-y-auto "
        >
          <div class="flex flex-col gap-4 m-5">
            <div
              class="flex flex-col small:flex-row w-full items-start flex-wrap gap-3"
            >
              <div class="flex-1">
                <h1
                  class="text-primary-darkviolet text-lg font-bold"
                  id="title-text"
                >
                  Our First Meet
                </h1>
                <p id="date-text" class="font-normal">Aug 22 2022</p>
              </div>
              <div class="w-full small:w-fit">
                <span
                  id="category-text"
                  class="bg-primary-darkviolet px-4 py-1 text-sm text-white rounded-3xl w-full small:w-fit font-bold"
                >
                  Relationship
                </span>
              </div>
            </div>
            <div>
              <p id="description-text" class="break-all overflow-visible font-normal">
                <span >
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Aliquam, quam, ipsam nemo id corrupti inventore nisi ut eveniet
                repudiandae, saepe blanditiis assumenda sequi quas animi numquam
                quia repellat voluptatem similique!
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>

    </section>


    <script src="../js/scriptNewentry.js"></script>
    <script src="../js/scriptNav.js"></script>
  </body>
</html>

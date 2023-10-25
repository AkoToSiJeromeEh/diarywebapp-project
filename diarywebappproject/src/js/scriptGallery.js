// Render Music Album With Fake Data

// const musicContainer = document.getElementById("music-list-container");

const musicAlbum = [
  {
    id: 1,
    img: "../assets/images/artworks-000016783437-9xp37m-t500x500.jpg",
    title: "Sparks",
    description:
      "Sparks by Coldplay is a poignant ballad that explores longing and nostalgia. ",
    music: "../assets/music/@coldplay  - Sparks (Lyrics).mp3",
    artist: "Cold Play",
    linear: "linear-gradient(#9d5907, rgba(10, 10, 10, 0.5))",
  },
  {
    id: 2,
    img: "../assets/images/Doja_Cat_-_Paint_the_Town_Red.png",
    title: "Paint the Town Red",
    description:
      "Paint the Town Red by Doja Cat is an energetic, feel-good pop track that encourages listeners to embrace confidence and enjoy life.",
    music: "../assets/music/Doja Cat - Paint The Town Red (Official Video).mp3",
    artist: "Doja Cat",
    linear: "linear-gradient(rgba(10, 10, 10, 5),#9C0A1E)",
  },
  {
    id: 3,
    img: "../assets/images/music-image-1.jpg",
    title: "Here with me",
    description:
      "Here with Me by David is a heartfelt love song celebrating the presence of a cherished partner.",
    music: "../assets/music/d4vd - Here With Me _Official Music Video_.mp3",
    artist: "d4vd",
    linear: " linear-gradient(#F0675D, rgba(10, 10, 10, 5))",
  },
];

;

// Music Function Uwu
const prevButton = document.getElementById("prev-button");
const playButton = document.getElementById("play-button");
const origPlaybutton = playButton.innerHTML;
const nextButton = document.getElementById("next-button");
const titleMusic = document.getElementById("musicName");
const imageCover = document.getElementById("music-cover");
const musicContainer = document.getElementById("music-list-container");

//Render music Content on Second Container
const artistMusic = document.getElementById("artistName");
const musicDescription = document.getElementById("musicDescription");

//Render music Content on Music Player
const renderPlayingMusic = document.getElementById('playing-music')
const renderPlayingImage = document.getElementById('playing-img')
const renderPlayingArtist = document.getElementById('playing-artist')

//Render next Queue Music
const nextQueueMusic = document.getElementById('next-queue-p');
const nextQueueArtist = document.getElementById('next-queue-artist');
const nextQueueImg = document.getElementById('next-queue-img');



let currentmusicIndex = 0;
const audioElement = new Audio();
let isPlaying = false;
let trackTime = 0;


const resetTrack = () => (trackTime = 0);

const renderMusicArist = () => {
  const currentMusic = musicAlbum[currentmusicIndex];
  const {
    title,
    artist,
    img,
    description,
    linear,
  } = currentMusic;

  titleMusic.innerHTML = title;
  artistMusic.innerHTML = artist;
  renderPlayingMusic.innerHTML = title;
  renderPlayingArtist.innerHTML = artist;
  imageCover.src = img;
  renderPlayingImage.src = img;
  musicDescription.innerHTML = description;
  musicContainer.style.cssText = `background: ${linear}, url('${img}')`;
};


const nextQueue = () => {
  const nextIndex = (currentmusicIndex + 1) % musicAlbum.length; 
  nextQueueMusic.innerHTML = musicAlbum[nextIndex].title;     
  nextQueueArtist.innerHTML = musicAlbum[nextIndex].artist;    
  nextQueueImg.src = musicAlbum[nextIndex].img; 
};


const alterPlayPause = () => {
  if (isPlaying) pauseMusic();
  else playMusic();
};
playButton.addEventListener("click", alterPlayPause);


const playMusic = () => {
  audioElement.src = musicAlbum[currentmusicIndex].music;
  audioElement.currentTime = trackTime;
  audioElement.play();
  playButton.innerHTML = `<i class="fa-solid fa-pause fa-lg" style="color: #ffffff;"></i>`;;
  isPlaying = true;
  renderMusicArist();
  nextQueue();
};

const pauseMusic = () => {
  trackTime = audioElement.currentTime;
  audioElement.pause();
  playButton.innerHTML = `<i class="fa-solid fa-play fa-lg" style="color: #ffffff;"></i>`;
  isPlaying = false;
};
const nextMusic = () => {
  currentmusicIndex++;

  if (currentmusicIndex >= musicAlbum.length) {
    currentmusicIndex = 0;
    
  }
  resetTrack();
  playMusic();
};
nextButton.addEventListener("click", nextMusic);
const prevMusic = () => {
  currentmusicIndex--;

  if (currentmusicIndex < 0) {
    currentmusicIndex = musicAlbum.length - 1;
  }
  resetTrack();
  playMusic();
};

prevButton.addEventListener("click", prevMusic);


// Toggle Image
const btnImageToggler = document.getElementById('image-toggler')
const imageContainer = document.getElementById('image-container');
const origImageContainer = imageContainer.style.display;
isImageShown = true;

const showImages = () => {

   if(isImageShown) {

      imageContainer.style.display = 'block';
   }
   else {
     
     imageContainer.style.display = origImageContainer;
   }
   isImageShown = !isImageShown;
   
}

btnImageToggler.addEventListener('click', showImages);
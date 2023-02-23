const music = new Audio('5.mp3');

//create array
const song = [
   {
      id: '1',
      SongName: `On My Way <br>
        <div class"subtitle">Alan Walker</div>`,
      poster: "1.png"
   },
   {
      id: '2',
      SongName: `Alan Walker-fade <br>
        <div class"subtitle">Alan Walker</div>`,
      poster: "2.png"
   },
   {
      id: '3',
      SongName: `Cartoon-On & On <br>
        <div class"subtitle">Alan Walker</div>`,
      poster: "3.png"
   },
   {
      id: '4',
      SongName: `Cheap Thrills <br>
        <div class"subtitle">Sia</div>`,
      poster: "4.png"
   },
   {
      id: '5',
      SongName: `Luis Fonsi <br>
        <div class"subtitle"> Daddy Yankee</div>`,
      poster: "5.png"
   },
   {
      id: '6',
      SongName: ` Shape of You <br>
        <div class"subtitle">Ed Sheeran</div>`,
      poster: "6.png"
   },
   {
      id: '7',
      SongName: `Let me Love <br>
        <div class"subtitle">Justin Biebber</div>`,
      poster: "7.png"
   },
   {
      id: '8',
      SongName: `Agar tum saath Ho<br>
        <div class"subtitle">Ranbir Kapoor</div>`,
      poster: "8.png"
   },
   {
      id: '9',
      SongName: `Suna Hai <br>
        <div class"subtitle">Jubin Nautiyal </div>`,
      poster: "9.png"
   },
   {
      id: '10',
      SongName: `Dilbar <br>
        <div class"subtitle">Neha Kakkar</div>`,
      poster: "10.png"
   },
   {
      id: '11',
      SongName: `Duniya <br>
        <div class"subtitle">Akhil</div>`,
      poster: "11.png"
   },
   {
      id: '12',
      SongName: `Lagdi Lahore Di <br>
        <div class"subtitle">Guru Randhawa</div>`,
      poster: "12.png"
   },
   {
      id: '13',
      SongName: `Lut Gaye<br>
        <div class"subtitle">Alan Walker</div>`,
      poster: "13.png"
   },
   {
      id: '14',
      SongName: `Last Peg <br>
        <div class"subtitle">Raju Punjabi</div>`,
      poster: "14.png"
   },
   {
      id: '15',
      SongName: `8 parche <br>
        <div class"subtitle">Banni Sandhu</div>`,
      poster: "15.png"
   },
   {
      id: '16',
      SongName: `Raule Gaule <br>
        <div class"subtitle">Gurlej akhtar</div>`,
      poster: "16.png"
   },
]
Array.from(document.getElementsByClassName('songItem')).forEach((element, i) => {
   element.getElementsByTagName('img')[0].src = song[i].poster;
   element.getElementsByTagName('h5')[0].innerHTML = song[i].SongName;
})
// search data start
let search_result = document.getElementsByClassName('search_result')[0];
song.forEach(element => {
   const { id, SongName, poster } = element;
   let card = document.createElement('a');
   card.classList.add('card');
   card.href = '#' + id;
   card.innerHTML = `
   <img src="${poster}" alt="">
   <div class="content">
      ${SongName}
   </div>
   `;
   search_result.appendChild(card);
});
let input = document.getElementsByTagName('input')[0];
input.addEventListener('keyup', () => {
   let input_value = input.value.toUpperCase();
   let items = document.getElementsByTagName('a');
   for (let i = 0; i < items.length; i++) {
      let as = items[i].getElementsByClassName('content')[0];
      let text_value = as.textContent || as.innerText;
      if (text_value.toUpperCase().indexOf(input_value) > -1) {
         items[i].style.display = "flex";
      } else {
         items[i].style.display = "none";
      }
      if (input.value == 0) {
         search_result.style.display = "none";
      } else {
         search_result.style.display = "flex";
      }

   }
})
// search data end


let masterPlay = document.getElementById('masterPlay');
let wave = document.getElementsByClassName('wave')[0];

masterPlay.addEventListener('click', () => {

   if (music.paused || music.currentTime <= 0) {
      music.play();
      masterPlay.classList.remove('bi-play-fill')
      masterPlay.classList.add('bi-pause-fill')
      wave.classList.add('active2');

   }
   else {
      music.pause();
      masterPlay.classList.add('bi-play-fill')
      masterPlay.classList.remove('bi-pause-fill')
      wave.classList.remove('active2');
   }
})
const makeAllPlays = () => {
   Array.from(document.getElementsByClassName('PlaylistPlay')).forEach((element) => {
      element.classList.add('bi-play-circle-fill');
      element.classList.remove('bi-pause-circle-fill');
   })

}
const makeAllBackgrounds = () => {
   Array.from(document.getElementsByClassName('songItem')).forEach((element) => {
      element.style.background = "rgb(105, 105, 170 ,0)";

   })

}
let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let download_music = document.getElementById('download_music');
let title = document.getElementById('title');
Array.from(document.getElementsByClassName('PlaylistPlay')).forEach((element) => {
   element.addEventListener('click', (e) => {
      makeAllPlays();
      index = e.target.id;
      e.target.classList.remove('bi-play-circle-fill');
      e.target.classList.add('bi-pause-circle-fill');
      music.src = `${index}.mp3`;
      download_music.href = `${index}.mp3`;
      poster_master_play.src = `${index}.png`;
      music.play();
      let song_title = song.filter((ele) => {
         return ele.id == index;

      })
      song_title.forEach(ele => {
         let { SongName } = ele;
         title.innerHTML = SongName;
         download_music.setAttribute('download', SongName);
      })

      masterPlay.classList.remove('bi-play-fill')
      masterPlay.classList.add('bi-pause-fill')
      wave.classList.add('active2');
      // music.addEventListener('ended', () => {
      //    masterPlay.classList.add('bi-play-fill');
      //    masterPlay.classList.remove('bi-pause-fill');
      //    wave.classList.remove('active2');
      // })
      makeAllBackgrounds();
      Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170 ,.1)";


   })
})
let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];
music.addEventListener('timeupdate', () => {
   let music_curr = music.currentTime;
   let music_dur = music.duration;
   let min = Math.floor(music_dur / 60);
   let sec = Math.floor(music_dur % 60);
   if (sec < 10) {
      sec = `0${sec}`;
   }
   currentEnd.innerText = `${min}:${sec}`;
   let min1 = Math.floor(music_curr / 60);
   let sec1 = Math.floor(music_curr % 60);
   if (sec1 < 10) {
      sec1 = `0${sec1}`;
   }
   currentStart.innerText = `${min1}:${sec1}`;

   let progressbar = parseInt((music.currentTime / music.duration) * 100);
   seek.value = progressbar;
   let seekbar = seek.value;
   bar2.style.width = `${seekbar}%`;
   dot.style.left = `${seekbar}%`;
})
seek.addEventListener('change', () => {
   music.currentTime = seek.value * music.duration / 100;
})
const next_music = () => {
   // music.addEventListener('ended', () => {
   // masterPlay.classList.add('bi-play-fill');
   masterPlay.classList.add('bi-pause-fill');
   wave.classList.add('active2');
   if (index == song.length) {
      index == 0;
   }
   index++;
   music.src = `${index}.mp3`;
   download_music.href = `${index}.mp3`;
   poster_master_play.src = `${index}.png`;
   music.play();
   let song_title = song.filter((ele) => {
      return ele.id == index;

   })
   song_title.forEach(ele => {
      let { SongName } = ele;
      title.innerHTML = SongName;
      download_music.setAttribute('download', SongName);
   })
   makeAllBackgrounds();
   Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105,170, .1)";
   makeAllPlays();
   document.getElementsByClassName('PlayListplay')[index - 1].classList.remove('bi-play-circle-fill');
   document.getElementsByClassName('PlayListplay')[index - 1].classList.add('bi-pause-circle-fill');
}
const repeat_music = () => {
   masterPlay.classList.add('bi-pause-fill');
   wave.classList.add('active2');
   index;
   music.src = `${index}.mp3`;
   download_music.href = `${index}.mp3`;
   poster_master_play.src = `${index}.png`;
   music.play();
   let song_title = song.filter((ele) => {
      return ele.id == index;

   })
   song_title.forEach(ele => {
      let { SongName } = ele;
      title.innerHTML = SongName;
      download_music.setAttribute('download', SongName);
   })
   makeAllBackgrounds();
   Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105,170, .1)";
   makeAllPlays();
   document.getElementsByClassName('PlayListplay')[index - 1].classList.remove('bi-play-circle-fill');
   document.getElementsByClassName('PlayListplay')[index - 1].classList.add('bi-pause-circle-fill');
}
const random_music = () => {
   masterPlay.classList.add('bi-pause-fill');
   wave.classList.add('active2');

   if (index == song.length) {
      index == 0;
   }
   index = Math.floor((Math.random() * song.length) + 1);
   music.src = `${index}.mp3`;
   download_music.href = `${index}.mp3`;
   poster_master_play.src = `${index}.png`;
   music.play();
   let song_title = song.filter((ele) => {
      return ele.id == index;

   })
   song_title.forEach(ele => {
      let { SongName } = ele;
      title.innerHTML = SongName;
      download_music.setAttribute('download', SongName);
   })
   makeAllBackgrounds();
   Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105,170, .1)";
   makeAllPlays();
   document.getElementsByClassName('PlayListplay')[index - 1].classList.remove('bi-play-circle-fill');
   document.getElementsByClassName('PlayListplay')[index - 1].classList.add('bi-pause-circle-fill');
}
let shuffle = document.getElementsByClassName('shuffle')[0];
shuffle.addEventListener('click', () => {
   let a = shuffle.innerHTML;
   switch (a) {
      case "next":
         shuffle.classList.add('bi-arrow-repeat');
         shuffle.classList.remove('bi-music-note-beamed');
         shuffle.classList.remove('bi-shuffle');
         shuffle.innerHTML = "repeat";
         break;
      case "repeat":
         shuffle.classList.remove('bi-arrow-repeat');
         shuffle.classList.remove('bi-music-note-beamed');
         shuffle.classList.add('bi-shuffle');
         shuffle.innerHTML = "random";
         break;
      case "random":
         shuffle.classList.remove('bi-arrow-repeat');
         shuffle.classList.add('bi-music-note-beamed');
         shuffle.classList.remove('bi-shuffle');
         shuffle.innerHTML = "next";
         break;
   }
});
// alert(shuffle.innerHTML);
music.addEventListener('ended', () => {
   let b = shuffle.innerHTML;
   switch (b) {
      case "repeat":
         repeat_music();
         break;
      case "next":
         next_music();
         break;
      case "random":
         random_music();
         break;


   }
})

let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_dot = document.getElementById('vol_dot');
let vol_bar = document.getElementsByClassName('vol_bar')[0];

vol.addEventListener('change', () => {
   if (vol.value == 0) {
      vol_icon.classList.remove('bi-volume-down-fill');
      vol_icon.classList.add('bi-volume-mute-fill');
      vol_icon.classList.remove('bi-volume-up-fill');
   }
   if (vol.value > 0) {
      vol_icon.classList.add('bi-volume-down-fill');
      vol_icon.classList.remove('bi-volume-mute-fill');
      vol_icon.classList.remove('bi-volume-up-fill');
   }
   if (vol.value > 50) {
      vol_icon.classList.remove('bi-volume-down-fill');
      vol_icon.classList.remove('bi-volume-mute-fill');
      vol_icon.classList.add('bi-volume-up-fill');
   }
   let vol_a = vol.value;
   vol_bar.style.width = `${vol_a}%`;
   vol_dot.style.left = `${vol_a}%`;
   music.volume = vol_a / 100;

})
let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click', () => {
   index -= 1;
   if (index < 1) {
      index = Array.from(document.getElementsByClassName('songItem')).length;
   }
   music.src = `${index}.mp3`;
   download_music.href = `${index}.mp3`;
   poster_master_play.src = `${index}.jpg`;
   music.play();
   let song_title = song.filter((ele) => {
      return ele.id == index;

   })
   song_title.forEach(ele => {
      let { SongName } = ele;
      title.innerHTML = SongName;
      download_music.setAttribute('download'.songName);
   })
   makeAllPlays();
   document.getElementById(`${index}`).classList.remove('bi-play-fill')
   masterPlay.classList.add('bi-pause-fill')
   makeAllBackgrounds();
   Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170 ,.1)";

})
next.addEventListener('click', () => {
   index -= 0;
   index += 1;
   if (index < 1) {
      index = Array.from(document.getElementsByClassName('songItem')).length;
   }
   music.src = `${index}.mp3`;
   download_music.href = `${index}.mp3`;
   poster_master_play.src = `${index}.png`;
   music.play();
   let song_title = song.filter((ele) => {
      return ele.id == index;

   })
   song_title.forEach(ele => {
      let { SongName } = ele;
      title.innerHTML = SongName;
      download_music.setAttribute('download'.SongName);
   })
   makeAllPlays();
   document.getElementById(`${index}`).classList.remove('bi-play-fill')
   masterPlay.classList.add('bi-pause-fill')
   makeAllBackgrounds();
   Array.from(document.getElementsByClassName('songItem'))[`${index - 1}`].style.background = "rgb(105, 105, 170 ,.1)";

})
let left_scroll = document.getElementById('left_scroll');
let right_scroll = document.getElementById('right_scroll');
let pop_song = document.getElementsByClassName('pop_song')[0];

left_scroll.addEventListener('click', () => {
   pop_song.scrollLeft -= 330;
})
right_scroll.addEventListener('click', () => {
   pop_song.scrollLeft += 330;
})
let left_scrolls = document.getElementById('left_scrolls');
let right_scrolls = document.getElementById('right_scrolls');
let item = document.getElementsByClassName('item')[0];

left_scrolls.addEventListener('click', () => {
   item.scrollLeft -= 330;
})
right_scrolls.addEventListener('click', () => {
   item.scrollLeft += 330;
})

let menu_list_active = document.getElementById('menu_list_active');
let menu_side = document.getElementsByClassName('menu_side')[0];


function myFunction(x) {
   if (x.matches) { // If media query matches
      menu_list_active.addEventListener("click", () => {
         menu_side.style.transform = "unset";
         menu_list_active.style.opacity = 0;
      })
      let song_side = document.getElementsByClassName('song_side')[0];
      song_side.addEventListener("click", () => {

         menu_side.style.transform = "translateX(-100%)";
         menu_list_active.style.opacity = 1;
      })
   }
   else {
       menu_side.style.transform ="set";
      menu_side.style.transform = "translateX(1%)";
   }

}


var x = window.matchMedia("(max-width: 930px)")
myFunction(x)
x.addListener(myFunction)







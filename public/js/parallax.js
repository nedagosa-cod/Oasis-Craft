// const background = document.getElementById('background')
// const mountains = document.getElementById('mountains')
// const lava = document.getElementById('lava')
// const floor = document.getElementById('floor')
// const tower = document.getElementById('tower')
// const rock = document.getElementById('rock')
// const minirock = document.getElementById('minirock')
// const video = document.createElement('video')



// function scrollVideo (e) {
//     let _100vh = window.innerHeight;
//     let video = $('#video').get(0),
//     videoLength = video.duration,
//     scrollPosition = $(document).scrollTop()

//     if (scrollPosition > (_100vh / 2) && scrollPosition < _100vh) {

//         let pixels = (scrollPosition - 300)
//         video.currentTime =(pixels/($(document).height() - $(window).height()) * videoLength)
//         console.log(pixels)
//     } else if (scrollPosition > _100vh) {
//         e.preventDefault();
//     }
// }



// $(window).scroll(function (e) {
//     scrollVideo()
// })


// const scrollVideo = (e) => {
//     const _100vh = window.innerHeight;
//     const video = document.getElementById('video');
//     const videoLength = video.duration;
//     const scrollPosition = window.scrollY || window.pageYOffset;
//     const pixels = (scrollPosition - (_100vh / 2));
  
//     if (scrollPosition > (_100vh / 2) && scrollPosition < _100vh) {
//         video.removeAttribute('style');
//         video.currentTime = (pixels / (document.documentElement.scrollHeight - window.innerHeight)) * videoLength;
//     } else if (scrollPosition > _100vh && scrollPosition < (_100vh * 2)) {
//         video.currentTime = (pixels / (document.documentElement.scrollHeight - window.innerHeight)) * videoLength;
//         video.style.position = 'fixed';
//     } else {
//         video.currentTime = (pixels / (document.documentElement.scrollHeight - window.innerHeight)) * videoLength;
//         video.removeAttribute('style');
//     }
//   }

const scrollIMage = () => {


    const _100vh = window.innerHeight;
    const video = document.getElementById('video');
    const video_b = document.getElementById('video_b');
    const starts = document.getElementById('starts');
    const scrollPosition = window.scrollY || window.pageYOffset;
    const pixels = Math.floor((scrollPosition - (_100vh / 2)) / 6);
    console.log({scrollPosition})
    // inicia de 0 la cantidad de imagenes a aplicar
    const pixels_b = Math.floor((scrollPosition - (_100vh * 4)) / 10);

    let pos = scrollPosition / 100

    if (scrollPosition > (_100vh / 2) && scrollPosition < _100vh) {
        starts.removeAttribute('style');
        video.src = './public/video/parallax/scene_a/scene (' + (pixels) + ').jpg'
    } else if (scrollPosition > _100vh && scrollPosition < (_100vh * 2)) {
        starts.removeAttribute('style');
        video.src = './public/video/parallax/scene_a/scene (' + (pixels) + ').jpg'
    } else if (scrollPosition > (_100vh * 2) && scrollPosition < (_100vh * 2.8)) {
        starts.removeAttribute('style');
        video.src = './public/video/parallax/scene_a/scene (' + (pixels) + ').jpg'
    } else if (scrollPosition > (_100vh * 3) && scrollPosition < (_100vh * 4)) {
        starts.style.position = 'fixed';
        starts.style.left = pos * 1.20 + 'px'
    } else if (scrollPosition > (_100vh * 4 ) && scrollPosition < (_100vh * 8 )) {
        starts.style.left = pos * 1.20 + 'px'
        video_b.src = './public/video/parallax/scene_b/scene (' + pixels_b + ').jpg'
    }
    
}
  
  document.addEventListener('scroll', scrollIMage);
  



const parallax = () => {
    let value = window.scrollY
    if (value <= 350) {
        mountains.style.top = value * 0.40 + 'px'
        mountains.style.left = value * -0.01 + 'px'
        lava.style.top = value * 0.03 + 'px'
        floor.style.top = value * 0.02 + 'px'
        
        tower.style.top = value * -0.040 + 'px'
        tower.style.left = value * 0.040 + 'px'
    
        rock.style.top = value * 0.01 + 'px'
    
        minirock.style.top = value * 0.01 + 'px'
        minirock.style.left = value * -0.05 + 'px'
    }
}



window.addEventListener('scroll', parallax)
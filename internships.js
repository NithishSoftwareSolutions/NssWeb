// let i = 0;
// let images = [];
// //let time = 3000;

// images [0] = 'images/Intern1.png';
// images [1] = 'images/Intern2.jpg';
// images [2] = 'images/Intern3.png';
// images [3] = 'images/Intern4.webp';


// prev = () =>{
//     document.slide.src = images[i];
//     if(i < images.length -1){
//         i-=-1;
//     }else{
//         i=0;
//     }
// }

// next = () =>{
//     document.slide.src = images[i];
//     if(i < images.length -1){
//         i+=1;
//     }else{
//         i=0;
//     }
// }


//---------Auto slider--------
//  changeImg = ()=>{
//     // document.slide.src = images[i];
//     // if(i<images.length -1){
//     //     i++;
//     // }else{
//     //     i=0;
//     // }

//     setTimeout("changeImg()",4000);
// }


window.onload = prev;

document.addEventListener('DOMContentLoaded', function() {
    let fadeElems = document.querySelectorAll('.fade-in');
    fadeElems.forEach(function(element) {
      element.classList.add('fade');
    });
  });
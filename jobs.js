let i = 0;
let images = [];
let time = 3000;

images [0] = 'images/job-2.jpg';
images [1] = 'images/job-2.jpg';
images [2] = 'images/job-3.jpg';


changeImg = ()=>{
    document.slide.src = images[i];
    if(i<images.length -1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()", 3000);
}

window.onload = changeImg;


// ----------------Alert------------
let form_details=jobPopup=()=>{
    alert('We have recieved your response. Thank you');
}

// ------------------hidden functionality----------------

//  let toggle = button =>{
    
//     document.getElementById('form').style.display='block';

//      let element = document.getElementById('form');
//      let hidden = element.getAttribute('hidden');

//      if(hidden){
//          element.removeAttribute('hidden');
//          button.innerText = 'Jr Software Developer';
//      }else{
//          element.setAttribute("hidden", "hidden");
//         button.innerText = "Jr Software Developer";
//    }
//  }

//  let hide = button =>{
//     document.getElementById('form-1').style.display='block';
//      let element = document.getElementById('form-1');
//      let hidden = element.getAttribute('hidden');

//      if(hidden){
//          element.removeAttribute('hidden');
//          button.innerText = 'Sr. Software Developer';
//     }else{
//         element.setAttribute("hidden", "hidden");
//        button.innerText = "Sr Software Developer";
//      }
//  }

// ---------------------------

  document.addEventListener('DOMContentLoaded', function() {
    let fadeElems = document.querySelectorAll('.fade-in');
    fadeElems.forEach(function(element) {
      element.classList.add('fade');
    });
  });




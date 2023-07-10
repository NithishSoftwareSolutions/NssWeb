// --------------------- Google sheets connecting to data of the NSS ------------->

// const scriptURL = 'https://script.google.com/macros/s/AKfycbzDnv7rfVp1PC_cMtJ4Ql1OC71EwHb7BBqbr1ewg0WHVH4OubOUj3xldz_90DphR_zi/exec'
// const form = document.forms['submit-to-google-sheet']
// const msg = document.getElementById("msg")

// form.addEventListener('submit', e => {
//   e.preventDefault()
//   fetch(scriptURL, { method: 'POST', body: new FormData(form)})
//     .then(response => {
//         msg.innerHTML = "Your message has been sent. Thank you!"
//         setTimeout(function(){
//             msg.innerHTML =""
//         }, 1000)
//         form.reset()
//     })
//     .catch(error => console.error('Error!', error.message))
// })

// ---------------------- Top Reviews ------------------->

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
});

// ------------------ Ratings ---------------------->

// let icons = document.querySelectorAll('.icon a');
// icons.forEach((item, index1) =>{
//   item.addEventListener('click',
//    ()=>{
//     icons.forEach((icon, index2) => {
//         index1 >= index2 ? icon.classList.add('active') : icon.classList.remove('active')
//     })
//   })
// })

// ------------------- Reviws -------------------

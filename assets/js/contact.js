
// --------------------- Google sheets connecting to data of the NSS ------------->


const scriptURL = 'https://script.google.com/macros/s/AKfycbzDnv7rfVp1PC_cMtJ4Ql1OC71EwHb7BBqbr1ewg0WHVH4OubOUj3xldz_90DphR_zi/exec'
const form = document.forms['submit-to-google-sheet']
const msg = document.getElementById("msg")

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
        msg.innerHTML = "Your message has been sent. Thank you!"
        setTimeout(function(){
            msg.innerHTML =""
        }, 1000)
        form.reset()
    })
    .catch(error => console.error('Error!', error.message))
})
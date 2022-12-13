const { filter } = require("lodash")

(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
  })()


const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active")
    });
});

const modal  = document.querySelector('.modal-container-teste')



var wallet;
function connectWallet(){

    (async() => {
    try {
    const resp = await window.solana.connect();
    wallet = resp;
    // 26qv4GCcx98RihuK3c4T6ozB3J7L6VwCuFVc7Ta2A3Uo 
} catch (err) {
    // { code: 4001, message: 'User rejected the request.' }
}
})();

window.solana.on("connect", () => document.getElementById("status").innerText=window.solana.publicKey);
window.solana.on("connect", () => document.getElementById("numbernft").innerText='#12');
window.solana.on("connect", () => document.getElementById("namenft").innerText='Berich Classic White');
//window.solana.on("connect", () => document.getElementById("wallet").value = window.solana.publicKey);

}

(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
  })()


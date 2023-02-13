window.addEventListener('load', () => {
    const loader2 = document.querySelector('.loader2');
    loader2.classList.add('loader-hidden')

    loader2.addEventListener("transitionend", () => {
        console.log("hello")
    })
})
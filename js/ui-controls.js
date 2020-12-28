/**
 * Control mobile menu
 */
 window.addEventListener("load", () => {
    document.getElementById('open-menu').addEventListener("click", () =>{
        console.log('yo');
        document.getElementById('nav-menu').style.display = 'block';
        document.getElementById('nav-menu').classList.toggle('mobile-menu');
    })
 });

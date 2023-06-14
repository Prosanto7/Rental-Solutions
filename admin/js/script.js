const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click', () => {
    toggleTheme();
})

function getMode() {
    var imgSource = document.getElementById('logoImage').src;
    if (imgSource.indexOf('logo.png') != -1) {
        return "light";
    } else {
        return "dark";
    }
}

function toggleTheme() {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');

    if (getMode() == 'light') {
        document.getElementById('logoImage').src = 'images/logo-white.png';
    } else {
        document.getElementById('logoImage').src = 'images/logo.png';
    }
}

function logout () {

}

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
    return localStorage.getItem("mode");
}

function toggleTheme() {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');

    if (getMode() == 'light') {
        document.getElementById('logoImage').src = 'images/logo-white.png';
        localStorage.setItem('mode', 'dark');
    } else {
        document.getElementById('logoImage').src = 'images/logo.png';
        localStorage.setItem('mode', 'light');
    }
}

function logout () {

}

if (getMode() == 'dark') {
    document.body.classList.add('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.remove('active');
    themeToggler.querySelector('span:nth-child(2)').classList.add('active');
    document.getElementById('logoImage').src = 'images/logo-white.png';
} else {
    document.body.classList.remove('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.add('active');
    themeToggler.querySelector('span:nth-child(2)').classList.remove('active');
    document.getElementById('logoImage').src = 'images/logo.png';
}

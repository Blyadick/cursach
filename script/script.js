var loginbutt = document.getElementById('login')
var regbutton = document.getElementById('register')
var blockreg = document.getElementById('regipan')
var blocklog = document.getElementById('loginpan')
var news = document.getElementById('news')
var content = document.getElementById('cont')
var tariffs = document.getElementById('tarifs')

function loadContent(filename) {
    fetch(filename)
        .then(response => response.text())
        .then(html => {
            content.innerHTML = html;
        })
}

loginbutt.addEventListener('click', function(){
    console.log('Login active');
    if (blocklog.style.right == '0px') {
        blocklog.style.right = '-350px'
        if (blocklog.style.display == 'none'){
            blocklog.style.display = 'block'
        }
    }
    else{
        blocklog.style.right = '0px';
        if (blocklog.style.display == 'block'){
            blocklog.style.display = 'none'
        }
    }
})

regbutton.addEventListener('click', function(){
    console.log('Login active');
    if (blockreg.style.right == '0px'){
        blockreg.style.right = '-350px'
        if (blockreg.style.display == 'none'){
            blockreg.style.display = 'block'
        }
    }
    else{
        blockreg.style.right = '0px';
        if (blockreg.style.display == 'block'){
            blockreg.style.display = 'none'
        }
    }
})

news.addEventListener('click', function(){
    loadContent('news.html')
})

tariffs.addEventListener('click', function(){
    loadContent('tariff.html')
})
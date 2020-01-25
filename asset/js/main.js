function openNav() {
    document.getElementById("mySidepanel").style.width = "70%";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}



function slide() {
    document.getElementById("img1").style.opacity = '0';
    document.getElementById("img1").style.transition = '1s';
    document.getElementById("img1").style.display = 'none';
    document.getElementById("img2").style.opacity = '1';
    document.getElementById("img2").style.transition = '1s';
    document.getElementById("img2").style.display = 'block';
}

function slide2() {
    document.getElementById("img2").style.opacity = "0";
    document.getElementById("img2").style.transition = "1s";
    document.getElementById("img2").style.display = "none";
    document.getElementById("img3").style.transition = "1s";
    document.getElementById("img3").style.opacity = "1";
    document.getElementById("img3").style.display = "block";
}
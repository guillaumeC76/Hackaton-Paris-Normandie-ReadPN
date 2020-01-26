



function openNav() {
    document.getElementById("mySidepanel").style.width = "70%";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}

const softRemove = (elmt) => {
    img1.classList.remove('validate');
    elmt.style.display = "none";
}

const softRemoveC = (elmt) => {
    img1.classList.remove('cancel');
    elmt.style.display = "none";
}

const softRemove2 = (elmt) => {
    img2.classList.remove('validate');
    elmt.style.display = "none";
}

const softRemove2C = (elmt) => {
    img2.classList.remove('cancel');
    elmt.style.display = "none";
}


function slideV() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    img1.classList.add('validate');
    setTimeout(function () {
        softRemove(img1);
        img2.style.display = "block";
    }, 700);
}

function slideC() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    img1.classList.add('cancel');
    setTimeout(function () {
        softRemoveC(img1);
        img2.style.display = "block";
    }, 700);
}

function slide2V() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    img2.classList.add('validate');
    setTimeout(function () {
        softRemove2(img2);
        img3.style.display = "block";
    }, 700);
}

function slide2C() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    img2.classList.add('cancel');
    setTimeout(function () {
        softRemove2C(img2);
        img3.style.display = "block";
    }, 700);
}

function backturn() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    document.getElementById("img2").style.display = "none";
    document.getElementById("img1").style.display = "block";
}

function backturn2() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    document.getElementById("img3").style.display = "none";
    document.getElementById("img2").style.display = "block";
}





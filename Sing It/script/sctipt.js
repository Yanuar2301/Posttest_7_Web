const input = document.querySelector('.List-Nav-toggle input');
const nav = document.querySelector('.Navigator ul');

input.addEventListener('click',function(){
    nav.classList.toggle('slide');
});

function ubahheader(){
    const tukar1 = document.getElementById('Depan');
    tukar1.style.color = 'red';
    const tukar = document.getElementById('Belakang');
    tukar.style.color = 'whitesmoke';
}

function ubahheader1(){
    const tukar1 = document.getElementById('Depan');
    tukar1.style.color = 'whitesmoke';
    const tukar = document.getElementById('Belakang');
    tukar.style.color = 'red';
    
}



function activeslideimg(activeSlide = 1){
    const slide = document.querySelectorAll(".content");
    slide[activeSlide].classList.toggle("active");
}

function mode(){
    const ubah = document.body;
    ubah.classList.toggle("light")
}

function popup(){
    alert("Lagu Di Tambahkan Ke Playlist")
}

function popupdel(){
    alert("Lagu Di Hapus dari Playlist")
}
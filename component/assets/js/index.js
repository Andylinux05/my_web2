var tutup = document.querySelector('.tutup');
var informasi = document.querySelector('.informasi');
var buka = document.querySelector('.buka');

tutup.addEventListener('click', function(){
    informasi.style.display = "none";
})

buka.addEventListener("click", function(){
    informasi.style.display = "flex";
})


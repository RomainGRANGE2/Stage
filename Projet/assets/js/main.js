let urlok = document.getElementById('url-ok');
let urlnew = document.getElementById('url-new');
let urlvu = document.getElementById('url-vu');
let urlko = document.getElementById('url-ko');

urlok.addEventListener('click', event => {
    document.location.href="enregistrement.html"; 
  });

urlnew.addEventListener('click', event => {
    document.location.href="enregistrement.html"; 
});

urlvu.addEventListener('click', event => {
    document.location.href="enregistrement.html"; 
});
  
urlko.addEventListener('click', event => {
document.location.href="enregistrement.html"; 
});


let element = document.getElementById('rechechestatut');
console.log(element.clientHeight);

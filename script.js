const menuBtn = document.getElementById('menuBtn');
const nvlContainer = document.getElementById('nvlContainer');
console.log("Hello World");

menuBtn.addEventListener('click', (e) => {
  nvlContainer.classList.toggle('nvl-open');
  nvlContainer.classList.toggle('nvl-main');
});
import './scripts/test.js';
console.log('app.js is running');

const sidebarCloseButton = document.querySelector('.sidebar-close-button');
sidebarCloseButton.addEventListener('click', () => {
  document.querySelector('#sidebar-wrapper').classList.toggle('sidebar-close');
  document
    .querySelector('.sidebar-close-button-svg')
    .classList.toggle('rotate-180');
  document
    .querySelector('.admin-container')
    .classList.toggle('admin-container-sidebar-open');
});


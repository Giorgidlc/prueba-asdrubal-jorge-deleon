const title = document.getElementById('main-title');
const button = document.getElementById('change-title');

if (button && title) {
  button.addEventListener('click', () => {
    title.textContent = '¡Hola Asdrubal!';
  });
}
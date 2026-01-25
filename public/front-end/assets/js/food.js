document.querySelectorAll('.qty-controls').forEach(control => {

  const input = control.querySelector('.qty-input');
  const addBtn = control.querySelector('.add-btn');
  const subBtn = control.querySelector('.sub-btn');

  addBtn.addEventListener('click', () => {
    input.value = parseInt(input.value) +1;
  });

  subBtn.addEventListener('click', () => {
    const value = parseInt(input.value);
    if (value > 0) {
      input.value = value -1;
    }
  });
});
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.qty-controls').forEach(control => {
    const input = control.querySelector('.qty-input');
    const addBtn = control.querySelector('.add-btn');
    const subBtn = control.querySelector('.sub-btn');

    // scope foodPrice to this menu-card
    const menuCard = control.closest('.menu-card');
    const foodPrice = menuCard.querySelector('.food-price');
    const unitPrice = parseFloat(foodPrice.dataset.price);

    function updatePrice() {
      const qty = parseInt(input.value);
      foodPrice.textContent = `$${(qty * unitPrice)}`;
    }

    addBtn.addEventListener('click', () => {
      input.value = parseInt(input.value) + 1;
      updatePrice();
    });

    subBtn.addEventListener('click', () => {
      if(input.value > 0){
        input.value --;
        updatePrice();
      }
    });
  });
});
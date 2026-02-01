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


  // status buttons codes
  const buttons = document.querySelectorAll('.menu-btn a');
  const foods = document.querySelectorAll('.food-item');

  buttons.forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();

      const filter = btn.dataset.filter;

      // active state
      buttons.forEach(b => b.classList.remove('active-item'));
      btn.classList.add('active-item');

      foods.forEach(food => {
        const category = food.dataset.category;

        if (filter === 'all' || category === filter) {
          food.style.display = '';
        } else {
          food.style.display = 'none';
        }
      });
    });
  });

});
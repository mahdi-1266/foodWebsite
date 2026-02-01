document.addEventListener('DOMContentLoaded'), () => {
  let statusButtons = document.querySelectorAll('.status-btn');

  statusButtons.forEach(function(btn){
    btn.addEventListener('click', function() {
      handle(btn);
    });
  });


  function handle(btn){
    console.log('Ok');
    btn.textContent = 'Processing...';
  }
}


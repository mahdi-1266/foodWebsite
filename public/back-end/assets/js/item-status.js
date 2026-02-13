document.addEventListener('DOMContentLoaded'), () => {
  let statusButtons = document.querySelectorAll('.status-btn');

  statusButtons.forEach(function(btn){
    btn.addEventListener('click', function() {
      handle(btn);
    });
  });


  function handle(btn){
    if(btn.innerText === 'Accepte'){
      document.getElementById("status-td").innerText = btn.innerText;
        // btn.innerText = 'Accepted';
        // btn.classList.remove('btn-primary');
        // btn.classList.add('btn-success');
    }
      else if(btn.innerText === 'Accepted'){
        btn.innerText = 'Delivered';
        btn.classList.remove('btn-success');
        btn.classList.add('btn-warning');
      }
      else if(btn.innerText === 'Delivered'){
        btn.innerText = 'Cenceled';
        btn.classList.remove('btn-warning');
        btn.classList.add('btn-danger');
      }
      else if(btn.innerText === 'Cenceled'){
        btn.innerText = 'Pending';
        btn.classList.remove('btn-danger');
        btn.classList.add('btn-primary');
      }
  }
}


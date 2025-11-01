const menubtn = document.getElementById('menuopenbtn');
const mobilemenu = document.getElementById('mobilemenu');
const closebtn = document.getElementById('closebtn');

menubtn.addEventListener('click', (e) => {
  e.preventDefault();
  mobilemenu.classList.add('visible');
});

closebtn.addEventListener('click', () => {
  mobilemenu.classList.remove('visible');
});

document.querySelectorAll('.mobilenav .navlink').forEach(link => {
  link.addEventListener('click', () => {
    mobilemenu.classList.remove('visible');
  });
});

// Side filter toggle
$('#hideside').click(function(){
    $('.side').toggle();
})


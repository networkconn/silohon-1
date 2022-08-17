const silo_flex = document.getElementById('silo_flex');
const flex_close = document.getElementById('flex_close');
const header_left = document.getElementById('header_left');
header_left.addEventListener('click', function(){
    silo_flex.classList.remove('flex100');
}); flex_close.addEventListener('click', function(){
    silo_flex.classList.add('flex100');
});
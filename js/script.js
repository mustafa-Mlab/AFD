$(function() {
  $('#newsscroller').vTicker('init', {speed: 400,
    pause: 3000,
    showItems: 4,
    padding: 4});
});

$('#accordion').collapse({
  toggle: false,
  parent: false
})
$('#view').load("view.php");

$(function() {
  $('#newsscroller1').vTicker('init', {speed: 400,
    pause: 3000,
    showItems: 4,
    padding: 4});
});

$('#add_user').click (function(){
    $('#user_view').load('forms/login-form.php');
})

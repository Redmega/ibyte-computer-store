$(function() {
  $(".button-collapse").sideNav();
  var $name = $("#name");
  var $fname = $("#first_name");
  var $lname = $("#last_name");
  var $title = $("#title");
  var $email = $("#email");
  var $password = $("#password");

  $("#login").click(function(){
  	//TODO: logif for validating if fields are empty before switch
  	$name.hide();
  	$title.text("Login");
  });

  $("#signup").click(function(){
  	//TODO: logif for validating if fields are empty before switch
  	$name.show();
  	$title.text("Sign up");
  });
});

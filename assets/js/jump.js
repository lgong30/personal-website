$(document).ready(function() {
// Attach a submit handler to the form
$("#proj" ).click(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // submit
  $("#proj-ctl").submit();
  
});
$("#pub" ).click(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // submit
  $("#pub-ctl").submit();
  
  return false;
});
$("#reading" ).click(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // submit
  $("#reading-ctl").submit();
  
  return false;
});
$("#about" ).click(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // submit
  $("#about-ctl").submit();
  
  return false;
});
});

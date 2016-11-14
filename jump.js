// Attach a submit handler to the form
$("#proj" ).submit(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // Send the data using post
  var posting = $.post( "/", { next_page: "project" } );
});
$("#pub" ).submit(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // Send the data using post
  var posting = $.post( "/", { next_page: "publication" } );
});
$("#about" ).submit(function( event ) {
  // Stop form from submitting normally
  event.preventDefault();
  
  // Send the data using post
  var posting = $.post( "/", { next_page: "about" } );
});

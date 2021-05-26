//the first line of code states that the script will run only after the page has loaded 
//and the script is ready to be executed.
$(document).ready(function ()  
{
//select the close by class and apply a click even listener
  $(".close").on("click", function () 
	{
		//select the modal element by id , and apply display none when close is clicked
		//this will close the modal on click
		$("#modal").css("display", "none")
	});
  
});
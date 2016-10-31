$(document).ready(function()
{
	if ($(window).width() < 1000)
	{	
		$('.projectDescriptionSide').each(function(i, pObj)
		{
			
			$(this).attr('class', 'projectDescriptionTop');
		});
		
		$('.projectVideoSide').each(function(i, pObj)
		{			
			$(this).attr('class', 'projectVideoTop');
		});
	}	
	
	var lLoc = window.location.pathname.slice(1); //Name of the file
	
	if (lLoc == "") //If empty it's the index
		lLoc = "index.php";
	
	$('a[href = "' + lLoc + '"]').each(function(i, pObj) //Underline the current element in the nav
	{
		$(this).css('text-decoration', 'underline');
	});
});

$(window).resize(function() 
{	
	if ($(window).width() < 1000)
	{	
		$('.projectDescriptionSide').each(function(i, pObj)
		{			
			$(this).attr('class', 'projectDescriptionTop');
		});
		
		$('.projectVideoSide').each(function(i, pObj)
		{			
			$(this).attr('class', 'projectVideoTop');
		});
	}
	else
	{
		$('.projectDescriptionTop').each(function(i, pObj)
		{			
			$(this).attr('class', 'projectDescriptionSide');
		});
		
		$('.projectVideoTop').each(function(i, pObj)
		{			
			$(this).attr('class', 'projectVideoSide');
		});
	}
});
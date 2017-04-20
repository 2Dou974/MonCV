// Checks if the span is set to display block via CSS
checkIfBlock =function(target) {
    var target = $(target).css('display') == 'block';
    return target;
}

CheckDownBlock = function()
{
	if(checkIfBlock('.viewport-check .visible-md-block') ||checkIfBlock('.viewport-check .visible-lg-block'))
	{

		$(".down >.down-md").each(function()
			{
				$(".left").append($(this));
			});

	}
	else{
		$(".left >.down-md").each(function()
		{
			$(".down").append($(this));
		});
}
}

$(function()
{
	$(".home .header-hero .txtHero").fadeIn();
	 // Add some invisible elements with Bootstrap CSS visibile utility classes
$( "body" ).append( "<div style='visibility:hidden;' class='viewport-check'><span class='visible-xs-block'></span><span class='visible-sm-block'></span><span class='visible-md-block'></span><span class='visible-lg-block'></span></div>" );



CheckDownBlock();
$(window).resize(function(){CheckDownBlock();});
	});

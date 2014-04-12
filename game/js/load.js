function LoadFunctions()
{
	var content = '';
	var start = 40;
	var negative = $('#game .cadre').length;
	for (y = 0; y < 100 - negative; y++)
	{
		if (y + 1 == start)
			content += $('#game').html();
		content += "\t\t\t<div class=\"cadre\">\n";
		for (x = 0; x < 150; x++)
			content += "\t\t\t\t<div></div>\n";
		content += "\t\t\t</div>\n";
	}
	$('#game').html(content);

	$('#ctrlmap area:nth-child(1)').click(function() { alert('Up'); });
	$('#ctrlmap area:nth-child(2)').click(function() { alert('Left'); });
	$('#ctrlmap area:nth-child(3)').click(function() { alert('Right'); });
}
function Add(type, more, elem)
{
	if (more)
	{
		var val = parseInt($(elem).prev().text());
		//val = val ? val + 1 : val;
		val++;
		$(elem).prev().text(val);
	}
	else
	{
		var val = parseInt($(elem).next().text());
		val = val ? val - 1 : val;
		$(elem).next().text(val);
	}
}
(function($){ $(window).load(function(){ LoadFunctions(); }); })(jQuery);

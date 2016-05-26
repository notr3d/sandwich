var controlBtn = $('.controls__button');
controlBtn.click(function(){
	var id = $(this).attr('id').split('-');
	id = '#content-' + id[1];
	var content = $(id);
	content.addClass('content__item--visible');
	content.siblings().removeClass('content__item--visible');
	$('html, body').animate({
        scrollTop: $(id).offset().top
    }, 1000);
});

$(window).bind('mousemove', function(e){ 
	//коор центра окна
	var x0 = $(window).width()/2;
	var y0 = $(window).height()/2;
	//коор курсора
	var x = e.pageX;
	var y = e.pageY - $(window).scrollTop();
	//расст насколько курсор далеко от экрана
	var xd = x0 - x;
	var yd = y0 - y;	
	
	var item = $('.mount__item');
	$.each(item, function(i, e) {
		$(e).css('transform', 'translate3d( ' + xd / ((i+1)*35) + 'px, ' + yd / ((i+1)*10) + 'px, 0)');
	});
}); 

$(window).bind('scroll', function(e){ 
	var con = $('.mount__container');
	var item = $('.mount__item');
	var scrollTop = $(window).scrollTop(); //расст от начала стр
	var start = con.offset().top; // расстояние от начала страницы до начала элемента
	var conHeight = con.height(); //высота элемента
	var end = start + conHeight;
	var windowHeight = $(window).height(); //высота окна
	
	
	//элемент внизу и не виден
	if (scrollTop < start - windowHeight) {
		console.log('0 элемент внизу и не виден');
		item.height(50);
	};
	if (scrollTop > start - windowHeight && scrollTop < end - windowHeight) {
		console.log('1 элемент появляется');
		//item.height(75);
	};
	if (scrollTop > end - windowHeight && scrollTop < start) {
		console.log('2 элемент виден');
		item.height(100);
	};
	if (scrollTop > start && scrollTop < end) {
		console.log('3 элемент уходит');
		item.height(50);
	};
	if (scrollTop > end) {
		console.log('4 элемент сверху и не виден');
		//item.height(50);
	};	
});
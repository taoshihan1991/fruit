window.addEvent('scroll', function() {
	var floatNav = $('float_nav');
	if(window.getScrollTop()<700){
		floatNav.setStyle('display', 'none');
	}else{
		floatNav.setStyle('display', 'block');
	}
});

window.addEvent('domready', function() {
	var gotop = $('gotop');
	gotop.addEvent('click',function(e){
		new Fx.Scroll(window,{wait: false,duration: 1000}).toTop();//带缓动效果，1000=1秒
		return false;
	});
});








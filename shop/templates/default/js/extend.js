/*
扩展js文件
@author tsh
*/
$(function(){
	//详情页规格
	// 规格选择
    $('.spec-item').find('.spec-attr').each(function(){
        $(this).click(function(){
            if ($(this).hasClass('selected')) {
                return false;
            }
            $(this).parents('.spec-item').find('.spec-attr').removeClass('selected');
            $(this).addClass('selected');
            checkSpec();
        });
    });

	
    //列表页效果
    $('.ranklist li').hover(function(){
    	$('.ranklist li').removeClass('selected');
    	$(this).addClass('selected');
    });

	// 回到顶部
	$('.back_top').click(function(){
		$('html,body').animate({
			scrollTop:'0px'
		},1000);
		return false;
	});
});

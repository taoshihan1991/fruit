/* 广告图渐变 */
var index_fade = function() {  
    var fastHoverFun;  
    var hovetime=200;//无意识滑过时间  
    $$('.banner-pic img').addEvents({  
        'mouseenter': function(){       
		    var gallerys = $$(this).getParent().getParent().getParent().getElements('img');       
            var _self = this;  
            fastHoverFun = setTimeout(function(){  
                $$(gallerys).fade(0.5); //鼠标移入，除当前图片，其余全部变暗(透明度50%)  
                _self.set("tween", {  
                    duration: 400,//淡出时间  
                    transition: Fx.Transitions.Sine.easeIn  
                }).fade(1); //鼠标移入，当前图片高亮(透明度100%)  
            },hovetime);  
        },   
        'mouseleave': function(){  
            clearTimeout(fastHoverFun);  
        }  
    });  
    $$('.banner-pic img').addEvent('mouseleave', function(){   
        $$('.banner-pic img').fade(1); //鼠标移出图片区域，恢复100%  
        }  
    );  
}; 

window.addEvent('domready', function() {  
    index_fade();
	
	window.addEvent('domready', function() {  
		index_fade();  
		/*首页执行*/
		var navbar = $('nav');
		var catbox = $('category_box');
		var navbarPos = navbar.getPosition();
		var fixedStart = navbarPos.y;
		var fixnavBar = function(){
		if(getScrollTop()<700){
			catbox.style.display='none';
		}else{
			catbox.style.display='block';
		}		
		if(fixedStart<this.getScrollTop()){
		if(Browser.ie6) {
			navbar.setStyles({'width':'100%','position':'absolute','top':this.getScrollTop()})}
			else{
			navbar.addClass('navfixed').setStyles({'width':'100%'});
		}
		}else{
			if(Browser.ie6) {
			navbar.setStyles({'position':'','top':'','width':''});
		};
		navbar.removeClass('navfixed').setStyle('width','');
		}
		};
			window.addEvents({
			'resize':fixnavBar,
			'scroll':fixnavBar
		}); 	
		/*首页执行*/	
	});	

    var category_index = $('category_index');
    category_index.getElements('.category-item').addEvents({
        'mouseover':function(e){
            var self = this;
            clearTimeout(this.showTimer);
            clearTimeout(this.hideTimer);
            var active = function(){
                if(self.getElement('.cat-children-box')){
                    self.addClass('active');
                }
            }
            this.showTimer = active.delay(100);
        },
        'mouseout':function(e){
            var self = this;
            clearTimeout(this.showTimer);
            clearTimeout(this.hideTimer);
            var active = function(){
                if(self.getElement('.cat-children-box')){
                    self.removeClass('active');
                }
            }
            this.hideTimer = active.delay(100);
        }
    });    
    window.addEvent('domready',function(){
        var dcat = $$('.cat-box .category-item');
        if(dcat){
            var dpopup = dcat.getElement('.cat-children-box');
            for(i=0;i<dcat.length;i++){
                var a = dcat[i].index = i;
                var b = 72 * a;
                var c = dpopup[i].getSize().y;
                if(b<c-72){
                    dpopup[i].setStyles({
                        'top':0+'px'
                    });
                }
                else{
                    dpopup[i].setStyles({
                        'top':b-c+72+'px'
                    });
                };
            };
        }   
    });
});








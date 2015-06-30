/**
 * @Author zm && www.hnqss.cn
 * @Date 2012-11-11
 * @Description 轮播图片效果
 * @Version 2.0
 * @2012-7-27 加入左右滚动按钮的渐隐渐显效果
 * @2012-11-11 加入上下滚动效果
 * 鼠标移动到按钮上也触发了动画容器的mouseleave事件，所以采取延迟消失的策略(鼠标移动到按钮清除timer)实现，默认100毫秒，可自行配置
 * 兼容1.4.5
 */
var qfFocus = new Class({    
    Implements: [Events, Options],    
    options: {
        'step': 0,
        'duration': 500,
        'button': {
            'left': 'moveLeft',
            'right': 'moveRight',
            'delay': 100
        },
        'pagebtns': {
            'id': 'slide-number',
            'selected-class': 'active'
        },
        'periodical': 5000,
        'direction': 'horizontal'
    },
    
    initialize: function(el, options) {
        this.setOptions(options);
        this.handle = document.id(el);
        this.index = 0;
        this.bound = {
            'enter': this.enter.bind(this),
            'leave': this.leave.bind(this),
            'clear': this.clear.bind(this)
        }
        this.lock = false;
        this.lastPageBtn = null;
        this.units = ['width', 'left'];
        if (this.options.direction == 'vertical') this.units = ['height', 'top'];
        this.render();
    },
    
    init: function() {
        this.periodical = this.moveRight.periodical(this.options.periodical, this, [1]);
    },
    
    render: function() {
        var _self = this, ops = this.options, units = this.units, hd = this.handle;
        this.step = ops.step;
        this.items = hd.getElements('li');
        this.pageContainer = document.id(ops.pagebtns.id);
        this.pageBtns = this.pageContainer.getElements('a');
        
        var items = this.items;
        if (items.length != this.pageBtns.length) {
            alert("分页按钮数目和图片数目不一致，请检查！");
            return;
        }
        
		var tw = 0;
        items.each(function(item) {
            var w = item.getStyle(units[0]).toInt(); 
            (this.step == 0) && (this.step = w);
            var coor = item.getCoordinates();
            tw += coor[units[0]];
        }, this);
        this.tw = tw;
        hd.setStyle(units[0], tw);
        hd.setStyle(units[1], 0);

        this.leftBtn = document.id(ops.button.left).setStyle('opacity', 0);
        this.rightBtn = document.id(ops.button.right).setStyle('opacity', 0);
        
        this.css(0);

        hd.set('tween', {
            duration: this.options.duration,
            transition: Fx.Transitions.Sine.easeInOut,
            onComplete: function() {
                if (this.index == items.length) {
                    items[0].setStyle('position', '');
                    items[0].setStyle(units[1], '');
                    hd.setStyle(units[1], 0);
                    this.index = 0;
                }
                if (this.index == items.length - 1) {
                    items[items.length - 1].setStyle('position', '');
                    items[items.length - 1].setStyle(units[1], '');
                    hd.setStyle(units[1], this.step - this.tw);
                }
                this.lock = false;
            }.bind(this)
        });

        this.attach();
    },

    attach: function(){
        var _self = this, lBtn = this.leftBtn, rBtn = this.rightBtn, hd = this.handle;

        this.pageContainer.addEvents({
            'mouseenter': function(){
                _self.pause();
            },
            'mouseleave': function(){
                _self.restart();
            }
        });

        this.pageBtns.each(function(item, index) {
            item.addEvent('mouseenter', function(){
                _self.moveTo(index);
            });
        });
        
        lBtn.addEvent('click', function() {
            if (_self.lock) return;
            _self.moveLeft(1)
        });
        rBtn.addEvent('click', function() {
            if (_self.lock) return;
            _self.moveRight(1)
        }); 
        [lBtn, rBtn].each(function(item) {
            item.addEvent('mouseenter', this.bound.clear);
        }, this);

        hd.addEvent('mouseenter', this.bound.enter);
        hd.addEvent('mouseleave', this.bound.leave);    
    },

    pause: function(){
        if(!this.periodical) return;
        clearInterval(this.periodical);
        this.periodical = null;    
    },

    restart: function(){
        !this.periodical && this.init();   
    },
    
    clear: function() {
        clearInterval(this.timer);
    },
    
    enter: function() {
        this.pause();
        var lBtn = this.leftBtn, op = lBtn.getStyle("opacity");
        if (op == 1) return;
        this.leftBtn.get('tween').start('opacity', op, 1);
        this.rightBtn.get('tween').start('opacity', op, 1);
    },
    
    leave: function() {
        this.timer = setTimeout(function() {
            this.leftBtn.get('tween').start('opacity', 1, 0);
            this.rightBtn.get('tween').start('opacity', 1, 0);
        }.bind(this), this.options.button.delay);
        
        this.restart();
    },
    
    moveTo: function(pageIndex) {
        var index = this.index;
        if (pageIndex == index) return;

        if (pageIndex > index) this.moveRight(pageIndex - index);
        else this.moveLeft(index - pageIndex);
    },
    
    css: function(aa) {
        var selectClass = this.options['pagebtns']['selected-class'], pageBtns = this.pageBtns, lastBtn = this.lastPageBtn;
        pageBtns[aa].addClass(selectClass);
        if (lastBtn) lastBtn.removeClass(selectClass);
        this.lastPageBtn = pageBtns[aa];
    },
    
    moveRight: function(frame) {
        var units = this.units, hd = this.handle, step = this.step, items = this.items, hd = this.handle;
        this.lock = true;
        var l = hd.getStyle(units[1]).toInt();
        if (this.index == items.length - 1) {
            items[0].setStyle('position', 'relative');
            items[0].setStyle(units[1], this.tw);
        }
        this.index += frame;
        var index = this.index;
        this.css(index == items.length ? 0 : index);
        hd.get('tween').start(units[1], l,  - index * step);
    },
    
    moveLeft: function(frame) {
        var items = this.items, tw = this.tw, units = this.units, step = this.step, hd = this.handle;
        this.lock = true;
        this.index -= frame;
        var index = this.index;
        this.css(index < 0 ? items.length - 1 : index);
        if (index < 0) {
            items[items.length - 1].setStyle('position', 'relative');
            items[items.length - 1].setStyle(units[1], -tw);
            this.index = items.length - 1;
        }
        var l = hd.getStyle(units[1]).toInt();
        hd.get('tween').start(units[1], l, - index * step);
    }

});
jQuery(function($) {
		$height = $(".products-grid li .wrap-option").height();				
		$(".products-grid li").hover(function(){
			$(this).addClass('li-active');
			$wrapOption = $(this).find(".wrap-option");				
			$(this).find(".product-name").css('padding','35px 0 5px');
			$(this).find(".product-name").stop().animate({'padding': '25px 0 5px'}, 300);
			$wrapOption.stop().animate({height: '100%'}, 300);	
			$(this).find("button.btn-cart span span").fadeIn(300);
			$(this).find(".wrap-info").fadeIn(300);
			
		},function(){
			$(this).removeClass('li-active');
			$(this).find(".wrap-option").stop().animate({height: $height}, 300);			
			$(this).find(".product-name").stop().animate({'padding': '0'}, 300);			
			$(this).find(".wrap-info").stop().fadeOut(250);
			$(this).find("button.btn-cart span span").stop().delay(100).fadeOut(250);
		}); 	
		
		$(window).scroll(function() {
            if($(window).scrollTop() != 0) {
                $('.backtotop').fadeIn();
            } else {
                $('.backtotop').fadeOut();
            }
           });
	   $('.backtotop').click(function() {		
		$('html, body').animate({scrollTop:0},500);
	   });
       
		
	   $(".nav-top #nav li").hover(function(){
		
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(200); 
		},function(){ 
			$(this).find('ul:first').css({visibility: "hidden"}); 

        });
		
		/*
		$width = $(window).width();			
		if($width>=320&&$width < 480){			
			$(".respon-menu").hover(function(){						
				$("#nav").css({visibility: "visible",display: "none"}).show(50);
			},function(){ 
				$("#nav").css({visibility: "hidden"});			
			});
		}
		*/
		$(".respon-menu").hover(function(){
			$(this).find("#nav").addClass("resmenu");
			
		},function(){
			$(this).find("#nav").removeClass('resmenu');
		});
	
		
		$sidebarHeight = $("#leo-main .sidebar").height();
		$colmainHeight = $("#leo-main .col-main").height();
		if($sidebarHeight > $colmainHeight)
		{
			$("#leo-main .col-main").css('height',$sidebarHeight);
		}
		
		
		
});

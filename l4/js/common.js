$(document).ready(function() {
  var  destroy = true,
       ThrobbingBtn = $('.js-img'),
       PopupClose = $('.js-close'),
       ButtonMobyleMenu = $('.btn-mobile-menu'),
       MobyleMenuClose = $('.navbar__close'),
       MenuLink = $('.js-link'),
       Banner = $('.hurryUp'),
       BannerClose = $('.hurryUp__close'),
       BannerButton = $('.show-btn'),      
       mobileWidth = 767,

      topMenu = $("#fixed-nav"),
      topMenuItems = topMenu.find("li"),      

      navbar = $(".navbar"),
      jsNavbarPoint = $('.js-button'),      

      TopSection = $("#innovazione"),
      BottomSection = $("#innovazione-bottom"),
      windowWidth, windowHeigth,MenuHeight, jsNavbarShowTop, jsNavbarShowBottom, TopSectionPos,BottomSectionPos;
     
      
    function detectSize(){
      //windowWidth = window.innerWidth,
      //windowHeigth = window.innerHeight,
      //MenuHeight = topMenu.innerHeight(),
      //jsNavbarShowTop =jsNavbarPoint.offset().top + jsNavbarPoint.innerHeight(),  
      //jsNavbarShowBottom = jsNavbarPoint.eq(1).offset().top,
      //TopSectionPos = TopSection.offset().top + TopSection.innerHeight(),
      //BottomSectionPos = BottomSection.offset().top; 
    }

  function animateScroll(element, speed) {
    $("html, body").animate({
      scrollTop: element.offset().top}, speed);
  };

  function hideMenu() {
      navbar.removeClass("fixed");     
  };
  function showMenu() {
      navbar.addClass("fixed");
     
    };  
  function hideMenuMobyle(){      
      if(windowWidth <= mobileWidth) {
          hideMenu();
          $('body').css({'overflow' : 'visible'});
      }      
  }

  function switchMenuItems(scrolled) {
    topMenuItems.each(function() {
      var link = $(this).find("a"),
          idSection = link.attr("href"),
          sectionTop = $(idSection).offset().top ,
          sectionBottom = sectionTop + $(idSection).innerHeight();

      if(scrolled + MenuHeight >= sectionTop && scrolled + MenuHeight <= sectionBottom) {        
        $(this).addClass("js-active");        
        return;
      }
      if(scrolled + MenuHeight > sectionBottom) {
        topMenuItems.removeClass("js-active");        
      }
    });
    return;
  };

  function slideDetect() {
    if(windowWidth <= mobileWidth && destroy){
           $('.comments-list').slick({            
              infinite: true,
              dots: true,         
              slidesToScroll: 1,
              autoplaySpeed: 4000,
              autoplay: true          
            });  
             destroy = false;                
       } else if(windowWidth > mobileWidth && !destroy){
         $('.comments-list').slick('unslick');    
          destroy = true;              
    };
  };

/*******************    load   *********************/
	$('.ingredients-list').slick({
		centerMode: true,
		centerPadding: '0',
		slidesToShow: 3,
		autoplay: true,		
  		autoplaySpeed: 4000,
  		responsive: [
    	{
	      breakpoint: 767,
	      settings: {
	      	slidesToShow: 1,
	      	dots: true,
	      	enterMode: false,
	      }
	  }]
		});
  //detectSize();
  slideDetect();   
/*******************  end  load   *********************/

/*******************    resize   *********************/
   $(window).on("resize", function() {  
         // detectSize() ;          
          hideMenuMobyle();
          slideDetect(); 
     });
/*******************  end  resize   *********************/

/*******************  scroll   *********************/
  $(window).on("scroll", function() {  
     var scrolledTop = $(window).scrollTop() ,
        scrolledBottom = scrolledTop + windowHeigth;            
        if(scrolledTop >= jsNavbarShowTop) {  
            if(scrolledBottom >= jsNavbarShowBottom){
              hideMenu();           
            }else{
              showMenu();
              switchMenuItems(scrolledTop);
            }                
          } else {
            hideMenu();
          }        
    if(windowWidth > mobileWidth) { 

        if(scrolledTop + MenuHeight >= TopSectionPos && scrolledBottom < BottomSectionPos) {
              if(~Banner.attr('class').indexOf('js-fixed')){               
               BannerButton.removeClass('js-active');
              } else{
                BannerButton.addClass('js-active');
              }
           } else {
              BannerButton.removeClass('js-active');
              Banner.removeClass('js-fixed');             
        }  
        if(scrolledBottom >= BottomSectionPos){                
              Banner.appendTo(BottomSection);
        }
        if(scrolledTop <= TopSectionPos){
              Banner.appendTo(TopSection);
        } 
    }   
  });
   /******************* end scroll   *********************/

   /******************* click   *********************/
   BannerButton.on("click", function() {
      Banner.removeClass('js-hide');
      Banner.addClass('js-fixed'); 
      $(this).removeClass('js-active');    
   });

   BannerClose.on("click", function() {
      if(~Banner.attr('class').indexOf('js-fixed')){
        Banner.removeClass('js-fixed');
        BannerButton.addClass('js-active');
      }else{
        Banner.addClass('js-hide');
      }
   });

  ButtonMobyleMenu.on("click", function() {
    showMenu();
    $('body').css({'overflow' : 'hidden'});
  });

  MobyleMenuClose.on("click", function() {
     hideMenu();
  });

  MenuLink.on("click", function(e) {
      e.preventDefault();
      var id = $(this).attr("href");       
        hideMenuMobyle();       
        animateScroll($(id), 900);
        topMenuItems.removeClass('js-active');           
  });

  $('.js-to-form').on("click", function() {
      var scrolledTop = $(window).scrollTop(),
          docHeight = $(document).outerHeight(true);   
          id = $(this).attr("href");
      if(scrolledTop < (docHeight-scrolledTop))
        {
          id = id+1;
        }else{
          id = id+2;
        } 
          hideMenuMobyle();    
          animateScroll($(id), 900); 
  });   
  ThrobbingBtn.on('click', function(){ 
    $('.causes-text').addClass('text-hide');
    $('.causes-popup__block').addClass('popup-active');
    $('.btn-throbbing-shadow, .btn-throbbing-border ').addClass('no-animate');
  });
  PopupClose.on('click', function(){ 
    $('.causes-text').removeClass('text-hide');
    $('.causes-popup__block').removeClass('popup-active');
    $('.btn-throbbing-shadow, .btn-throbbing-border ').removeClass('no-animate');
  });

});

$ (function(){
        //  헤더메뉴 투뎁스
        $(".h-menu > li ").on("mouseover",function(){

            $(this).children(".depth2").stop().fadeIn();
            
        });
        $(".h-menu > li ").on("mouseleave",function(){

            $(this).children(".depth2").stop().fadeOut();
            
        });
        // 모바일메뉴
        $(".m-btn").on("click",function(){
            $(".m-h-menu-all").stop().animate({"right":"0"},300);

        });
        $(".m-header-closebtn").on("click",function(){
            $(".m-h-menu-all").stop().animate({"right":"-100%"},300);

        });
        $(".m-h-menu > li > a").on("click",function(){
            $(this).parent().siblings().children(".m-depth2").stop().slideUp();
            $(this).siblings().stop().slideToggle();

        });


        // 슬라이드 영역
        let SliderNumer = 0;
        // 슬라이드 화살표버튼
        $(".slide-arrow li:nth-child(1)").on("click",function(){
            if(SliderNumer == 0){
                SliderNumer = 3;
            }
            else{SliderNumer--;}
            SlideMove();
        });
        $(".slide-arrow li:nth-child(2)").on("click",function(){
            if(SliderNumer == 3){
                SliderNumer = 0;
            }
            else{SliderNumer++;}
            SlideMove();
        });

        // 슬라이드 순서버튼
        $(".slide-number li").on("click",function(){
            
            SliderNumer = $(this).index();
            SlideMove();
        });
        function SlideMove(){
            $(".slide-number li").removeClass("on");
            $(".slide-number li").eq(SliderNumer).addClass("on");
            $(".slideimg").stop().fadeOut();
            $(".slideimg").eq(SliderNumer).stop().fadeIn();
        }
         // 자동넘기기
        let autoSlide;
       
        autonextSlide();

        $(".slider").on("mouseenter",function(){

            $(".slide-arrow li:nth-child(1) a").stop().fadeIn().animate({"left":"9%"});
            $(".slide-arrow li:nth-child(2) a").stop().fadeIn().animate({"right":"9%"});
        });
        
        $(".slider").on("mouseleave",function(){

            $(".slide-arrow li:nth-child(1) a").stop().fadeOut().animate({"left":"8%"},);
            $(".slide-arrow li:nth-child(2) a").stop().fadeOut().animate({"right":"8%"},);
        });

        function autonextSlide(){
            autoSlide = setInterval(function(){
                if(SliderNumer == 3){
                    SliderNumer =0;
                }
                else{SliderNumer++;}
                SlideMove();
            },3000);
        }
        //버튼 누르는것과 마우스오버 때 멈추는 기능 같이넣으면 꼬일수있으니까 하나만 넣기
        $(".slide-play li:nth-child(1)").on("click",function(){
            clearInterval(autoSlide);
            $(".slide-play li:nth-child(1)").hide();
            $(".slide-play li:nth-child(2)").show();
         });

         $(".slide-play li:nth-child(2)").on("click",function(){
            autonextSlide();
            $(".slide-play li:nth-child(2)").hide();
            $(".slide-play li:nth-child(1)").show();
         });

        // 캐러셀cont3
          let movepoint = $(".carou-box").innerWidth(); //패딩으로 여백 띄워놔서 innerWidth로 잡아야함

          $(".carou-left").on("click",function(event){
              event.preventDefault();
            $(".carou-move").stop().animate({"margin-left":-movepoint *2},700,function(){               
                $(".carou-box:first-child").appendTo(".carou-view");//태그순서 보내줄곳 확실히 하자 ㅡㅡ; .
                $(".carou-box:nth-child(4) .carou-bg").removeClass("on");
                $(".carou-move").css({"margin-left":-movepoint});
                $(".carou-box:nth-child(8) .carou-bg").addClass("on");
                
            });

          });
          $(".carou-right").on("click",function(event){
             event.preventDefault();
            $(".carou-move").stop().animate({"margin-left":0},700,function(){              
                $(".carou-box:last-child").prependTo(".carou-view")
                $(".carou-box:nth-child(9) .carou-bg").removeClass("on");
                $(".carou-move").css({"margin-left":-movepoint});
                $(".carou-box:nth-child(5) .carou-bg").addClass("on");
            });
         });
            // 자동캐러셀
             let autoCarousel;
             Carouselnext();
            function Carouselnext(){
                autoCarousel = setInterval(function(){
                    $(".carou-move").stop().animate({"margin-left":0},700,function(){              
                        $(".carou-box:last-child").prependTo(".carou-view")
                        $(".carou-box:nth-child(9) .carou-bg").removeClass("on");
                        $(".carou-move").css({"margin-left":-movepoint});
                        $(".carou-box:nth-child(5) .carou-bg").addClass("on");
                    });

                },3000);
            }

            //웹브라우저 창크기 조절 시 캐러셀 가로사이즈 다시 갱신
            $(window).on("resize",function(){

                movepoint = $(".carou-box").innerWidth();
                esboxImgSize = $(".es-box img").height();
                $(".event-slider").height(esboxImgSize);
                // .event-slider의 높이값을 창크기가 변경함에따라 갱신해줄필요가있음
            });


            // cont5 장바구니 아이콘
            $(".tbox-btn").on("mouseenter",function(){
                $(this).children(".circle-ani").addClass("on");
                $(this).children(".circle-ani2").addClass("on");
            });
        
            $(".tbox-btn").on("mouseleave",function(){
                $(".circle-ani").removeClass("on");
                $(".circle-ani2").removeClass("on");
            });
            // cont5 장바구니 탭메뉴
            $(".tabmenu li").on("click",function(event){
                event.preventDefault();

               let tabNumber = $(this).index();
               $(".tabmenu li").removeClass("on");
               $(this).addClass("on");

               $(".taball .tab1").hide();
                $(".taball .tab1").eq(tabNumber).stop().fadeIn();
                
            });
            // cont6 이벤트슬라이드
        // 이벤트 슬라이드 영역
        let eventSliderN = 0;
        // 이벤트슬라이드 화살표버튼
        $(".cont6 ul li:nth-child(2)").on("click",function(event){
            event.preventDefault();
            if(eventSliderN == 0){
                eventSliderN = 2;
            }
            else{ eventSliderN --;}
            eventmove();
        });
        $(".cont6 ul li:nth-child(3)").on("click",function(event){
            event.preventDefault();
            if(eventSliderN  == 2){
                eventSliderN  = 0;
            }
            else{eventSliderN ++;}
            eventmove();
        });

        let esboxImgSize = $(".es-box img").height();

        function eventmove(){

            $(".es-box").animate({"margin-top":-esboxImgSize*eventSliderN+"px"},1000);
        }

        // 자동탭이벤트
        let autotabSlide;

        autoEventSlide();

        function autoEventSlide(){
            autotabSlide = setInterval(function(){
                if(eventSliderN == 2){
                    eventSliderN =0;
                }
                else{eventSliderN++;}
                eventmove();
            },3000);
        }
        // fixed-menu//
        $(".quick-btn").on("click",function(event){
            event.preventDefault();
            $(".quick-btn-depth2").stop().slideDown();
            $(this).hide();
            $("#x-btn").show()
            
            // $("#x-btn").animate({"transform":"rotate(180deg)"});
        });
        $("#x-btn").on("click",function(event){
            event.preventDefault();
            $(".quick-btn-depth2").stop().slideUp();

            $(this).hide();
            $(".quick-btn").show();//addClass
            // $(".fixed-menu li:nth-child(1)").animate({"transform":"rotate(180deg)"});
            // transform이랑 에니메이트 같이하면안됨...
        });
        
        // go-top/./
        $(window).on("scroll",function(){
        let windowHeight = $(window).scrollTop();
        let headerHegiht = $("#header").height();
        if (windowHeight >= headerHegiht){
        $(".go-top").stop().fadeIn();
          }
        else{$(".go-top").stop().fadeOut();}
        });
        $(".go-top").on("click",function(){
            $("html,body").stop().animate({"scrollTop":"0"},1000);
        });
});
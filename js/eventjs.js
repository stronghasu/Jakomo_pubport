$ (function(){
    $(".event li").on("click",function(event){
        event.preventDefault();

       let sub4tabNumber = $(this).index();
       $(".event li").removeClass("on");
       $(this).addClass("on");

       $(".eventimgbox").hide();
        $(".eventimgbox").eq(sub4tabNumber).stop().fadeIn();
        
    });
    
    
        
    });
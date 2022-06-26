$ (function(){
// 아이소토프
    $('.item-list').isotope({ 

        // options
        itemSelector: '.list-box',

        layoutMode: 'fitRows'

    });


    $(".item-menu li").on("click",function(event){
        event.preventDefault();
        let value =$(this).attr("data-filter");
    
        $(".item-list").isotope({
            filter:value,
            transitionDuration:500
        });

        $(".item-menu li").removeClass("on");
        $(this).addClass("on");
    });



    
});
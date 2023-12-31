$(function(){
    let currentIndex = 0;
    $(".sliderWrap").append($(".slider").first().clone(true)); //첫번째 이미지를 복사해서 마지막에 추가

    setInterval(function(){     // 3초에 한번씩 실행해라
        currentIndex++;          //현재 이미지를 1씩 증가
        $(".sliderWrap").animate({marginTop: -350 * currentIndex + "px"}, 600);
        
        if(currentIndex == 3){  //마지막 이미지가 됐을때
            setTimeout(function(){  //한번만 실행
                $(".sliderWrap").animate({marginTop:0}, 0);     //애니메이션 정지
                currentIndex = 0;       //이미지를 초기화
            }, 700);           
               
        }
    }, 3000);

    // 메뉴 
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp(200);
    });

   
    // 팝업
    $(".popup-btn").click(function(){
        $(".popup-view").show();
    });
    $(".popup-close").click(function(){
        $(".popup-view").hide();
    });
});
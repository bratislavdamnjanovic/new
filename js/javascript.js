$(".btnsignup").click(function (e) {


    e.preventDefault();


    $(".login_wrap").animate({
        opacity: 0,
    }, 600, function () {
        $(".login_wrap").css('display', 'none');
        $(".signup_wrap").css('display', 'block');
        $('.signup_wrap').animate({
            opacity: 1,
        }, 600, function () {
            
        });
    });


});
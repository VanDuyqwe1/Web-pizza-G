$(document).ready(function(){


    var dem = 0;
    var blog = 0;



    $(window).scroll(function(){

        if($(document.documentElement).scrollTop() >= 55){
            $('.type-1601').css({"position":"fixed","top":"0px","background":"#000"});

        }
        else{
            $('.type-1601').css({"position":"absolute","top":"0px","background":"none"});
        }
    })

    $('.menuiconnav').click(function(){
        setTimeout(function () {
            $('.menunav').toggleClass("activemenunav");
            $('.menuiconnav').css({"opacity":"0"});
            $('.buttonclosemenu span').css({"right":"0"});
        },400)
        $('.menumobile').css({"display":"block","left":"0"});

    });
    $('.buttonclosemenu span').click(function () {

        $('.buttonclosemenu span').css({"right":"100%"});
        $('.menunav').toggleClass("activemenunav");
        setTimeout(function () {
            $('.menumobile').css({"left":"-100%"});
            $('.menuiconnav').css({"opacity":"1"});
        },350)



    });

    $('.menumobile ul li').click(function(){
        dem++;
        $(this).toggleClass("active");
        if(dem == 1)
        {

            $(this).find('.title i').attr({"class":"fa fa-angle-up"});


        }
        if(dem == 2)
        {
            $(this).find('.title i').attr({"class":"fa fa-angle-down"});
            dem = 0;
        }


    });

    $('.menumobile ul li .context ul li').click(function(){
        blog++;
        $(this).find('.subcontext').toggleClass("activesubcontext");
        if(blog == 1)
        {

            $(this).find('.title i').css({"top":"30px"});
            $(this).find('a i').attr({"class":"fa fa-angle-up"});
        }
        else if(blog == 2)
        {
            $(this).find('a i').attr({"class":"fa fa-angle-right"});
            blog  = 0;
        }


    });

    $('.btnsearch').click(function () {
        $('.framesearch').css({"display":"block"});
    });

    $('.btnclose').click(function () {
        $('.framesearch').css({"display":"none"});
    });


});
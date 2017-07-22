var h = $(window).height();
var w = $(window).width();
var header_h = $(".page-top").height();
var containerCont = $(".container-contacts");
var nav = $(".sidebar-wrapper");

//    Initial Functions
containerCont.css("padding-top", header_h);

//Nav Width
var nav_w = nav.width();

//Sidebars
var sidCont = $("#sidebar-contacts");

//Contents
var conCont = $("#content-contacts");



$(function() {
    if(w > 768) {
        //Set Sidebar Height
        sidCont.height(h-header_h);

        //Set Content Height
        conCont.height(h-header_h - 32);

        //Set Content Width
        //conCont.width(w - nav_w - 30);
        conCont.width(w - sidCont.width() - 60 - nav_w);
    }
});


//Function for Window Resize
$(window).on('resize', function(){
    //Window Height
    h = $(window).height();
    w = $(window).width();
    nav_w = nav.width();

    if(w > 768) {
        //Set Sidebar Height
        sidCont.height(h-header_h);

        //Set Content Height
        conCont.height(h-header_h - 32);

        //Set Content Width
        //conCont.width(w - nav_w - 30);
        conCont.width(w - sidCont.width() - 60 - nav_w);
    }
});
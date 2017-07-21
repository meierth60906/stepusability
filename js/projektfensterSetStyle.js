var h = $(window).height();
var w = $(window).width();
var header_h = $(".page-top").height();
var innerbody = $(".inner-body");
var nav = $(".sidebar-wrapper");

//    Initial Functions
innerbody.css("padding-top", header_h);

//Nav Width
var nav_w = nav.width();

//Sidebars
var sidAllg = $("#sidebar-allgemein");
var sidAufg = $("#sidebar-aufgaben");
var sidUnt = $("#sidebar-unterlagen");
var sidEval = $("#sidebar-eval");

//Contents
var conAllg = $("#content-allgemein");
var conAufg = $("#content-aufgaben");
var conUnt = $("#content-unterlagen");
var conEval = $("#content-eval");



$(function() {
    if(w > 991) {
        //Set Sidebar Height
        sidAllg.height(h-header_h);
        sidAufg.height(h-header_h);
        sidUnt.height(h-header_h);
        sidEval.height(h-header_h);

        //Set Content Height
        conAllg.height(h-header_h - 32);
        conAufg.height(h-header_h - 32);
        conUnt.height(h-header_h - 32);
        conEval.height(h-header_h - 32);

        //Set Content Width
        conAllg.width(w - nav_w - 30);
        conAufg.width(w - sidAufg.width() - 60 - nav_w);
        conUnt.width(w - sidUnt.width() - 60 - nav_w);
        conEval.width(w - sidEval.width() - 30 - nav_w);
    }
});


//Function for Window Resize
$(window).on('resize', function(){
    //Window Height
    h = $(window).height();
    w = $(window).width();
    nav_w = nav.width();

    if(w > 991) {
        //Set Sidebar Height
        sidAllg.height(h - header_h);
        sidAufg.height(h - header_h);
        sidUnt.height(h - header_h);
        sidEval.height(h-header_h);

        //Set Content Height
        conAllg.height(h - header_h - 32);
        conAufg.height(h - header_h - 32);
        conUnt.height(h - header_h - 32);
        conEval.height(h - header_h - 32);

        //Set Content Width
        conAllg.width(w - nav_w - 30);
        conAufg.width(w - sidAufg.width() - 60 - nav_w);
        conUnt.width(w - sidUnt.width() - 60 - nav_w);
        conEval.width(w - sidEval.width() - 30 - nav_w);
    }
});


// Javascript to enable link to tab
var hash = document.location.hash;
if (hash) {
    $('.nav-tabs a[href="'+hash+'"]').tab('show');
}

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
    if(w > 991) {
        //Set Sidebar Height
        sidAllg.height(h - header_h);
        sidAufg.height(h - header_h);
        sidUnt.height(h - header_h);
        sidEval.height(h - header_h);

        //Set Content Height
        conAllg.height(h - header_h - 32);
        conAufg.height(h - header_h - 32);
        conUnt.height(h - header_h - 32);
        conEval.height(h - header_h - 32);

        //Set Content Width
        conAllg.width(w - nav_w - 30);
        conAufg.width(w - sidAufg.width() - 60 - nav_w);
        conUnt.width(w - sidUnt.width() - 60 - nav_w);
        conEval.width(w - sidEval.width() - 30 - nav_w);
    }
});
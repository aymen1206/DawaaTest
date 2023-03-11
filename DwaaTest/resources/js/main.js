/*global $, alert, jquery$, alert, document*/

$(document).ready(function () {

    'use strict';

    // Show Search Box
    
    $('.click-search').click(function () {

        $('.search-input').show(600);

    });

    // Hide Search Box
    
    $('.main-tabs , .main-content, .breadcomb-list, footer').click(function () {

        $('.search-input').hide(600);

    });

    // Change Border Color 

    $('.form-inp .form-control').focus(function () {

        $(this).css('border-color', '#014875');
    });

    $('.form-inp .form-control').blur(function () {

        $(this).css('border-color', '#ccc');
    });


    // Trigger Data Table Plugin

    $('#myTable , #myTable2').DataTable();

    //  SPARK LINE CHART PLUGIN

    var data = [9, 4, 8, 6, 5, 6, 4, 8, 3, 5, 9, 5];

    $('#sparkline-bars').sparkline(data, {
        height: '40px',
        width: '100%',
        type: 'bar',
        barColor: '#014875',
    });

    var data = [4, 2, 8, 2, 5, 6, 3, 8, 3, 5, 9, 5];

    $('#sparkline-bars1').sparkline(data, {
        height: '40px',
        width: '100%',
        type: 'bar',
        barColor: '#FB9678',
    });

    var data = [9, 4, 8, 6, 5, 6, 4, 8, 3, 5, 9, 5];

    $('#sparkline-bars2').sparkline(data, {
        height: '40px',
        width: '100%',
        type: 'bar',
        barColor: '#00C0C8',
    });

    var data = [2, 4, 8, 4, 5, 7, 4, 7, 5, 7, 9, 5];

    $('#sparkline-bars3').sparkline(data, {
        height: '40px',
        width: '100%',
        type: 'bar',
        barColor: '#AB8CE4',
    });

    // Visas Chart

    var data = [10, 3, 5, 4, 5, 2, 10, 1, 4, 3];

    $('#sparkline-lines').sparkline(data, {
        height: '70px',
        width: '100%',
        lineColor: '#014875',
        fillColor: '#014875',
        spotRadius: 4,
        spotColor: 'rgba(1, 72, 117, 0.81)',
        minSpotColor: '#014875',
        maxSpotColor: '#014875',
        highlightSpotColor: '#FB9678',
        highlightLineColor: '#795548',
    });

    // Trigger Tool Tip

    $('[data-toggle="tooltip"]').tooltip();

    // Trigger Count To Plugin 

    $('.timer').countTo();



    // Nice Scroll 
//
//        $("html").niceScroll({
//    
//            cursorcolor: '#74208B',
//            height: 60,
//            cursorborderradius: 0,
//            cursorwidth: 50,
//            background: 'rgba(0,0,0,.5)',
//            cursorborder: '1px solid #74208B'
//    
//        });

    // Hover Login Nav 

    //    $('.login-nav a').hover(function () {
    //       
    //      $('.login-nav a span').css({
    //        
    //          width: '100%'
    //      }); 
    //    });


});
/*!
 * Bracket Plus v1.1.0 (https://themetrace.com/bracketplus)
 * Copyright 2017-2018 ThemePixels
 * Licensed under ThemeForest License
 */

'use strict';

$(document).ready(function(){

    // This will collapsed sidebar menu on left into a mini icon menu
    $('#btnLeftMenu').on('click', function(){
        var menuText = $('.menu-item-label');

        if($('body').hasClass('collapsed-menu')) {
            $('body').removeClass('collapsed-menu');

            // show current sub menu when reverting back from collapsed menu
            $('.show-sub + .fl-menu-sub').slideDown();

            $('.fl-sideleft').one('transitionend', function(e) {
                menuText.removeClass('op-lg-0-force');
                menuText.removeClass('d-lg-none');
            });

        } else {
            $('body').addClass('collapsed-menu');

            // hide toggled sub menu
            $('.show-sub + .fl-menu-sub').slideUp();

            menuText.addClass('op-lg-0-force');
            $('.fl-sideleft').one('transitionend', function(e) {
                menuText.addClass('d-lg-none');
            });
        }
        return false;
    });


    $(document).on('mouseover', function(e){
        e.stopPropagation();

        if($('body').hasClass('collapsed-menu') && $('#btnLeftMenu').is(':visible')) {
            var targ = $(e.target).closest('.fl-sideleft').length;
            if(targ) {
                $('body').addClass('expand-menu');

                // show current shown sub menu that was hidden from collapsed
                $('.show-sub + .fl-menu-sub').slideDown();

                var menuText = $('.menu-item-label');
                menuText.removeClass('d-lg-none');
                menuText.removeClass('op-lg-0-force');

            } else {
                $('body').removeClass('expand-menu');

                // hide current shown menu
                $('.show-sub + .fl-menu-sub').slideUp();

                var menuText = $('.menu-item-label');
                menuText.addClass('op-lg-0-force');
                menuText.addClass('d-lg-none');
            }
        }
    });


    $('.fl-sideleft').on('click', '.fl-menu-link', function(){
        var nextElem = $(this).next();
        var thisLink = $(this);


        if(nextElem.hasClass('fl-menu-sub')) {

            if(nextElem.is(':visible')) {
                thisLink.removeClass('show-sub');
                nextElem.slideUp();
            } else {
                $('.fl-menu-link').each(function(){
                    $(this).removeClass('show-sub');
                });

                $('.fl-menu-sub').each(function(){
                    $(this).slideUp();
                });

                thisLink.addClass('show-sub');
                nextElem.slideDown();
            }
            return false;
        }
    });


    $('#btnLeftMenuMobile').on('click', function(){
        $('body').addClass('show-left');
        return false;
    });


    $('#btnRightMenu').on('click', function(){
        $('body').addClass('show-right');
        return false;
    });


    $(document).on('click touchstart', function(e){
        e.stopPropagation();

        // closing left sidebar
        if($('body').hasClass('show-left')) {
            var targ = $(e.target).closest('.fl-sideleft').length;
            if(!targ) {
                $('body').removeClass('show-left');
            }
        }

        // closing right sidebar
        if($('body').hasClass('show-right')) {
            var targ = $(e.target).closest('.fl-sideright').length;
            if(!targ) {
                $('body').removeClass('show-right');
            }
        }
    });

    $(document).on('click', function (e) {
        $('[data-toggle="popover"],[data-original-title]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
            }

        });
    });

    // work
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    $(document).ready(function () {
        //Pagination numbers
        $('#paginationSimpleNumbers').DataTable({
            "pagingType": "simple_numbers"
        });
    });

    $('.fc-datepicker').datepicker({
            format: 'dd-mm-yyyy',

            todayHighlight: true,
            widgetPositioning: {
                horizontal: "bottom",
                vertical: "auto"
            }
    });
});

var expired_date_start = "";
$('.datetimepicker').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        // showMeridian: 1,

    }).on('changeDate', function(ev){
        var orgDate = new Date(ev.date);
        var getDate = orgDate.getFullYear()+'-'+(orgDate.getMonth()+1)+'-'+orgDate.getDate()+" "+orgDate.getHours()+":"+orgDate.getMinutes();
        expired_date_start = getDate;

        $("expired_date").val("");
        $('#expired_date').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            startDate: expired_date_start
        });
    });

    $(".submit-form").submit(function(e){
        if( $(this).parsley().validate() ){
            $('.spinner:last').show();
            $('.submit_button').attr('disabled','disabled');
        }
    });

// JavaScript Document

// Add active class to nav based on URL

'use strict'

$(function(){
    var current = location.pathname.replace('/','');
    $('.navbar-nav li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
})

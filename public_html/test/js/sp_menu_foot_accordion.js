// JavaScript Document

$(function(){
     
$("#sidebar #sidebar-in h3").click(function(){
    $(this).next(".menu").slideToggle();
    $(this).toggleClass("open");
}); 
 
});
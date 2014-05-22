// JavaScript Document
$(document).ready(function(){

$('.modelactions').click(function(){
	$('.modelactions').removeClass('active');
	$(this).addClass('active');	

});

$('.main-navbar-li').click(function(){
	$('.main-navbar-li').removeClass('active');
	$(this).addClass('active');	

});

$('.dropdown').hover(function(){
	$(this).addClass('open');
},function(){
	$(this).removeClass('open');
});

});

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

$('.sidebar-menu').find('li').removeClass('active');
$('.sb-statistic').parent('li').addClass('active');
    console.log("ok");
	$(".viewReport").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
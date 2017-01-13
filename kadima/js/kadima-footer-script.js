//scroll js
jQuery().waypoint && jQuery("body").imagesLoaded(function () {
     jQuery(".animate_afc, .animate_afl, .animate_afr, .animate_aft, .animate_afb, .animate_wfc, .animate_hfc, .animate_rfc, .animate_rfl, .animate_rfr").waypoint(function () {
         if (!jQuery(this).hasClass("animate_start")) {
            var e = jQuery(this);
             setTimeout(function () {
                 e.addClass("animate_start")
             }, 20)
         }
    }, {
         offset: "85%",
         triggerOnce: !0
     })
 });
// photobos js
	jQuery('.kadima_photo_gallery').photobox('.photobox_a');
	// or with a fancier selector and some settings, and a callback:
	jQuery('.kadima_photo_gallery').photobox('.photobox_a:first', { thumbs:false, time:0 }, imageLoaded);
	function imageLoaded(){
		console.log('image has been loaded...');
	}
//
var $nav=jQuery('.prolist');
$nav.children('li').mouseenter(function(){
	jQuery(this).addClass("cur").siblings().removeClass("cur");
})
$nav.children('li').eq(0).mouseenter();

jQuery(function($) {
	function biankuang(i){
		$('#bk_'+i+'_1').stop(true).animate({
			height:'344px'
		},300)
		$('#bk_'+i+'_2').stop(true).delay(300).animate({
			width:'344px'
		},300)
		$('#bk_'+i+'_3').stop(true).animate({
			height:'344px'
		},300)
		$('#bk_'+i+'_4').stop(true).delay(300).animate({
			width:'344px'
		},300)
	}
	function biankuang1(i){
		$('#bk_'+i+'_1').stop(true).delay(100).animate({
			height:'0px'
		},100)
		$('#bk_'+i+'_2').stop(true).animate({
			width:'0px'
		},100)
		$('#bk_'+i+'_3').stop(true).delay(100).animate({
			height:'0px'
		},100)
		$('#bk_'+i+'_4').stop(true).animate({
			width:'0px'
		},100)
	}
	$('#bk_1').hover(
		function () {
			$('#bk_sy_1').animate({left:'141',opacity:1},300);
			biankuang(1);
		},
		function () {
            $('#bk_sy_1').animate({left:'50',opacity:0},300);
			biankuang1(1);
		}
	);
	$('#bk_2').hover(
		function () {
			$('#bk_sy_2').animate({left:'141',opacity:1},300);
			biankuang(2);
		},
		function () {
            $('#bk_sy_2').animate({left:'50',opacity:0},300);
			biankuang1(2);
		}
	);
	$('#bk_3').hover(
		function () {
			$('#bk_sy_3').animate({left:'141',opacity:1},300);
			biankuang(3);
		},
		function () {
            $('#bk_sy_3').animate({left:'50',opacity:0},300);
			biankuang1(3);
		}
	);
	$('#bk_4').hover(
		function () {
			$('#bk_sy_4').animate({left:'141',opacity:1},300);
			biankuang(4);
		},
		function () {
            $('#bk_sy_4').animate({left:'50',opacity:0},300);
			biankuang1(4);
		}
	);
	$('#bk_5').hover(
		function () {
			$('#bk_sy_5').animate({left:'141',opacity:1},300);
			biankuang(5);
		},
		function () {
            $('#bk_sy_5').animate({left:'50',opacity:0},300);
			biankuang1(5);
		}
	);
})


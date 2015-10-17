var rpath="phpui/mediaReq.php";
;(function($){
$.fn.interactArea = function(){
this.each(function(){
  var vname = "UD_"+$(this).attr("mid");
  var html;
  var up = $(this).attr("up");
  var down = $(this).attr("down");
  var rst = getCookie(vname);
  if(rst==""){
  html = "<div class='fns'><div class='fn' id='fn_updown'><div class='fn2nd' id='fn_up'><a href='javascript:void(0);'  charset='hz-4000489' title='顶:"+up+"'><em class='ico_up'></em><em class='stat' id='upVideoTimes'>"+up+"</em></a></div><div class='fn2nd' id='fn_down'><a href='javascript:void(0)' charset='hz-4000490' title='踩:"+down+"'><em class='ico_down'></em><em class='stat' id='downVideoTimes'>"+down+"</em></a></div></div>";
}else if(rst=="1"){
  html="<div class='fn fn_return' id='fn_updown' disabled='true'><span class='return'><em class='ico_up'></em><em class='stat'>已顶"+up+"　</em><em class='stat'>踩"+down+"</em></span></div>";
}else if(rst=="0"){
  html="<div class='fn fn_return' id='fn_updown' disabled='true'><span class='return'><em class='stat'>顶"+up+"　</em><em class='ico_down'></em><em class='stat'>已踩"+down+"</em></span></div>";
}
  $(this).html(html);
});
};
})(jQuery);
function getMID()//get media id current playing
{
	return $(".pxs_slider .cur").attr("mid");
}
var submitCallback = function(content,pid)
{
  if(content==""){alert("请输入评论");return;}
  $.ajax({
    type:'post',
    url:rpath,
    data:{a:'c',cont:content,pid:pid,mid:getMID(),num:fetchNum},
    success:function(data){
        $(".mediaComment #itemContainer").html(data);
        initCommentSys(0);
    }
  });
};
function setInteractArea(mid,up,down)
{
	$(".interactArea").attr('mid',mid).attr('up',up).attr('down',down).interactArea();
}
function getComment(mID,num,startPage)
{
  mid=arguments[0]?arguments[0]:getMID();
  num=arguments[1]?arguments[1]:fetchNum;
  $.ajax({
    type:'post',
    url:rpath,
    data:{a:'c',mid:mid,num:num},
    success:function(data){
        $(".mediaComment #itemContainer").html(data);
        initCommentSys(startPage);
    }
  });
}
function getUrlParam(name)
{
  var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
  var r = window.location.search.substr(1).match(reg);  //匹配目标参数
  if (r!=null) return unescape(r[2]); return null; //返回参数值
}
var perPage = 2;
var fetchNum = 10;
function initCommentSys(startPage)
{
  startPage=arguments[0]?arguments[0]:1;
  /*show comments*/
  $('#mediaComment img').each(function(){
    var path = "js/comments/img"+$(this).attr("vsrc");
    $(this).attr("src",path);
  });
  $('.mediaComment').comment({'submit':submitCallback,'headImage':'./avatar/default.gif'});

	$(".mediaComment div.holder").css("visibility","hidden");
	$(function(){
		$(".mediaComment div.holder").jPages({
			containerID : "itemContainer",
			perPage : perPage,
			endRange:0,
			startPage:startPage,
			animation:"bounceInUp"
		});
	});
	setTimeout(function(){
		if(!!$(".mediaComment .hasMore")[0])showMoreCommentPage();
		$(".mediaComment div.holder").css("visibility","visible");
	},1000);
}
function showMoreCommentPage(){
	$(".mediaComment .holder").each(function(){
		var lastPage = $(this).find("a").slice(-2,-1)
		lastPage.after("<a href=\"#\">more</a>");
		var num = lastPage.html();
		$(this).find("a").slice(-2,-1).bind("click",function(){getComment(getMID(),num*perPage+fetchNum,num)});
	});
}
var mediaListNum=20;
var perPageMedia = 4;
function getMediaList(num,scontent,startPage)
{
	num=arguments[0]?arguments[0]:mediaListNum;
	$.ajax({
		type:'post',
		url:rpath,
		data:{a:'m',scontent:scontent,num:num},
		success:function(data){
			$(".mediaList").html(data);
			initMediaList(startPage);
		}
	});
}
function showMoreMediaListPage(){
	$(".mediaList .holder").each(function(){
		var lastPage = $(this).find("a").slice(-2,-1);
		lastPage.after("<a href=\"#\">more</a>");
		var num = lastPage.html();
		$(this).find("a").slice(-2,-1).bind("click",function(){getMediaList(num*perPageMedia+mediaListNum,$("#searchbox").val(),num)});
	});
}
function initMediaList(startPage)
{
	startPage=arguments[0]?arguments[0]:1;

	$(".mediaList .v").hover(
		function(){$(this).find(".v-meta").css("z-index","3");},
		function(){$(this).find(".v-meta").css("z-index","-1");}
	);

	$(".mediaList div.holder").css("visibility","hidden");
	$(function(){
		$(".mediaList").css("display","block");
		$(".mediaList div.holder").jPages({
			containerID : "itemContainer",
			perPage : perPageMedia,
			endRange:0,
			startPage:startPage,
			animation:"bounceInUp"
		});
	});
	setTimeout(function(){if(!!$(".mediaList .hasMore")[0])
		showMoreMediaListPage();
		$(".mediaList div.holder").css("visibility","visible");
	},1000);
}
function ydy()
{
   /*up dowm event for media play*/
   $('#fn_up').live("click",function(){
    if(!navigator.cookieEnabled)return;
    var $mid=$(this).parent().parent().parent();
    var mid =$mid.attr('mid');
    $mid.attr('up',parseInt($mid.attr('up'))+1);
    setCookie("UD_"+mid,'1',1);
    setCookie('UD',mid,1);
    $.ajax({url:rpath+"?a=up",async:false});
    $mid.interactArea();
   }
  );
  $('#fn_down').live("click",function(){
    var $mid=$(this).parent().parent().parent();
    var mid =$mid.attr('mid');
    $mid.attr('down',parseInt($mid.attr('down'))+1);
    setCookie("UD_"+mid,'0',1);
    setCookie('UD',mid,1);
    $.ajax({url:rpath+"?a=down",async:false});
    $mid.interactArea();
   }
  );

//  $('form#msearch').submit(function(){return msubmit()});

  /**/
  //$('.mmore#true').live("click",function(){mshow($('.saveinfo').attr('v'),parseInt($('.saveinfo').attr('p'))+1);});
  //$('.mless#true').live("click",function(){mshow($('.saveinfo').attr('v'),parseInt($('.saveinfo').attr('p'))-1);});

  initMediaList()

  initInteractArea()

  mshow();
 
  initCommentSys();
} 
function initInteractArea()
{
	var obj = $(".pxs_slider .cur");
	setInteractArea(obj.attr('mid'),obj.attr('up'),obj.attr('down'));
}

//now only one media
function mshow(){
/*  $('.media').media({
     width:600,
     height:400,
     params:{AllowFullScreen:true}
  });*/
   /*
    $(".media").jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
               m4v:"http://player.youku.com/player.php/sid/XNTc2MzA0MDU2/v.swf",
                //m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
                ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
                webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
                poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
            });
        },
        swfPath: "./js",
        supplied: "webmv, m4v, ogv",
        size:{width:"640px",height:"360px",cssClass:"jp-vedio-360p"},
        smoothPlayBar:true,
        keyEnabled:true
    });*/
    $('.media-swf').each(function(){$(this).empty().flashembed({src:$(this).attr('href'),width:560,height:420,wmode:'opaque',allowscriptaccess:'never'})}).end();
  $('.interactArea').interactArea();
}


/*
//accordion

function mshow(v,p){
$('#mshow').html($.ajax({url:rpath+"?a=s&v="+v+"&p="+p,async:false}).response);

  $('.interactArea').interactArea();
  
  $('#accordion').easyAccordion({ 
    autoStart: false,
    slideInterval: 5000,
    slideNum:false	
  }); 

 $('.media').media({
    width:400,
    height:200,
    params:{AllowFullScreen:true}
  });
}
*/
/*
function msubmit(){
var v = $('#msearch .search').attr('value');
if(v == 'search...' || v == ''){alert("input");return false;}
mshow(v,0);
return false;
}
*/
$(document).ready(function () {
//$(window).load(function(){
  ydy();
});//end ready

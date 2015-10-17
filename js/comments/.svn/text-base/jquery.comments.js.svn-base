(function($){
$.fn.comment = function(options){
 var settings=$.extend({
  getHeadImage:function(obj){
	var imgsrc = $(obj).attr('imgsrc');return (typeof imgsrc==="undefined")?"":imgsrc;},
  submit:undefined,
  message:'赶快一吐为快吧',
  name:undefined,
  nameurl:undefined,
	headImage:""
 },options);
function showCommentContent(info)
{
  var html="<div class='commentOut'>";
  html += "<table align='left' class='tbone headImage'><tbody><tr><th><img src='"+info.imgsrc+"' onerror=\"this.src='"+settings.headImage+"'\"></th></tr></tbody></table>";
  html += '<table class="tbtwo">';
  html += '<tbody class="comment_section">';
  html += '<tr class="comment_head"><td><a href="" target="_blank">'+info.author+'</a></th></tr>';
  html += '<tr class="comment_body"><td>'+info.content+'</th></tr>';
  html += '<tr class="comment_foot"><td>';
  html += '<div class="comment_time">'+info.time+'</div>';
  html += '<a class="comment_reply">回复</a>';
  html += '</th></tr>';
  html += '<tr class="comment_add comment_unfixed" pid="'+info.pid+'"style="display:none"><td style="display:block"></td></tr>';
  html += '</tbody>';
  html += '</table></div>';
  html += '<div style="border-top:1px solid #e5e5e5"></div>';
  return html;
}
function showCommentAdd(info)
{
  var html="<div class='commentOut'>";
  html += "<table align='left' class='tbone headImage'><tr><td><img src='"+info.imgsrc+"' onerror=\"this.src='"+settings.headImage+"'\"></td></tr></table>";
  html += "<table class='tbtwo'>";
  html += '<tbody>';
  html += '<tr><td>';
  html += '<div></div>';
  html += '<div class="wordlimit"><span id="wordenter">0</span><span>/300</span></div>';
  html += '</th></tr>';
  html += '<tr class="commentTextArea"><td><textarea class="comment_input">'+info.comment+'</textarea></th></tr>';

  html += '<tr class="toolBar"><td>';
  html += '<div class="comment_emotion">';
  html += '<div class="emotionBtn"><a><span class="icon"></span><span>表情</span></a></div>';
  html += '<div class="emotionShow" style="display:none">';
  for(var i=1;i<=10;i++)
    html += '<img src="js/comments/img/blank.gif" id="em'+i+'" _val="'+i+'">';
  html += '</div></div>';
  
  html +=  '<a class="comment_submit">回复</a>';
  html +=  '<a class="comment_cancel">取消</a>';
  html +=  '</th></tr>';

  html +=  '</tbody></table></div>';
  return html;
}
$('.comment_input').die("blur focus input keydown").live("blur focus input keydown", function(event){
    var size=300;
    if(this.value == settings.message)this.value="";
    var len = this.value.length;
    if(len>=size){
      this.value=this.value.substr(0,size);
      len = size;
      $(this).closest('.comment_add').find('#wordenter').html(len);
      return false;
      //event.returnValue=false;
    }
    $(this).closest('.comment_add').find('#wordenter').html(len);
});
$('.emotionBtn').die("click").live("click",function(event){
  $(this).parent('.comment_emotion').find('.emotionShow').css("display","block");
});
$('.emotionShow img').die("click").live("click",function(event){
    var str = "[em"+$(this).attr('_val')+"]";
    var obj = $(this).closest('.comment_add').find('.comment_input')[0];
    if(obj.value == settings.message)obj.value="";
    obj.focus();
    if (document.selection) {
        var sel = document.selection.createRange();
        sel.text = str;
    } else if (typeof obj.selectionStart === 'number' && typeof obj.selectionEnd === 'number') {
        var startPos = obj.selectionStart,
            endPos = obj.selectionEnd,
            cursorPos = startPos,
            tmpStr = obj.value;
        obj.value = tmpStr.substring(0, startPos) + str + tmpStr.substring(endPos, tmpStr.length);
        cursorPos += str.length;
        obj.selectionStart = obj.selectionEnd = cursorPos;
    } else {
        obj.value += str;
    }
});
$('.comment_submit').die("click").live('click',
 function(){
   var $c = $(this).closest('.comment_add');
   var content=$c.find('.comment_input')[0].value;
   if($c.attr('class').indexOf('unfixed')!=-1)
   {
     var reg=new RegExp("//@[^]*","g");
     content = content.replace(reg,"");
   }
   var pid=$(this).closest('.comment_add').attr('pid');
   if(content == settings.message)content="";
   if(typeof settings.submit === "function")settings.submit(content,pid);
   $('.comment_cancel').click();
}
);
$('.comment_cancel').die('click').live('click',
 function(){
   var $c = $(this).closest('.comment_add');
   if($c.attr('class').indexOf('unfixed')!=-1){
     $c.css("display","none");
   }
   else{
     $(this).closest('.comment_add').find('.emotionShow').css("display","none");
     $c.find('.comment_input')[0].value=settings.message;
   }
 }
);
$('.comment_reply').die('click').live('click',
 function(){
   $('.comment_cancel').click();
   var comment = $(this).closest('.comment_section').find('.comment_body').html();
   var reg1=new RegExp("<img src=\"[^]*?img/em/(\\d+).gif\">","g");
   comment = comment.replace(reg1,"[em$1]");
   var reg2 = new RegExp("(<[^]*?>)","g")
   comment = comment.replace(reg2,"");
   comment = "//@"+$(this).closest('.comment_section').find('.comment_head').find('a').html()+":" + comment;
   var $a = $(this).closest('.comment_section').find('.comment_add');
   $a.css("display","block");
	var userHead="";
	if(typeof settings.getHeadImage === "function")userHead=settings.getHeadImage(wholeObj);
   $a.find('td').html(showCommentAdd({"comment":comment,"imgsrc":userHead}));
 }
);
var wholeObj;
 return this.each(
  function(){
	wholeObj = $(this);
	if($(this).find('.comment_fixed').length == 0)
	var userHead="";
	if(typeof settings.getHeadImage === "function")userHead=settings.getHeadImage(this);
        $(this).find(".comment_fixed").remove();
	$(this).prepend('<div class="comment_add comment_fixed" pid>'+showCommentAdd({"comment":settings.message,"imgsrc":userHead})+'</div>');
	$(this).find('li').each(function(){
		var content = $(this).html();
		var time = $(this).attr('time');
		var author = $(this).attr('author');
		var pid = $(this).attr('pid');
		var imgsrc="";
		if(typeof content === "undefined")content="";
		if(typeof time === "undefined")time="";
		if(typeof author === "undefined")author="";
		if(typeof pid === "undefined")pid=null;
		if(typeof settings.getHeadImage === "function")imgsrc=settings.getHeadImage(this);
		$(this).html(showCommentContent({'content':content,'time':time,'author':author,'pid':pid,'imgsrc':imgsrc}));
	});
  });
};
})(jQuery);


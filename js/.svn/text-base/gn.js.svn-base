$(function(){
$(".y-dialog-modal-close").click(function(){
	$(".y-dialog-modal").dialog("close");
});

$("#essay-list-pagination").jPages({
        containerID : "essay-list",
        previous: "上一页",
        next: "下一页",
        perPage: 8,
        animation: 'flipInX'
  });
$(".yiya-collector-disabled").tooltip();

$(".mainjump").mouseenter(function(){
	$(this).animate({top:"-5px"},"fast");
});

$(".mainjump").mouseleave(function(){
 $(this).animate({top:"-20px"},"fast");
});

$(".yiya-collector").mouseenter(function(){
	$(this).animate({height:"100px",bottom:"30px",lineHeight:"100px",fontSize:"16px"},"fast");
});

$(".yiya-collector").mouseleave(function(){
 $(this).animate({height:"40px",bottom:"0px",lineHeight:"40px",fontSize:"14px"},"fast");
});


$(".search-type").click(function(){
 $(".search-type").removeClass("type-selected");
 $(".search-type").data("selected","no");
 $(this).addClass("type-selected");
 $(this).data("selected","yes");
});


$("#usermenu a").mouseenter(function(){
 $(this).animate({width:'90px',left:"23px"},"fast");
});
$("#usermenu a").mouseleave(function(){
 $(this).animate({width:'126px',left:"0px"},"fast");
});
/*	var     History = window.History, // Note: We are using a capital H instead of a lower h
		State = History.getState();

     History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
          var State = History.getState(); // Note: We are using History.getState() instead of event.state
          $.ajax({
               url:State.url,
               success:function(msg){
                    $('#maincontent').fadeOut();
                    $('#maincontent').html($(msg).find('#maincontent').html());
                    $('#maincontent').fadeIn();
                    var newTitle = $(msg).filter('title').text();
                    $('title').text(newTitle);
               }
          });
     });
*/
})

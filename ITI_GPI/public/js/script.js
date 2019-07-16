$(document).ready(function(){
   $(".postContent-owner").dblclick(function(e){
       $(this).removeAttr('readonly');
   });
   $(".showing-comment-owner").dblclick(function(e){
       $(this).removeAttr('readonly');
   });
   $("#homePage").click(function(e){
       $(this).setAttribute("class","current_page");
   });
    $(".showing-comment-owner,.showing-comment-user").focus(function(e){
        $(this).css({
            "border":"1px solid #dbdbdb",

            "box-shadow":"0px 0px 3px #dbdbdb"
        });
    });
    $(".showing-comment-owner,.showing-comment-user").blur(function(e){
        $(this).css({
            "border":"none",

            "box-shadow":"none"
        });
    });

    $(".postContent-owner,.postContent-user").focus(function(e){
        $(this).css({
            "border":"1px solid #dbdbdb",

            "box-shadow":"0px 0px 3px #dbdbdb"
        });
    });
    $(".postContent-owner,.postContent-user").blur(function(e){
        $(this).css({
            "border":"none",
            "box-shadow":"none"
        });
    });

});
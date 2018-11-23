$(function(){
    setTimeout("move_bg()");

    $(".send").on("click",function(){
        $(".send").css("background-color","blue");
    });

    $(".send").on("click",function(){
        if($(".text-form1").val() == '' || $(".text-form2").val() == '' ||
            $(".text-form3").val() == '' || $(".text-form4").val() == '' ||
            $(".text-form5").val() == ''){
            window.alert("必須項目を入力してください");
        }else{
            window.alert("送信してもよろしいですか？");
        }
    });

});

function move_bg(){
    setTimeout(function(){
        $(".catchcopy").fadeIn(1000);
        setTimeout(function(){
            $(".catchcopy").fadeOut(1000);
        },5000);
    },2000);

    setTimeout(function(){
        $(".catchcopy2").fadeIn(1000);
        setTimeout(function(){
            $(".catchcopy2").fadeOut(1000);
        },5000);
    },9000);

    setTimeout("move_bg()",14000);
}

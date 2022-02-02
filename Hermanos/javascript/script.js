// function changeimg(){
//     document.getElementById("outfit").src="../images/outf.png";
// }
// function changeaga(){
//     document.getElementById("outfit").src="../images/outfit11.png";
// }

// function changeimg2(){
//     document.getElementById("trousers").src="../images/outfit.jfif";
// }
// function changeaga2(){
//     document.getElementById("trousers").src="../images/jeans.jfif";
// }




/*HEADER*/

$(function(){

    $(window).on("scroll",function(){
        var wn=$(window).scrollTop();

        if(wn>50){
            $(".myheader").css("background","rgba(255,255,255,0.6)");
            $(".myheader").css("height","100");
            $(".backg-ship").css("display","none");
        }

        else{
            $(".myheader").css("background","white");
            $(".backg-ship").css("display","block"); 
        }
    });


    /*SEE MORE*/



    $("#more").click(function(){
        $("#moreprod").show("fast");
        $("#more").css("display" ,"none");
    })



    



});






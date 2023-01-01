/*!
* Start Bootstrap - Blog Home v5.0.8 (https://startbootstrap.com/template/blog-home)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-blog-home/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
$(document).ready(function(){
    function getdate(){
           var today = new Date();
       var h = today.getHours();
       var m = today.getMinutes();
       var s = today.getSeconds();
        if(s<10){
            s = "0"+s;
        }
        if (m < 10) {
           m = "0" + m;
       }
       $("h1").text(h+" : "+m+" : "+s);
        setTimeout(function(){getdate()}, 500);
       }

   $("button").click(getdate);
});
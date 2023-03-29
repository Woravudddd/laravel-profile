<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title></title>

@include('layout.partials.header')
<style>
    body {
       
   min-height: 400px;
   margin-bottom: 100px;
   clear: both;
}
   
    .side-navbar {
  width: 250px;
  height: 100%;
  position: fixed;
  margin-left: -300px;
  background-color: #100901;
  transition: 0.5s;
  nav-index: auto;
 
}
.active-nav {
  margin-left: 0;
}

/* for main section */
.active-cont {
  margin-left: 250px;
}

#menu-btn {
  background-color: #100901;
  color: #fff;
  margin-left: -62px;
}

.media-progress ,.media-progress2 , .media-progress3 ,.media-progress4 ,.media-progress5 {
  /*BG*/
  position: relative;
  width: 100%;
  display: inline-block;
  cursor: pointer;
  height: 7px;
  background: gray;
  border: none;
  vertical-align: middle;
}

.media-progress::-webkit-progress-bar , .media-progress2::-webkit-progress-bar ,.media-progress3::-webkit-progress-bar, 
.media-progress4::-webkit-progress-bar , .media-progress5::-webkit-progress-bar{
  /*Chrome-Safari BG*/
  background: gray;
  border: none
}

.media-progress::-webkit-progress-value , .media-progress2::-webkit-progress-value , .media-progress3::-webkit-progress-value,
.media-progress4::-webkit-progress-value , .media-progress5::-webkit-progress-value{
  /*Chrome-Safari value*/
  background: #17BAB3;
  border: none
}

.media-progress::-moz-progress-bar , .media-progress2::-moz-progress-bar , .media-progress3::-moz-progress-bar ,.media-progress4::-moz-progress-bar,
.media-progress5::-moz-progress-bar   {
  /*Firefox value*/
  background: #17BAB3;
  border: none
}

.media-progress::-ms-fill , .media-progress2::-moz-progress-bar ,.media-progress3::-moz-progress-bar , .media-progress4::-moz-progress-bar,
.media-progress5::-moz-progress-bar{
  /*IE-MS value*/
  background: #17BAB3;
  border: none
}



</style>

</head>

<body>
    


@include('layout.partials.side-nav')
<main class="container mt-5 px-5 mb-5">
@yield('content')

</main>


@include('layout.partials.footer')

@include('layout.partials.footer-script')
 
</body>
</html>

<script>

var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});


$(document).ready(function() {

$(".media-progress").on("click", function(e) {
  var max = $(this).width(); //Get width element
  var pos = e.pageX - $(this).offset().left; //Position cursor
  var dual = Math.round(pos / max * 100); // Round %


  if (dual > 100) {
    var dual = 100;
  }


  $(this).val(dual);
  $("#progress-value").text(dual);
  $("#progressvalue").val(dual);
 

});

$(".media-progress2").on("click", function(e) {
  var max = $(this).width(); //Get width element
  var pos = e.pageX - $(this).offset().left; //Position cursor
  var dual = Math.round(pos / max * 100); // Round %


  if (dual > 100) {
    var dual = 100;
  }


  $(this).val(dual);
  $("#progress-value2").text(dual);
  $("#progressvalue2").val(dual);
 

});

$(".media-progress3").on("click", function(e) {
  var max = $(this).width(); //Get width element
  var pos = e.pageX - $(this).offset().left; //Position cursor
  var dual = Math.round(pos / max * 100); // Round %


  if (dual > 100) {
    var dual = 100;
  }


  $(this).val(dual);
  $("#progress-value3").text(dual);
  $("#progressvalue3").val(dual);
 

});

$(".media-progress4").on("click", function(e) {
  var max = $(this).width(); //Get width element
  var pos = e.pageX - $(this).offset().left; //Position cursor
  var dual = Math.round(pos / max * 100); // Round %


  if (dual > 100) {
    var dual = 100;
  }


  $(this).val(dual);
  $("#progress-value4").text(dual);
  $("#progressvalue4").val(dual);
 

});

$(".media-progress5").on("click", function(e) {
  var max = $(this).width(); //Get width element
  var pos = e.pageX - $(this).offset().left; //Position cursor
  var dual = Math.round(pos / max * 100); // Round %


  if (dual > 100) {
    var dual = 100;
  }


  $(this).val(dual);
  $("#progress-value5").text(dual);
  $("#progressvalue5").val(dual);
  
  console.log($("#progressvalue5").val(dual));
 

});

});


</script>
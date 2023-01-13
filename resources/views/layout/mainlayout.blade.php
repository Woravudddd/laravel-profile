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

</script>
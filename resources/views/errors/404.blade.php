<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  body, html {
    height: 100%;
    margin: 0;
  }
  .bg {
    background-image: url("{{ asset('img/404.jpg') }}");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

</head>

<body>

<div class="bg"></div>

<script> setTimeout(function () { window.location.href= "{{ URL::to('/') }}"; }, 7000); </script>

</body>
</html>

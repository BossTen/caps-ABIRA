<html>
<head>
  <link rel="stylesheet" href="css/redirect.css">
	
</head>

<body>
	
<div class="container">
  <div class="component PC"></div>
  <div class="component connection">
    <div class="dot first"></div>
    <div class="dot second"></div>
    <div class="dot third"></div>
  </div>
  <div class="component server">
    <div class="slot"></div>
    <div class="slot"></div>
    <div class="button"></div>
    <div class="button"></div>
  </div>
</div>

</body>
  <script src="js/jquery-3.3.1.js"></script>

<script>
function reconnect(){
  setTimeout(function(){
    document.querySelector('.first').classList.toggle('num-four');
    document.querySelector('.second').classList.toggle('num-zero');
    document.querySelector('.third').classList.toggle('num-three');
    document.querySelector('.container').classList.toggle('_403');
    document.querySelector('.redirect').classList.toggle('visible');
  }, 1500);
}



window.addEventListener('load', reconnect);
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "login.php";
    }, 5000);
});
</script>
</html>
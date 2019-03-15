<!DOCTYPE html>
<html>
<head>
<meta name="Home Page" content="width=device-width, initial-scale=1.0">
<!-- CSS for Home Page -->
<style>
* {
  box-sizing: border-box;
}
.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}
.right {
  background-color: lightblue;
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-top: 7px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;">

<div style="background-color:#f1f1f1;padding:15px;">
  <h1>Kelly Consulting</h1>
  <h3>Welcome to our Home Page</h3>
</div>
<!--Using the nav bar to link to main pages -->
<div style="overflow:auto">
  <div class="menu">
      <div class="menuitem"><a href="cv.html">Curriculum Vitae</a></div>
    <div class="menuitem"><a href="interests.html">Interests</a></div>
    <div class="menuitem"><a href="ConsultingServices.html">Consulting Services</a></div>
    <div class="menuitem"><a href="eBus1.php">Purchase</a></div>
    <div class="menuitem"><a href="https://github.com/BKO-118358981/phpproject.git">My Github</a></div>
    <div class="menuitem"><a href="https://bko-phpproject1.herokuapp.com/">My Heroku</a></div>
  </div>

  <div class="main">
    <h2>Knowledge is Power</h2>
    <p>I founded Kelly Consulting so that I could provide a cutting-edge consultancy service to dynamic business leaders.</p>
    <p>I pride myself on providing the client with the best information possible at an affordable price.</p>
    <p>I have included my CV which will show that I am more than capable. Feel free to also look into my personal interests.</p>
    <p>If you wish to learn more about any of the services I provide please visit the "Consulting Services" page.</p>
    <p>~ Founder, BKO</p>
    <img src="NYC.jpg" style="width:100%">
  </div>

  




</body>
</html>


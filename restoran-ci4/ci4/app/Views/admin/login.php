<html>

<head>

  <meta charset="utf-8" />
  <title>Login Admin</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
  <!--[if lt IE 9]>
        <script src="/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    /* -- import Bootstrap v3 ----------------------------- */
@import "//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css";

/* -- import Roboto Font ------------------------------ */
@import "//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";

/* -- body styles ------------------------------------- */

body {
    font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif; 
    background: #eceff6; // Light Blue 800
}

/* -- button styles ------------------------------------- */
// imported from https://codepen.io/zavoloklom/pen/Gubja

/*-- signin-card animation ---------------------------------------- */
.signin-card {
  -webkit-animation: cardEnter 0.75s ease-in-out 0.5s;
  animation: cardEnter 0.75s ease-in-out 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  opacity: 0;
}

/* -- login paper styles ------------------------------ */
.signin-card {
  max-width: 350px;
  border-radius: 2px;
  margin: 150px auto;
  padding: 20px;   
  background-color: #fff; // Blue Grey 50
  box-shadow: 0 10px 20px rgba(0, 0, 0, .19),
  0 6px 6px rgba(0, 0, 0, .23); // shadow depth 3
}

.signin-card { 
  .logo-image, h1, p {
    text-align: center;
  }    
}

/* -- font styles ------------------------------------- */
.display1 {
  font-size: 28px;
  font-weight: 100;
  line-height: 1.2;
  color: #757575;
  text-transform: inherit;
  letter-spacing: inherit;
}

.subhead {
  font-size: 16px;
  font-weight: 300;
  line-height: 1.1;
  color: #212121;
  text-transform: inherit;
  letter-spacing: inherit;
}

.btn{
    background-color: #383734;
    color:white;
}

/* card animation from Animate.css -------------------- */
@-webkit-keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    -ms-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    -ms-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes cardEnter {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    -ms-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    -ms-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
</style>

<body id="appform-page">
<div class="container">
<div id="login" class="signin-card">
  <div class="logo-image">
<!--   <img src="http://www.officialpsds.com/images/thumbs/Spiderman-Logo-psd59240.png" alt="Logo" title="Logo" width="138"> -->
  </div>
  <h1 class="display1 mb-5">Login Admin Restoran</h1>
  <p class="subhead"></p>
  <form action="<?= base_url() ?>/admin/login" method="post" class="" role="form">
    <div id="form-login-username" class="form-group">
    <label for="username" class="float-label">Email</label>
      <input id="username" class="form-control" name="email" type="text" size="18" alt="login" required />
      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      
    </div>
    <div id="form-login-password" class="form-group">
    <label for="password" class="float-label">password</label>
      <input id="passwd" class="form-control" name="password" type="password" size="18" alt="password" required>
      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      
    </div>
    <div>
      <button class="btn btn-block  ripple-effect" type="submit" name="Submit" alt="sign in">Sign in</button>  
	  </div>
    </div>
  </form>
</div>
</div>

</body>

</html>
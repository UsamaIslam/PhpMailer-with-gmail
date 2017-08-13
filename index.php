<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mafia</title>
  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js" type="text/javascript" ></script>

  
</head>
<body>
  
<div class="container">
  <div class="info">
    <h1>Contact Form</h1>
  </div>
</div>

<div class="form">
  <div class="thumbnail"><img src="logo/logo.png"/></div>
  <form class="contact-form" method="post" action="send_email.php">
    <input name="name" type="text" placeholder="Your Name"/>
    <input name="email" type="email" placeholder="Your Email"/>
    <div ng-app="myApp">
      <div ng-controller="AppCtrl" align="center">
    <textarea name="description" id="TextArea" ng-model="loremIpsum" ng-keyup="autoExpand($event)" placeholder="Describe your problem"></textarea>
      </div>
    </div>
    <button type="submit" value="done">Submit</button>
  </form>
</div>

      <div id="myModal" class="modal">
      <div class="modal-content">
      <span class="close">&times;</span>
       <p>Some text in the Modal..</p>
      </div>

</body>
</html>
  
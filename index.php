<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Environs Movement</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery-func.js"></script>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="header-left">
          <img class="logo" src="css/images/logo1.png" alt="logo">
        </div>
        <div class="header-right">
          <a id="myBtn" class="login" style="text-decoration:none;">Log in</a>

        </div>
      </div>
    </header>
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <div class="sec-Model container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
          <strong class="">Login</strong>
          <span class="close">&times;</span>
        </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered? <a href="#" class="">Register here</a>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <div class="top-wrapper">
      <div class="container">
        <div id="earth"></div>
      </div>
    </div>
    <!-- <div class="lesson-wrapper"> -->
      <!-- <div class="container-fluid" style="padding: 20px"> -->
        <!-- Big Slider -->
        <div id="big-slider" class="slider">
          <!-- Slider Holder -->
          <div class="slider-holder">
            <ul>
              <!-- Slide -->
                <li>
                  <div class="image">
                    <img style="width: 100%;height: 100%;" src="css/images/1.jpg" alt="" />
                  </div>
                </li>
                <!-- Slide -->

              <!-- Slide -->
                <li>
                  <div class="image">
                    <img src="css/images/2.jpg" alt="" />
                  </div>
                </li>
                <!-- Slide -->

              <!-- Slide -->
                <li>
                  <div class="image">
                    <img src="css/images/3.jpg" alt="" />
                  </div>
                </li>
                <!-- Slide -->
              <!-- Slide -->
                <li>
                  <div class="image">
                    <img src="css/images/4.jpg" alt="" />
                  </div>
                </li>
                <!-- Slide -->
            </ul>
          </div>
          <!-- Slider Holder -->

        </div>
        <!-- /Big Slider -->
      </div>
      <!-- </div> -->
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
        	<h2>Ready to know more about Eco-friendly inventions</h2>
          <h3>If you are ready ,Press the button below!!!!</h3>
		</div>
        <span class="btn message">Sign Up</span>
      </div>
    </div>
    <footer>
      <div class="container">
      	<img class="footer-logo" src="" alt="logo">
		<ul class="list">
			<li><a href="#">About</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
      </div>
    </footer>
  </body>
</html>

<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

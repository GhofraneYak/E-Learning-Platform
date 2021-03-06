<!DOCTYPE html>
<html lang="en">
  <head>
      <!--Bootstrap links-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <!--End bootstrap links-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />



    <title>V-Learn</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo base_url('assets/projet_platforme/css/main.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/projet_platforme/css/signupcss.css');?>" />
  </head>



  <body>

    <header>
      <a href="index.html" class="site-logo" aria-label="homepage">V-Learn</a>
      <nav class="main-nav">
        <ul class="nav__list">
          <li class="nav__list-item"><a href="index.html" class="nav__link">Home</a></li>
          <li class="nav__list-item">
            <a href="about.html" class="nav__link">About</a>
          </li>
          <li class="nav__list-item">
            <a href="contact.html" class="nav__link">Contact Us</a>
          </li>
          <li class="nav__list-item"><a href="courses.html" class="nav__link">Courses</a></li>
        </ul>
      </nav>
      <nav class="account">
        <ul class="nav__list">
          <li class="nav__list-item">          
            <a class="nav__link nav__link--btn" href="#" onclick="document.getElementById('id02').style.display='block'">Login</a>
          </li>
          <li class="nav__list-item">
            <a class="nav__link nav__link--btn nav__link--btn--highlight" href="#" onclick="document.getElementById('id01').style.display='block'">Sign Up</a>
          </li>
        </ul>
      </nav>
    </header>



    <main>
      <section class="home-intro">

<!--Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/g&f/img2.jpg');?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Power Your Education Empire</h1>
        <p>Create and Join Online Classes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/g&f/img1.jpg');?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Power Your Education Empire</h1>
        <p>Create and Join Online Classes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/images/g&f/img3.jpg');?>" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>Power Your Education Empire</h1>
        <p>Create and Join Online Classes</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
      </section>
    </main>





<!-- SIGN UP -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
  <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
      <div id="second">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Login</h1>
             </div>
          </div>
        <form action="" method="post" name="login">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
           </div>
           <div class="form-group">
              <p class="text-center">By signing up you accept our Terms Of Use</p>
            </div>
           <div class="col-md-12 text-center ">
              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
           </div>
           <br>
            <div class="form-group">
               <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
            </div>
        </form>
                 
        </div>
      </div>
 <div id="first">
       <div class="myform form ">
        <div class="logo mb-3">
             <div class="col-md-12 text-center">
               <h1 >Signup</h1>
                </div>
  </div>
  <form action="#" name="registration">
    <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
           <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
     </div>

    <div class="form-group">
        <label for="exampleInputEmail1" style="padding-right: 20px;">Nationality</label>
          <select name="nationality" id="nationality">
            <option value="tunisian">Tunisian</option>
            <option value="french">French</option>
            <option value="american">American</option>
            <option value="african">African</option>
          </select>
        </div>




    <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
         <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
         <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
        </div>
        <div class="col-md-12 text-center mb-3">
            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
          </div>
                           <div class="col-md-12 ">
                    <div class="form-group">
                        <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                    </div>
                </div>
                </div>
            </form>
            </div>
      </div>
    </div>
      </div>   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- END SIGN UP -->




<!-- SIGN IN -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
  <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
      <div id="first">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Login</h1>
             </div>
          </div>
          <form action="" method="post" name="login">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                 </div>
                 <div class="form-group">
                    <p class="text-center">By signing up you accept our Terms Of Use</p>
                 </div>
                 <div class="col-md-12 text-center ">
                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                  </div>
<br>
               </form>
                 
        </div>
      </div>
 <div id="second">
       <div class="myform form ">
        <div class="logo mb-3">
             <div class="col-md-12 text-center">
               <h1 >Signup</h1>
                </div>
  </div>
  <form action="#" name="registration">
    <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
           <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
     </div>
    <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
         <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
         <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
        </div>
        <div class="col-md-12 text-center mb-3">
            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
          </div>
                           <div class="col-md-12 ">
                    <div class="form-group">
                        <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                    </div>
                </div>
                </div>
            </form>
            </div>
      </div>
    </div>
      </div>   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- END SIGN IN -->



<div class = "container-fluid">         
         <div class = "row">
            <div class = "col-sm-4" style = "background-color:#EBECEC; color: black; text-align: center;">
                    <br><br><br>
                    <p> <span class="numbers"> 51+ </span>
                      <br>
                      Course Creators
                    </p>
                    <br><br>

                    <p> <span class="numbers"> 64+ </span>
                      <br>
                      Courses Taken
                    </p>

                    <br><br>
                    <p> <span class="numbers"> 3 </span>
                      <br>
                      Countries using V-Learn
                    </p>

                    <br><br><br>
            </div>


            <div class = "col-sm-8" style = "background-image: url(<?php echo base_url('assets/images/g&f/back1.png');?>);">
              <br><br>
              <p> 
                <div class="content">
                   Join and create your own courses 
                </div>

                <br><br><br><br>
                <div class="second-content">
                  V-Learn's powerful, all-in-one platform makes it easy
                  to LEARN, CREATE and SHARE your knowledge.
                </div>
              </p>
              <br><br>
            </div>

         </div>
</div>

<div style="font-size: 36px; text-align: center;">
  <br>
  OUR FEATURED COURSES
</div>
<br>

<div class="container" style="margin-top: 10px;">
  <div class="card-deck">

    <!-- Course 1 -->
    <div class="card" style="width:350px; margin-left: 15px;">
    <img class="card-img-top" src="<?php echo base_url('assets/images/g&f/prog.jpg');?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">C++ Programming</h4>
      <p class="card-text" style="font-size: 14px;">C++ is a popular programming language. It is used to create computer programs.</p>
      <br>
      <center>
      <a href="#" class="btn btn-primary stretched-link">See Course</a>
      </center>
    </div>
  </div>
<!-- END Course 1 -->
  
<!-- Course 2 -->
    <div class="card" style="width:350px;">
    <img class="card-img-top" src="<?php echo base_url('assets/images/g&f/python.png');?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Learn Python from Scratch</h4>
      <p class="card-text" style="font-size: 14px;">C++ is a popular programming language. It is used to create computer programs.</p>
      <br>
      <center>
      <a href="#" class="btn btn-primary stretched-link">See Course</a>
      </center>    </div>
  </div>
<!-- END Course 2 --> 

<!-- Course 3 -->
    <div class="card" style="width:350px;">
    <img class="card-img-top" src="<?php echo base_url('assets/images/g&f/web.png');?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Web Development</h4>
      <p class="card-text" style="font-size: 14px">C++ is a popular programming language. It is used to create computer programs.</p>
      <br>
      <center>
      <a href="#" class="btn btn-primary stretched-link">See Course</a>
      </center>    </div>
  </div>
<!-- END Course 3 -->
</div>


<br>
<!-- SOCIAL MEDIA -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container d-flex justify-content-center">

  <div class="social-buttons mt-5">
    <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button>
    <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>
    <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button>
    <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button>
    <button class="neo-button"><i class="fa fa-twitter fa-1x"></i> </button>

  </div>

</div>
<!-- SOCIAL MEDIA -->
<br>

<br>
<script src="<?php echo base_url('assets/projet_platforme/js/observers.js'); ?>"></script>
    <script src="<?php echo base_url('assets/projet_platforme/js/signup.js'); ?>"></script>

    
    </body>
    </html>

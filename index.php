<?php include('registration.php'); ?>
<?php include('login.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Bootstrap Theme</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
  <!-- START HERE -->
  <nav id="main-nav" class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container">
      <a href="index.html" class="navbar-brand"><i class="fas fa-briefcase"></i><strong> workify</strong></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#explore-head-section" class="nav-link">Explore</a>
          </li>
          <li class="nav-item">
            <a href="#create-head-section" class="nav-link">Create</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">Share</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--HomeSection-->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner container">
        <div class="row">
          <div class="col-lg-8 d-none d-lg-block">
            <h1 class="display-4">Build <strong>social profile</strong> <strong>now !</strong></h1>
            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, debitis eum! Mollitia dolorem asperiores explicabo?
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, debitis eum! Mollitia dolorem asperiores explicabo?
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, debitis eum! Mollitia dolorem asperiores explicabo?
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card bg-primary text-center card-form">
              <div class="card-body">
                <h3>Sign Up Today</h3>
                <p>Please fill this form to register</p>
                <form action="registration.php" method="POST">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control form-control-lg" placeholder="Confirm Password" required>
                  </div>
                  <button type="submit" value="Submit" class="btn btn-outline-light btn-block">Get Started</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--ExploreHead-->
  
  <section id="explore-head-section">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Explore</h1>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, ipsa.</p>
          <a href="#" class="btn btn-outline-secondary">Find out more</a>
        </div>
      </div>
    </div>
  </section>
  <!--ExploreSection-->
  <section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Explore & Connect</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati provident veritatis, fugit accusamus delectus veniam?</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>

          </div>
          <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
              
          </div>
            <div class="d-flex">
                <div class="p-4 align-self-start">
                  <i class="fas fa-check fa-2x"></i>
                </div>
                <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
                
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--CreateHead-->  
  <section id="create-head-section" class="bg-primary">
      <div class="container">
        <div class="row">
          <div class="col text-center py-5">
            <h1 class="display-4">Create</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, ipsa.</p>
            <a href="#" class="btn btn-outline-light">Find out more</a>
          </div>
        </div>
      </div>
    </section>
    <!--CreateSection-->
    <section id="create-section" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <img src="https://images.unsplash.com/photo-1468421870903-4df1664ac249?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80" alt="" class="img-fluid mb-3 rounded-circle">
          </div>
          <div class="col-md-6 order-1">
            <h3>Follow your passion</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati provident veritatis, fugit accusamus delectus veniam?</p>
            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
  
            </div>
            <div class="d-flex">
                <div class="p-4 align-self-start">
                  <i class="fas fa-check fa-2x"></i>
                </div>
                <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
                
            </div>
              <div class="d-flex">
                  <div class="p-4 align-self-start">
                    <i class="fas fa-check fa-2x"></i>
                  </div>
                  <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
                  
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--ShareHead-->
  
  <section id="share-head-section" class="bg-primary">
      <div class="container">
        <div class="row">
          <div class="col text-center py-5">
            <h1 class="display-4">Share</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, ipsa.</p>
            <a href="#" class="btn btn-outline-light">Find out more</a>
          </div>
        </div>
      </div>
    </section>
    <!--ShareSection-->
    <section id="share-section" class="bg-light text-muted py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid mb-3 rounded-circle">
          </div>
          <div class="col-md-6">
            <h3>Share what you create</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati provident veritatis, fugit accusamus delectus veniam?</p>
            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
  
            </div>
            <div class="d-flex">
                <div class="p-4 align-self-start">
                  <i class="fas fa-check fa-2x"></i>
                </div>
                <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
                
            </div>
              <div class="d-flex">
                  <div class="p-4 align-self-start">
                    <i class="fas fa-check fa-2x"></i>
                  </div>
                  <div class="p-4 align-self-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, asperiores!</div>
                  
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--Footer-->
    <footer id="main-footer" class="bg-dark">
      <div class="container">
        <div class="row">
          <div class="col text-center py-4">
            <h3>workify</h3>
            <p>Copyright &copy;<span id="year"></span></p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</button>
          </div>
        </div>
      </div>
    </footer>
    <!--ContactModal-->
    <div class="modal fade text-dark" id="contactModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Get in touch</h5>
            <button class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control"></textarea>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary btn-block">Submit</button>
          </div>
        </div>
      </div>
    </div>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    $('body').scrollspy({target:'#main-nav'});
    $("#main-nav a").on('click',function(event){
      if (this.hash !="") {
        event.preventDefault();
        const hash = this.hash;
        $('html,body ').animate({
          scrollTop:$(hash).offset().top
        },800, function() {
          window.location.hash=hash;
        });
      }
    });
  </script>
</body>

</html>
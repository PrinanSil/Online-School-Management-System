<?php include("header.php") ?>
<!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top navbar-inverse">
        <a class="navbar-brand" href="#">OSMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#home">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>            
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fa-solid fa-gear"></i>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
                <i class="fa-solid fa-headset"></i>
            </a>
            </li>
            <li class="nav-item dropdown">
            <?php if (isset($_SESSION['login'])) { ?>
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user mr-2"></i>Account
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Support</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
            <?php } else { ?>
                <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i> login</a>
            <?php } ?>
            </li>
        </ul>
        </div>
    </nav>
<!--/.Navbar -->

<!-- Intro -->
    <div class="d-flex shadow" style="height:500px;background:linear-gradient(-45deg, rgb(67, 122, 234) 48%, transparent 55%)">
        <div class="container-fluid my-auto">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-3 font-weight-bold ml-5" id="home">School Management System</h1>
                    <p class="ml-5">Into the Next Level of Learning and Education....</p>
                    <a href="" class="btn btn-primary ml-5">Call for Service</a>
                </div>
                <div class="col-lg-6 ">
                    <div class="w-50 mx-auto card shadow-lg">
                        <div class="card-body shadow-lg">
                            <h3>Inquiry Form</h3>
                            <form action="" method="post" class="">
                                <div class="form-floating mb-3">
                                    <input type="text" id="name" class="form-control" placeholder="name" style="height:60px">
                                    <label class="form-label " for="form1">Your Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" id="email" class="form-control" placeholder="email" style="height:60px">
                                    <label class="form-label " for="form1">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="ph" class="form-control" placeholder="ph" style="height:60px">
                                    <label class="form-label " for="form1">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="enquiry" class="form-control" placeholder="enquiry" style="height:100px">
                                    <label class="form-label" for="form1">Query</label>
                                </div>
                                <button class="btn btn-block btn-primary" id="save">Submit Form</button>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
<!--/Intro -->

<!-- About -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5 ">
                    <h2 class="font-weight-bold" id="about">About <br> School Management System</h2>
                    <div class="pr-5">
                        <p>A School Management Software is a tool to manage all the educational and administrative tasks without any hassle. It enables schools to digitally manage and monitor daily school activities on a single platform.This software can automate and optimize teacher workload, helps schools to simplify enrollment processing, and enables teachers to monitor student's academic progress.</p>
                        <p>OSMS is a complete and feature-rich school management software for all educational institutes. This school management software is for learning, administration, and management activities in schools, colleges, universities, tuition centers, or training centers. Our free school management system manages everything starting from admission to attendance and exams to result in cards.</p>
                    </div>
                    <a href="about-us.php" class="btn btn-secondary">Know More</a>
                </div>
                <div class="col-lg-6 rounded shadow-lg" style="background:url(./assets/images/img.jpg) center/cover no-repeat">
                </div>
            </div>
        </div>
    </section>
<!--/About -->

<!-- At a Glance -->
    <section class="py-5 bg-light">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold" id="features">Smart Class Management Software</h2>
            <p> At a Glance Into the Modern Era of Learning and Eduction....</p>
        </div>

        <div class="container text-center">
            <div class="row ">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Attendence
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Registration
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Classroom
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Examination
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Accounting
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Administration
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Lesson
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Schedule
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Assignment
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                               Smart Interaction
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Finances
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./assets/images/img.jpg" alt="" class="img-fluid rounded-top">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Smart Education
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--/At a Glance -->

<!--Testimonials-->
    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="font-weight-bold" id="testimonials">What People Says</h2>
            <p class="text-muted">Experiences of people with our modern School Management Application</p>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-4">
                <div class="border rounded position-relative">
                    <div class="p-3 text-center">
                    Its is a very efficient app to monitor our daily progress in academics and carry out day to day activities from exams to attendence to Assignments and submissions. The software also provides with lots of features to cater to the need of every Student.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="opacity:.2; top: 0.5rem; left: 0.5rem;"></i>
                </div>
                <div class="text-center mt-n2">
                    <img src="./assets/images/avatar.webp" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Srimonti</h6>
                    <p><i>Head Girl</i></p>
                </div>
            </div>
            <div class="col-4">
                <div class="border rounded position-relative">
                    <div class="p-3 text-center">
                    Its is a very efficient app to monitor our daily progress in Academics and carry out day to day Administrative and Accounting activities . The software also provides with lots of features to cater to the need of every Staff. A very user-friendly software Altogether.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="opacity:.2; top: 0.5rem; left: 0.5rem;"></i>
                </div>
                <div class="text-center mt-n2">
                    <img src="./assets/images/avatar.webp" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Shubhadeep</h6>
                    <p><i>Senior Teacher</i></p>
                </div>
            </div>
            <div class="col-4">
                <div class="border rounded position-relative">
                    <div class="p-3 text-center">
                    Its is a very efficient app to monitor our daily progress in academics and carry out day to day activities from exams to attendence to Assignments and submissions. The software also provides with lots of features to cater to the need of every Student.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="opacity:.2; top: 0.5rem; left: 0.5rem;"></i>
                </div>
                <div class="text-center mt-n2">
                    <img src="./assets/images/avatar.webp" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Swabarna</h6>
                    <p><i>Student</i></p>
                </div>
            </div>
            </div>
        </div>
    </section>
<!--/Testimonials-->
   
<!--Footer -->
    <footer style="background:url(./assets/images/img.jpg) center/cover no-repeat">
        <div class="py-5 text-white" style="background:#000000bb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Useful Links</h5>
                        <ul class="fa-ul ml-4">
                            <li><a href="#home" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
                            <li><a href="#about" class="text-light"><i class="fa-li fa fa-angle-right"></i>About</a></li>
                            <li><a href="#features" class="text-light"><i class="fa-li fa fa-angle-right"></i>Features</a></li>
                            <li><a href="#testimonials" class="text-light"><i class="fa-li fa fa-angle-right"></i>Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5>Social Presences</h5>
                        <div>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-behance fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5>Subscribe Service</h5>
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control bg-transparent" placeholder="Test" id="email2">
                                <label class="form-label text-white" for="email2">Email</label>
                            </div>
                            <button class="btn btn-block btn-secondary" id="save2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>    
<!--/Footer-->


<!--Credits-->
<section class="py-2 bg-dark text-white text-center">
        <div class="container-fluid">
            A Website By Prinan Sil
        </div>
    </section>
<!--/Credits-->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
<script type="module">    
        // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyD4dlgT0C5wpmROgsJ9GTDDhYZTG17SvAY",
        authDomain: "school-management-db.firebaseapp.com",
        databaseURL: "https://school-management-db-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "school-management-db",
        storageBucket: "school-management-db.appspot.com",
        messagingSenderId: "1018594914503",
        appId: "1:1018594914503:web:9aa7786d15f3ac66668ee2"
    };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);  
      import{getDatabase, set, get, update, remove,ref, child}
      from "https://www.gstatic.com/firebasejs/9.14.0/firebase-database.js";
      const db = getDatabase();
      var name = document.querySelector("#name");
      var save = document.querySelector("#save");
      var save2 = document.querySelector("#save2");
      var email = document.querySelector("#email");
      var email2 = document.querySelector("#email2");
      var ph = document.querySelector("#ph");
      var enquiry = document.querySelector("#enquiry");
      var c=1;
      const Insertdata = e =>{
          e.preventDefault();         
          set(ref(db,"Enquiry/" + name.value),{
              Name: name.value.trim(),
              Email: email.value.trim(),
              Number: ph.value.trim(),
              Enquiry: enquiry.value.trim()
          })
  
          .then(()=>{
              alert("Enquiry Submitted Succesfully. Please be patient till we address your concern.")      
          })

          .catch((error)=>{
              alert(error)
          })
      }
      save.addEventListener('click',Insertdata);
      const Insertdata1 = a =>{
          a.preventDefault();         
          set(ref(db,"Email/" + c++),{              
              Email: email2.value.trim()
              
          })
  
          .then(()=>{
              alert("Email Submitted Succesfully. We will contact u soon..")      
          })

          .catch((error)=>{
              alert(error)
          })
      }
      save2.addEventListener('click',Insertdata1);
</script>
</html>

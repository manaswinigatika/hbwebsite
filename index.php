<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guna Green Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        body*{
            font-family: 'Poppins', sans-serif;
            }

        .h_font{
            font-family: 'Merienda', cursive;
        }

       
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

       
        input[type=number] {
        -moz-appearance: textfield;
        }

        .custom-bg{
            background-color: #2ec1ac;

        }
        .custom-bg:hover{
            background-color: #279e8c;

        }

        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form{
            margin-top: 25px;
            padding: 0 35px;
           
        }

            
        }


    </style>

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid px-lg-4 mt-4">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">గుణ</a>
        <button class="navbar-toggler shadow-none" type="button " data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
            </li>
            
            
           
        </ul>
        <div class="d-flex">
            
           
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
            </button>
        </div>
        </div>
    </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form>

        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
             <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none" id="exampleInputEmail1" >
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <div class="mb-4">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none" id="exampleInputEmail1" >
                </div>

                <div class="d-flex align-iems-center justify-content-between mb-2">
                    <button type="submit" class="btn btn-dark shadow-none"> LOGIN </button>
                    <a href= "javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                </div>


                  
                </div>
               
        </form>
                </div>
            </div>
       </div>

       <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                        User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Details must match any government ID (Aadhar, Passport, Driving Licence, PAN Card, etc.). One of these documents will be required at check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none" id="exampleInputEmail1">
                            </div>
                            <div class="text-center my-1">
                                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- carousel -->
    
<div class="container-fluid px-lg-4 mt-4">

    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.jpeg" class="w-50  d-block"/>

          </div>

          <div class="swiper-slide">
            <img src="images/carousel/2.jpeg" class="w-50  d-block" />
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/3.jpeg" class="w-50  d-block" />
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/4.jpeg" class="w-50  d-block" />
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/5.jpeg" class="w-50  d-block" />
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/6.jpeg" class="w-50  d-block" />
          </div>
          
        </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
     </div>
  </div>

<!-- check availability form -->
  <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form action>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none" id="exampleInputEmail1">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none" id="exampleInputEmail1">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                         
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none" aria-label="Default select example">
                            
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white btn-primary shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

  </div>

<!-- Our Rooms-->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS</h2>
 <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">గులాబీ/Rose</h5>
                    <h6 class="mb-4">₹4200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Pool view</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Seating Area</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    </div>
                    <div class="ratings mb-4">
                        <h6 class="mb-1">Ratings</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">జాజిమల్లి/Jasmine</h5>
                    <h6 class="mb-4">₹4200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Pool view</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Seating Area</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    </div>
                    <div class="ratings mb-4">
                        <h6 class="mb-1">Ratings</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">తులిప్/Tulip</h5>
                    <h6 class="mb-4">₹4200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 beds</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Pool view</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Seating Area</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    </div>
                    <div class="ratings mb-4">
                        <h6 class="mb-1">Ratings</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
</div>
<!-- our facilities-->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR FACILITIES</h2>  
 <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.jpeg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/2.png" width="80px">
            <h5 class="mt-3">Swimming Pool</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/3.png" width="80px">
            <h5 class="mt-3">Indoor/outdoor games</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/4.png" width="80px">
            <h5 class="mt-3">Kids’ Play Area</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/5.png" width="80px">
            <h5 class="mt-3">Live Music</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>

        </div>
    </div>
 </div>
 <!-- Testimonials -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>  
 <div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-iems-center mb-3 ">
                <img src="images/testimonials/1.jpg" width="30px">
                <h6 m-0 ms-2>Suma</h6>
            </div>
            <p>Beautiful place with friendly staff and a great infinity pool.
                The rooms are spacious and clean,The food is delicious.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            
          </div>

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-iems-center mb-3 ">
                <img src="images/testimonials/2.jpg" width="30px">
                <h6 m-0 ms-2>Indira Gandhi</h6>
            </div>
            <p>Beautiful place with friendly staff and a great infinity pool.
                The rooms are spacious and clean,The food is delicious.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-iems-center mb-3 ">
                <img src="images/testimonials/3.jpg" width="30px">
                <h6 m-0 ms-2>Nag Ashwin</h6>
            </div>
            <p>Beautiful place with friendly staff and a great infinity pool.
                The rooms are spacious and clean,The food is delicious.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-iems-center mb-3 ">
                <img src="images/testimonials/4.jpg" width="30px">
                <h6 m-0 ms-2>Dhru Rathe</h6>
            </div>
            <p>Beautiful place with friendly staff and a great infinity pool.
                The rooms are spacious and clean,The food is delicious.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            
          </div>
          


          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    
 </div>
 <div class="col-lg-12 text-center mt-5">
    <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
</div>
  <!-- Reach us-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>  
  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d512.2607527264803!2d78.22833133425097!3d17.362447321240445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDIxJzQ0LjIiTiA3OMKwMTMnNDIuOCJF!5e1!3m2!1sen!2sin!4v1721907372067!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-lg-4 col-md-4 p-4 rounded mb-4 ">
            <div class="bg-white">
              <h5>Contact:</h5>
                <a href="tel: +91987654321" class="d-inline-block mb-2 text-decoration-none text-dark">
                 <i class="bi bi-telephone-fill"></i> +91987654321
                </a>
                <br>
                <a href="tel: +91987654321" class="d-inline-block mb-2 text-decoration-none text-dark">
                 <i class="bi bi-telephone-fill"></i> +91987654321
                </a>
            </div>
            <br>
            <div class="bg-white">
                <h5>Follow us:</h5>
                  <a href="#" class="d-inline-block mb-3">
                   <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram"></i> Instagram
                   </span>
                  </a>
                  <br>
                  
                  <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                     <i class="bi bi-twitter-x"></i> Twitter
                    </span>
                   </a>
                   
                   <br>
                   <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                     <i class="bi bi-facebook"></i> Facebook
                    </span>
                   </a>
                   
              </div>

        </div>
    </div>
  </div>
  <div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">GUNA GREEN FARM</h3>
            <p>Experience Tranquility and Nature's Embrace at GUNA Green Farm Stay</p>

        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3 text-dark">Links</h5>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Home</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Rooms</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Facilities</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">Contact us</a><br>
            <a href="#" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>


        </div> 
        <div class="col-lg-4 p-4">
            
            <h5 class="mb-3">Follow us</h5>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-facebook"></i> Facebook</a>
            <br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-facebook"></i> Instagram</a>
            <br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-facebook"></i> Twitter</a>
            <br>


        </div>
    </div>

  </div>
  
  <h6 class="text-center bg-dark text-white p-3 m-0">This site is managed by Guna Green Farm. © 2024 Guna Green Farm. All Rights Reserved.</h6>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
     
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      
      slidesPerView: "auto",
      slidesPerView:"3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
      }
    });
</script>
</body>
</html>
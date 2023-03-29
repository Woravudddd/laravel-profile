@extends('layout.mainlayout')

@section('content')
<div class="bg-light p-5 rounded">
        @auth


        <h1>Wellcome {{ Auth::user()->username }}</h1>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body p-5">
        <h4 class="card-title text-center">User</h4>
        <p class="card-text text-center  ">{{ $user }}</p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-4 ">
    <div class="card ">
      <div class="card-body p-5" >
        <h4 class="card-title text-center">Profile</h4>
        <p class="card-text text-center ">{{ $profilecard }}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body p-5 ">
        <h4 class="card-title text-center">Product</h4>
        <p class="card-text text-center ">300</p>
   
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
  
</div>
        @endauth


        @guest
        <h1 class="text-center">Homepage</h1>
         <section>
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1517329782449-810562a4ec2f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block  w-100" height="500" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block w-100" height="500" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block w-100" height="500" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
         </section>
         <br>
         <hr>
         <br>
         <section>
            <h1 class="text-center" >About Thai-JOB-RQ</h1>

            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
  <div class="col">
    <div class="card h-100">
    <i class="bi-gem fs-1 text-primary text-center"></i>
      <div class="card-body text-center">
        <h5 class="card-title">Free Create</h5>
        <p class="card-text"> Our Profile are updated for free</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <i class="bi-laptop fs-1 text-primary text-center"></i>
      <div class="card-body text-center">
        <h5 class="card-title">Up to Date</h5>
        <p class="card-text">All dependencies are kept current to keep things fresh.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <i class="bi-globe fs-1 text-primary text-center"></i>
      <div class="card-body text-center">
        <h5 class="card-title">Ready to Publish</h5>
        <p class="card-text">You can use this design as is, or you can make changes!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
</div>

         </section>
         <br>
         <hr>
         <br>
         <section>
         <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider">
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" data-sb-can-submit="no">
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" data-sb-can-submit="no">
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
         </section>
        @endguest
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script type="text/javascript">
     var year = <?php echo $year; ?>;
    var users = <?php echo $user; ?>;
     
  

    var barChartData = {
        labels: year,
        datasets: [{
            label: 'User',
            backgroundColor: "pink",
            data: users
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
        });
    };
</script>
@endsection

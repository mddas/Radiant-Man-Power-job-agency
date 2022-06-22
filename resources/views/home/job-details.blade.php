@extends("layouts.master")
@section("job-details")
@include("home.header")
    <!-- Page Content -->
    
    <div class="page-heading about-heading header-text" style="background-image: url(/images/job_image/{{$jobs->company_image}});">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
               
              <h4>{{$jobs->name}} Job </h4>
              <h2>{{$jobs->company_name}} </h2>
              @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8">
              <p class="lead">
                   <i class="fa fa-map-marker"></i> {{$jobs->country}} &nbsp;&nbsp;
                   <i class="fa fa-calendar"></i> {{$jobs->updated_at}} &nbsp;&nbsp;
                   <i class="fa fa-file"></i> Contract
              </p>

              <br>
              <br>
              
              <div class="form-group">
                <h5>{{$jobs->name}}</h5>
              </div>

              <p>{{$jobs->job_description}}</p>

              <br>
          </div>

          <div class="col-md-3 col-sm-4">
            <!-- <form action="/apply" method="get"> -->
            <div class="contact-form">
              <div class="form-group">
                <!-- <input type = "hidden" name = "job_id" value="$jobs->id"> -->
                <button class="filled-button btn-block" data-toggle="modal" data-target="#exampleModal">Apply for this job</button>
              </div>
            </div>
        <!--  -->

            <div>
              <img src="/images/job_image/{{$jobs->job_image}}" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <ul class="social-icons text-center">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>

            <br>
            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-heading">
              <h2>About {{$jobs->company_name}}</h2>
            </div>

            <p class="lead">
                   <i class="fa fa-map-marker"></i> {{$jobs->country}} 
              </p>

            <p>Job Description</p>
            <p>job Title:{{$jobs->name}}</p>
            <p>Salary per month Rs. {{$jobs->salary}}</p>
            <p>qualification: {{$jobs->qualification}}</p>
            <p>country:{{$jobs->country}}</p>
            <p>Total vacency: {{$jobs->number_of_required_post}}</p>
            <p>{{$jobs->job_description}}</p>
          </div>

          <div class="col-md-3">
            <div class="section-heading">
              <h2>Contact Details</h2>
            </div>
            
            <div class="left-content">
              <p>
                <span>Name</span>

                <br>

                <strong>John Smith</strong>
              </p>

              <p>
                <span>Phone</span>

                <br>
                
                <strong>
                  <a href="tel:123-456-789">123-456-789</a>
                </strong>
              </p>

              <p>
                <span>Mobile phone</span>

                <br>
                
                <strong>
                  <a href="tel:456789123">456789123</a>
                </strong>
              </p>

              <p>
                <span>Email</span>

                <br>
                
                <strong>
                  <a href="mailto:john@carsales.com">john@carsales.com</a>
                </strong>
              </p>

              <p>
                <span>Website</span>

                <br>
                
                <strong>
                  <a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a>
                </strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply Job</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/apply" method="get">
          <div class="modal-body">
            <div class="contact-form">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="number" placeholder="Mobile Number" >
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="email" placeholder="Email address" >
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="address" placeholder="Your address" >
                            <input type="hidden" class="form-control" name="job_id" value="{{$jobs->id}}">
                            
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" name="bio" placeholder="Bio" >

              
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Apply</button>
          </div>
      </form>

        </div>
      </div>
    </div>
      <script>
        function modal(){
          alert("click")
          $('#exampleModal').on('shown.bs.modal', function () {
              $('#myInput').trigger('focus')
            })
          }
      </script>

    @endsection

@extends("layouts.master");

@section("about-us")
    @include("home.header")
    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>{{$abouts->title}}</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <!----assets/images/about-1-570x350.jpg--->
              <img src="/images/about/{{$abouts->image}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>{{$abouts->title}}</h4>
              <p>{{$abouts->contents}}</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>{{$abouts->title}}</h2>
            </div>

            <h5>Fearures</h5>
            {{$abouts->feature}}
            <br><br>
          </div>
        </div>
      </div>
    </div>
  @endsection

    

  
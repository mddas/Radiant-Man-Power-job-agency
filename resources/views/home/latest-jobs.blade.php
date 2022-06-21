<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Jobs</h2>
              <a href="jobs.html">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <!---job start--->
          @foreach($jobs as $job)
          <div class="col-md-4">
            <div class="product-item">
             <!--- assets/images/product-1-370x270.jpg--->
              <a href="job-details.html"><img src="/job_image/{{$job->job_image}}" alt="" height=230px width=200px></a>
              <div class="down-content">
                <a href="job-details.html"><h4>{{$job->name}}</h4></a>

                <h6>${{$job->salary}} Per month</h6>

                <h4><small><i class="fa fa-briefcase"></i><!---job category / subcategory---> {{$job->job_description}} <br> <strong><i class="fa fa-building"></i> {{$job->company_name}}</strong></small></h4>

                <small>
                     <strong title="Posted on"><i class="fa fa-calendar"></i>{{$job->updated_at}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Type"><i class="fa fa-file"></i> Contract</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Location"><i class="fa fa-map-marker"></i> {{$job->country}}</strong>
                </small>
              </div>
            </div>
          </div>
          @endforeach
          <!----job end--->
        </div>
      </div>
    </div>
@extends("layouts.dashboard_master")
@section("content")
    @include("dashboard.sidemenu")
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar.blade.php --->
        @include('dashboard.navbar')
        <!--container.blade.php---->   
        
        <a href="/admin/form-job" style="float:right"  >
            <img src="/images/add.jpg" width="90px" height="90px" data-toggle="modal" data-target="#categoryform_modal">
        </a>

         <div class="card-body px-0 pb-2" style="margin-top:50px;">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Company name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Job Title</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salary</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Minimum Qualification</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Country</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total vacency</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Job Category</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subcategory</th>
                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
        
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($jobs as $job)
                    <!---table row---->
                    <tr id="{{$job['id']}}">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../dashboard_assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$job->company_name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->name}}</span>
                      </td>
                      <td>
                           <img src="/images/job_image/{{$job->job_image}}" width=50px height=50pxs>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->salary}}</span>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->qualification}}</span>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->country}}</span>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{substr($job->job_description, 0, 100)}}</span>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->number_of_required_post}}</span>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->category_id}}</span>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">{{$job->subcategory_id}}</span>
                      </td>
                      
                      <td class="align-middle text-center text-sm">
                          <div class="btn-group" style="position:static;">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><button class="dropdown-item" onclick="deLete('{{$job['id']}}','/admin/delete-job')" data="/admin/delete-subcategory?id=$subcategory['id']s">Delete</a></li>
                                    <!---<li><a class="dropdown-item" href="#">Something else here</a></li>--->
                                </ul>
                         </div>
                        
                      </td>
                   
                    </tr>
                    @endforeach
                    <!--table row closed---->
                  </tbody>
                </table>
              </div>
            </div>      
    </main>
    <!-- Modal --->
<div class="modal fade" id="categoryform_modal_disabled" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/add-subcategory" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col">
               <input type="text" name="name" class="form-control" placeholder="Category Name">
            </div>
            <div class="col">
                <input type="file" name="image" class="form-control" >
            </div>
      </div>
        <div class="row" style="margin-top:30px;">
            <div class="col">
              <select class="form-select" aria-label="Default select example" name="category_id">
                <option value="$category->id">category->name</option>
              </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
     </form>
    </div>
  </div>
</div>

        <!---modal closed----->
@endsection

@extends("layouts.dashboard_master")
@section("content")
    @include("dashboard.sidemenu")
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar.blade.php --->
        @include('dashboard.navbar')
        <!--container.blade.php---->   

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(Session::has('message'))
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '{{Session::get('message')}}',
                    showConfirmButton: false,
                    timer: 1500
                    })
            </script>
        @endif
        
        <a href="#" style="float:right"  >
            <img src="/images/add.jpg" width="90px" height="90px" data-toggle="modal" data-target="#categoryform_modal">
        </a>

         <div class="card-body px-0 pb-2" style="margin-top:50px;">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sub category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
        
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $cantact)
                    <!---table row---->
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../dashboard_assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{category->name</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                            <span class="text-xs font-weight-bold">Null</span>
                          <!----
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../dashboard_assets/img/team-1.jpg" alt="team1">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../dashboard_assets/img/team-2.jpg" alt="team2">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../dashboard_assets/img/team-3.jpg" alt="team3">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../dashboard_assets/img/team-4.jpg" alt="team4">
                          </a>
                        </div>
                        ---->

                      </td>
                      <td class="align-middle text-center text-sm">
                          <div class="btn-group" style="position:static;">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="/admin/delete-category?id=$category['id']">Delete</a></li>
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
<div class="modal fade" id="categoryform_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/add-category" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Category Name">
            </div>
            <div class="col">
            <input type="file" name="image" class="form-control" >
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

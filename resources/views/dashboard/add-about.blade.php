@extends("layouts.dashboard_master")
@section("content")
    @include("dashboard.sidemenu")
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar.blade.php --->
        @include('dashboard.navbar')
        <!--container.blade.php---->      
        <!---content------>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

     <div class="container">
        <div class="row">
            <div class="col-2">
                <!----One of three columns--->
            </div>
            <div class="col-8">
                   <div class="container" style="margin-top:90px;">           
          <form action="/admin/store-about" method="post" enctype="multipart/form-data">
              @csrf
            <div class="row">
                <div class="form-group col">
                     <input type="text" class="form-control" name="title" placeholder="About Title">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                     <textarea rows="4" cols="50" class="form-control" name="contents" placeholder="Description" ></textarea>
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                    <textarea class="form-control" name="feature" placeholder="Feature"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="file" class="form-control" name="image" placeholder="Job image">
                </div>
            </div>
            <div class="row">
                <div class="col-5">

                </div>
                <div class="form-group col">
                    <button type="submit" class="btn btn-primary" name="submit" placeholder="Job image">Submit</button>
                </div>
            </div>
          </form>
        
        </div>
            </div>
            <div class="col-2">
                <!----One of three columns---->
            </div>
        </div>
     </div>


           
    </main>
@endsection

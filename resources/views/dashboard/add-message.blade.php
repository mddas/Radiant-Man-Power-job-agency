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
          <form action="/admin/store-message" method="post" enctype="multipart/form-data">
              @csrf
            <div class="row">
                <div class="form-group col">
                     <input type="text" class="form-control" name="name" placeholder="Your name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                    <input type="text" class="form-control" name="message" placeholder="type your message">
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

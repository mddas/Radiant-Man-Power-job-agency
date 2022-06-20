@extends("layouts.dashboard_master")
@section("content")
    @include("dashboard.sidemenu")
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar.blade.php --->
        @include('dashboard.navbar')
        <!--container.blade.php---->      
        <!---content------>
        
        <div class="container" style="margin-top:90px;">
           
          <form>
            <div class="row">

                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
          </form>
        
        </div>
           
    </main>
@endsection

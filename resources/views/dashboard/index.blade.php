@extends("layouts.dashboard_master")
@section("index")
    @include("dashboard.sidemenu")
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar.blade.php --->
        @include('dashboard.navbar')
        <!--container.blade.php----> 
        @include('dashboard.container')         
    </main>
@endsection
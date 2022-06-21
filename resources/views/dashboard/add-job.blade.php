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
        <div class="container" style="margin-top:90px;">           
          <form action="/admin/add-job" method="post" enctype="multipart/form-data">
              @csrf
            <div class="row">

                <div class="form-group col">
                <input type="text" class="form-control" name="job_name" placeholder="Job name">
                </div>
                <div class="form-group col">
                <input type="text" class="form-control" name="job_description" placeholder="Job Description">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                <input type="number" class="form-control" name="salary" placeholder="salary">
                </div>
                <div class="form-group col">
                     <select class="form-select" aria-label="Default select example" name="qualification">
                        <option selected>Minimum Qualification</option>
                        <option value="below_slc">Below SLC</option>
                        <option value="slc">SLC</option>
                        <option value="+2">+2</option>
                        <option value="degree">Degree</option>
                        <option value="skilled">SKILLED</option>
                    </select>
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                </div>
                <div class="form-group col">
                    <select class="form-select" aria-label="Default select example" name="country">
                        <option selected>Select country</option>
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Baharain">Baharain</option>
                        <option value="Usa">USA</option>
                        <option value="Canada">CANADA</option>
                        <option value="Russia">Russia</option>
                    </select>
                 </div>
            </div>
             <div class="row">
                <div class="form-group col">
                <input type="number" class="form-control" name="number_of_required_post" placeholder="Number Of vacency">
                </div>
                <div class="form-group col">
                <input type="number" class="form-control" name="working_hour" placeholder="Working hour">
                </div>
            </div>
             <div class="row">
                <div class="form-group col">
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected>Select Category</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <select class="form-select" aria-label="Default select example" name="subcategory">
                        <option selected>Select subcategory</option>
                        @foreach($subcategories as $subcategory)
                           <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="file" class="form-control" name="job_image" placeholder="Job image">
                </div>
                <div class="form-group col">
                    <input type="file" class="form-control" name="company_image" placeholder="Company image">
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
           
    </main>
@endsection

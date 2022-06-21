<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Radiant Job <em>Ajency</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <style>
                    .dropdown-toggle::after {
                        content: none;
                    }
                 </style>
                @foreach($categories as $category)

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/search/?q={{$category->name}}" role="button" aria-haspopup="true" aria-expanded="false">{{$category->name}}</a>                    
                    <div class="dropdown-menu">
                      @foreach($category->getSubcategory as $subcategory)
                            <a class="dropdown-item" href="/search?q={{$subcategory->name}}">{{$subcategory->name}}</a>
                      @endforeach
                    </div>
                </li>

                @endforeach

                <li class="nav-item"><a class="nav-link" href="about-us">About us</a></li>

                <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
<!----
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="team.html">Team</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>
---->
                
                <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
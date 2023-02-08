@include('links')

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-between">

        <a class="navbar-brand" href="#">IMDB</a>
    
        <ul class="nav-item navigations">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-3" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-3" href="#">
                    Movies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-3" href="#">
                    Shows
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-3" href="#">
                    Web series
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center me-3" href="#">
                    Popular
                </a>
            </li>
        </ul>
    
        <form  method="post" action="{{url('search')}}" class="d-flex align-items-center w-50 form-search">
        {{csrf_field()}}
        <input type="text" name="search" width="200px" class="form-control"/>&nbsp;
        <button class="btn btn-success">Search</button>
        </form> 
</nav>


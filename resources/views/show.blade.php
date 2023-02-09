@include('header')
@include('links')

<div class="container-fluid content">
    <div class="col-md-4 infoo">
        <img src="" alt="Image not found"/>
    </div>
    <div class="col-md-7 infoo">
        <h2>{{$data->title->title}}</h2>
        <p><b>Rating: </b> {{$data->ratings->rating}}</p>
        <p><b>Release Date: </b>{{$data->releaseDate}}</p>
        <p><b>OverView: </b>{{$data->plotOutline->text}}</p>
    </div>
</div>

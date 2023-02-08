@include('header')
@include('links')


<div class="container-fluid content">
    <div class="container d-flex justify-content-evenly flex-wrap">
    @for($a=0;$a < 4; $a++)
       
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$data['d'][$a]['i']['imageUrl']}}" alt="image url broken"  />
              <div class="card-body">
                <h5 class="card-title"><b>{{$data['d'][$a]['l']}}</b></h5>
                <h5 class="card-title"><p>Casts : {{$data['d'][$a]['s']}}</p></h5>
              </div>
            </div>
       
    @endfor
    </div>
</div>


    
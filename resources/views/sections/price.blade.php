<section id="price">
    <div class="container">
      <header class="section-header">
        <h3> Prices for the Truck Dispatch Service </h3>
      </header>
      <div class="row w-100 py-5 my-5 d-flex justify-content-around align-items-center ssss">


@foreach ($prices as $price)
        <div class="mas my-5 p-2 col-lg-4 d-flex flex-column justify-content-center">


    
          <div class="men text-center py-3 fs-2 fw-bold text-black">
            {{$price->name}}
          </div>
          <div class="mod w-100 pt-5 px-1">
            <ul class="text-black s fs-6">
              <li>{{$price->types1}}</li>
              <li class="py-2">{{$price->types2}}</li>
              <li>{{$price->types3}}</li>
            </ul>
            <div class="d-flex w-100 justify-content-around py-3 align-items-center">
              <button data-toggle="modal" data-target="#myModal" class="btn btnaaa mt-5 px-5">Subscribe</button>
            </div>
          </div>

          

        </div>
@endforeach


      </div>
    </div>
  </section>
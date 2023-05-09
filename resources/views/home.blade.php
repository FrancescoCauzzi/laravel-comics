@extends('layouts/main-layout')

@section('content')
<main class="__main">

    <div class="container-fluid __main-top-bg">
        <div class="container">

            <div class="__current-series text-uppercase text-white fw-bold fs-4">
                <span >Current Series</span>
            </div>
        </div>
    </div>
    <div class="container py-5 d-flex flex-wrap justify-content-center __card-ctn">
        @foreach ($comics as $item)
        <div class="card __card" >
            <img src="{{$item['thumb']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-uppercase text-white __card-title">{{$item['title']}}</h6>

            </div>
          </div>

        @endforeach
    </div>
    <div class="text-center">
        <button type="button" class="btn btn-primary text-uppercase fw-bold px-5">Load more</button>


    </div>


</main>
@endsection

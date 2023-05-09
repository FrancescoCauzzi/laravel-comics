<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase ">
            @foreach ($navbar['navbar'] as $navbarEl)
            <li class="nav-item ">
                <a class="nav-link fw-bold" aria-current="page" href="#">{{$navbarEl}}</a>
            </li>
            @endforeach

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{$navbar['navbarDropDown'][0]}}
            </a>
            <ul class="dropdown-menu">
                @foreach ($navbar['navbarDropDown']['ddItems'] as $ddItem)
              <li><a class="dropdown-item" href="#">{{$ddItem}}</a></li>
              @endforeach

            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>
<div class="container-fluid __header-bg">
    <div class="container">

        <div class="__current-series text-uppercase text-white fw-bold fs-4">
            <span >Current Series</span>
        </div>
    </div>
</div>



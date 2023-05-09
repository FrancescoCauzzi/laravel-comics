<div class="container-fluid __footer-ctn">

    <div class="container">
        <div class="row row-cols-3 py-4 w-50 __links">
            @foreach ($footerItems as $item)


            <div class="col">
                <ul class="__{{str_replace(array("\r", "\n", "\t", ' '), '', $item["title"])}}">
                    <h5 class="text-white mb-2 text-uppercase">{{ $item['title'] }}</h5>

                    @foreach ($item['links'] as $link )

                    <li
                    class=" text-white py-1"

                    >
                    <a href="">{{ $link }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
    <img
    id="dc-logo-bg"
    src="{{asset('img/dc-logo-bg.png')}}"
        alt="Cannot retrieve image"
        />
    </div>
</div>

</div>

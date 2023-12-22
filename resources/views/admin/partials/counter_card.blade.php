{{-- card to count how many item are inside each table --}}

    <div class="col-md-3 col-sm-6">
        <div class="serviceBox">
            <a class="text-decoration-none" href="{{ $route }}">
                <div class="service-icon">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <h3 class="title">{{ $title }}</h3>
                <p class="description">You currently have {{ count($number)}}</p>
            </a>
        </div>
    </div>


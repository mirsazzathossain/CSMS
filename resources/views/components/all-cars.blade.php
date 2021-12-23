<x-app-layout>
    <section class="product-listing page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    @foreach ($cars as $car)
                    <div class="car-grid">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="{{asset('images/'.$car['images'][0])}}" alt="{{$car['name']}}">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="{{route('cars.show', $car['id'])}}"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="car-details">
                                    <div class="car-title">
                                        <a href="{{route('cars.show', $car['id'])}}">{{$car['name']}}</a>
                                        <p>{{$car['description']}}</p>
                                    </div>
                                    <div class="price">
                                        <span class="new-price">${{number_format($car['price'])}} </span>
                                        <a class="button red float-right" href="{{route('cars.show', $car['id'])}}">Details</a>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> {{$car['registration_date']}}</li>
                                            <li><i class="fa fa-cog"></i> {{$car['transmission']}} </li>
                                            <li><i class="fa fa-shopping-cart"></i> {{$car['mileage']}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <style>
        .car-title p {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</x-app-layout>
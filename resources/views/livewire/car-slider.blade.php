<section class="feature-car white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>Check out our recent cars</span>
                    <h2>Feature Car </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="4" data-md-items="4"
                    data-sm-items="2" data-xs-items="1" data-space="15">
                    @foreach ($cars as $car)
                    <div class="item">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('images/'.$car['images'][0])}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{route('cars.show', $car['id'])}}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> {{$car['registration_date']}}</li>
                                    <li><i class="fa fa-cog"></i> {{$car['transmission']}} </li>
                                    <li><i class="fa fa-dashboard"></i> {{$car['mileage']}}</li>
                                </ul>
                            </div>
                            <div class="car-content py-5">
                                <a href="{{route('cars.show', $car['id'])}}">{{$car['name']}}</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="new-price">${{$car['price']}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
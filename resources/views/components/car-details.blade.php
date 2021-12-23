<x-app-layout>
    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3>{{$car['name']}} </h3>
                </div>
                <div class="col-md-3">
                    <div class="car-price text-md-right">
                        <strong>$ {{number_format($car['price'])}}</strong>
                        <span>Plus Taxes & Licensing</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="slider-slick">
                        <div class="slider slider-for detail-big-car-gallery">
                            @foreach ($car['images'] as $image)
                            <img class="img-fluid" src="{{asset('images/'.$image)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5>DESCRIPTION</h5>
                            <ul>
                                <li> <span>Make</span> <strong class="text-right">{{$car['make']}}</strong></li>
                                <li> <span>Model</span> <strong class="text-right">{{$car['model']}}</strong></li>
                                <li> <span>Registration date </span> <strong class="text-right">{{$car['registration_date']}}</strong></li>
                                <li> <span>Mileage</span> <strong class="text-right">{{$car['mileage']}}</strong></li>
                                <li> <span>Condition</span> <strong class="text-right">{{$car['condition']}}</strong></li>
                                <li> <span>Exterior Color</span> <strong class="text-right">{{$car['exterior_color']}}</strong></li>
                                <li> <span>Interior Color</span> <strong class="text-right">{{$car['interior_color']}}</strong>
                                </li>
                                <li> <span>Drivetrain</span> <strong class="text-right">{{$car['drivetrain']}}</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9  col-sm-9">
                    <div id="tabs">
                        <ul class="tabs">
                            <li data-tabs="tab1" class="active"> <span aria-hidden="true" class="icon-diamond"></span>
                                General Information</li>
                        </ul>
                        <div id="tab1" class="tabcontent">
                            <h6>Car Details</h6>
                            <p>
                                {{$car['description']}}
                            </p>
                        </div>
                    </div>
                    <div class="extra-feature">
                        <h6> extra feature</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-style-1">
                                    @foreach ($car['features'] as $feature)
                                    <li><i class="fa fa-check"></i> {{$feature}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
<section class="sec-3-b">
    <div class="container">


        <h3 class="text-center" style="font-weight: bolder;color: #fff;">POPULAR COLLEGES</h3>
        <div class="row">


        <div class="container-fluid" style="">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
   <?php $i=0; ?>
        @foreach($colleges as $college)

            <div class="carousel-item col-md-3 @if($i=='1')
                    active
                    @else

                    @endif
                    ">
        <div class="panel panel-default">
        <div class="panel-thumbnail">
        <a class="thumb">
            <div class="card">
                <img class="card-img-top" src="images/{{$college['image'] }}">
                <div class="card-block">

                    <h4 class="card-title mt-3" style="font-size:0.5rem!important;font-weight: bolder;">{{$college['name']}}</h4>
                    <div class="meta">
                        {{--<a>Friends</a>--}}

                    </div>
                    <div class="card-text">

                    </div>
                </div>
                <div class="card-footer">
                    {{--<small>Last updated 3 mins ago</small>--}}
                    <button class="btn btn-secondary float-right btn-sm">APPLY NOW</button>
                </div>
            </div>
        </a>
        </div>
        </div>
        </div>
<?php $i = $i+1; ?>

            @endforeach

        {{--<div class="carousel-item col-md-3 ">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-thumbnail">--}}
        {{--<a href="#" title="image 4" class="thumb">--}}
        {{--<img class="img-fluid mx-auto d-block" src="images/bsp/3.jpg" alt="slide 3">--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="carousel-item col-md-3 ">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-thumbnail">--}}
        {{--<a href="#" title="image 5" class="thumb">--}}
        {{--<img class="img-fluid mx-auto d-block" src="images/bsp/4.jpg" alt="slide 4">--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="carousel-item col-md-3 ">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-thumbnail">--}}
        {{--<a href="#" title="image 6" class="thumb">--}}
        {{--<img class="img-fluid mx-auto d-block" src="images/bsp/5.jpg" alt="slide 5">--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="carousel-item col-md-3 ">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-thumbnail">--}}
        {{--<a href="#" title="image 7" class="thumb">--}}
        {{--<img class="img-fluid mx-auto d-block" src="images/bsp/6.jpg" alt="slide 6">--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="carousel-item col-md-3 ">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-thumbnail">--}}
        {{--<a href="#" title="image 8" class="thumb">--}}
        {{--<img class="img-fluid mx-auto d-block" src="images/bsp/7.jpg" alt="slide 7">--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        </div>
        </div>




    </div>

    {{--<div class="container">--}}







            {{--<div class="col-sm-6 col-md-4 col-lg-3 mt-4">--}}

                {{--<div class="card">--}}
                    {{--<img class="card-img-top" src="http://mysrm.srmuniv.ac.in/icame-2018/sites/default/files/SRM-UB.jpg">--}}
                    {{--<div class="card-block">--}}

                        {{--<h4 class="card-title mt-3" style="font-size: 1rem!important;font-weight: bolder;">SRM INSTITUTE</h4>--}}
                        {{--<div class="meta">--}}
                            {{--<a>Friends</a>--}}

                        {{--</div>--}}
                        {{--<div class="card-text">--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-footer">--}}
                        {{--<small>Last updated 3 mins ago</small>--}}
                        {{--<button class="btn btn-secondary float-right btn-sm">APPLY NOW</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4 col-lg-3 mt-4">--}}
                {{--<div class="card">--}}
                    {{--<img class="card-img-top" src="images/vit.png">--}}
                    {{--<div class="card-block">--}}

                        {{--<h4 class="card-title mt-3">VIT INSTITUTE</h4>--}}
                        {{--<div class="meta">--}}
                            {{--<a>Friends</a>--}}
                        {{--</div>--}}
                        {{--<div class="card-text">--}}
                            {{--Tawshif is a web designer living in Bangladesh.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-footer">--}}
                        {{--<small>Last updated 3 mins ago</small>--}}
                        {{--<button class="btn btn-secondary float-right btn-sm">APPLY NOW</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4 col-lg-3 mt-4">--}}
                {{--<div class="card">--}}
                    {{--<img class="card-img-top" src="images/satyabhama.jpg">--}}
                    {{--<div class="card-block">--}}

                        {{--<h4 class="card-title mt-3">SATYABHAMA INSTITUTE</h4>--}}
                        {{--<div class="meta">--}}
                            {{--<a>Friends</a>--}}
                        {{--</div>--}}
                        {{--<div class="card-text">--}}
                            {{--Tawshif is a web designer living in Bangladesh.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-footer">--}}
                        {{--<small>Last updated 3 mins ago</small>--}}
                        {{--<button class="btn btn-secondary float-right btn-sm">APPLY NOW</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4 col-lg-3 mt-4">--}}
                {{--<div class="card">--}}
                    {{--<img class="card-img-top" src="images/hindustan.jpg">--}}
                    {{--<div class="card-block">--}}

                        {{--<h4 class="card-title mt-3">HINDUSTAN INSTITUTE</h4>--}}
                        {{--<div class="meta">--}}
                            {{--<a>Friends</a>--}}
                        {{--</div>--}}
                        {{--<div class="card-text">--}}
                            {{--Tawshif is a web designer living in Bangladesh.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-footer">--}}
                        {{--<small>Last updated 3 mins ago</small>--}}
                        {{--<button class="btn btn-secondary float-right btn-sm">APPLY NOW</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}





        {{--</div>--}}

    </div>
</section>

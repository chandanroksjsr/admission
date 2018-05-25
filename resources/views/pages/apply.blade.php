@extends('layouts.app')


@section('content')


    <section class="sec-3-c">
        <div class="container">
            <div class="row">

<div class="col-md-6">
    <h3 class="text-center text-dark" style="font-weight: bolder;">Apply Now</h3>

    <form method="POST" id="application_form" action="">
        @csrf
        <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" autofocus required>
        </div></div>
            <div class="col-md-6">
        <div class="form-group">
            <label for="pwd">Phone:</label>
            <input type="tel" class="form-control" name="phone" id="phone" required>
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="pwd">College Name:</label>
            <input type="text" class="form-control" name="college" id="college" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="pwd">Course Name:</label>
            <input type="text" class="form-control" name="course" id="course" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="pwd">Your Curent City:</label>
            <input type="text" class="form-control" name="city" id="course" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="pwd">Class 12th Percentage:</label>
            <input type="text" class="form-control" name="twe" >


        </div>
    </div>

    <div class="col-md-12" style="float: left;">
        <div class="form-group">
            <button type="submit" id="subm" class="btn btn-primary">
                Apply Now
            </button>
        </div>
    </div>
        <div class="col-md-12" id="resp" style="float: left;">

        </div>


    </form>
    </div>
    <div class="col-md-6">
<h3>Top Reputed Colleges</h3>
        <ul class="list-group">
            {{--<li class="list-group-item active">Cras justo odio</li>--}}
          <?php $i=0; ?>
            @foreach($colleges as $college)
@if($i<=6)
            <li class="list-group-item">{{$college['name']}}</li>
@endif
                <?php $i=$i+1; ?>
         @endforeach
        </ul>
    </div>

    <div>


    </div>




    </div>

    </div>
    </section>
    @include('partials.popularcolleges')
    @include('partials.topcourses')

    <script>
    $(function(){
    $("#application_form").submit(function(event){
    event.preventDefault();
$('#subm').attr("disabled", "disabled");
    $.ajax({
    url:'{{route('Apply')}}',
    type:'POST',
    data:$(this).serialize(),
    success:function(resul) {
        var result = JSON.parse(resul);
        if (result.error){
         //  console.log(result);

        $('#resp').html('<div class="alert alert-danger">' +result.msg+ '</div>');
        $('#subm').removeAttr("disabled");
    }else {
            $('#application_form')[0].reset();
            $('#resp').html('<div class="alert alert-success">' +result.msg+ '</div>');
            $('#subm').removeAttr("disabled");
            //console.log(result);

            // $("#response").text(result);

        }
    }

    });
    });

    });
    </script>
@endsection

@extends('layouts.admin')
@section('content')

    <div class="content">


            <div class="col-md-10 col-md-offset-1">
                <div class="card card-calendar">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
                </div>
            </div>



    </div>


@endsection
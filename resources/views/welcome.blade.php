@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class='text-center py-5'>Today departures</h1>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$train->company}}</h4>
                    <p class="card-text">Departure from: {{$train->departure_station}}</p>
                    <p class="card-text">Arrival: {{$train->arrival_station}}</p>
                    <p class="card-text">Departure time: {{$train->departure_time}}</p>
                    <p class="card-text">Arrival time: {{$train->arrival_time}}</p>
                    <p class="card-text">Train code: {{$train->train_code}}</p>
                    <p class="card-text">Train carriages: {{$train->train_carriage}}</p>

                    @if ($train->on_time === 1)
                    <p class="card-text">{{$train->on_time = 'Train on time'}}</p>
                    @else
                    <p class="card-text">{{$train->on_time = 'Train delayed'}}</p>
                    @endif

                    @if($train->cancelled === 1)
                    <p class="card-text">{{$train->cancelled = 'The train has been cancelled'}}</p>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>We're sorry, there are no trains yet!</p>
        </div>
        @endforelse
    </div>
</div>

@endsection
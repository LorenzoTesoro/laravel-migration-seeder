@extends('layouts.app')

@section('content')

<div class="container py-5 vh-100">
    <div class="row">
        @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$train->company}}</h4>
                    <p class="card-text">Departure from: {{$train->departure_station}}</p>
                    <p class="card-text">Arrival at: {{$train->arrival_station}}</p>
                    <p class="card-text">Departure time: {{$train->departure_time}}</p>
                    <p class="card-text">Arrival time: {{$train->arrival_time}}</p>
                    <p class="card-text">Train code: {{$train->train_code}}</p>
                    <p class="card-text">Train carriages: {{$train->train_carriage}}</p>

                    <!-- TODO: gestire caso in cui il treno sia in cancellato o in ritardo -->
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
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-primary">Design Suggestions for <span class="fw-bold">{{ $room->name }}</span></h2>

    <div class="row g-4">
        @foreach($designs as $design)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <img src="{{ asset('storage/' . $design->image) }}" class="card-img-top rounded-top-4" alt="{{ $design->name }}" style="height: 250px; object-fit: cover;">
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $design->name }}</h5>
                    <p class="mb-1"><strong>Style:</strong> {{ $design->style }}</p>
                    <p class="mb-3"><strong>Price:</strong> ₹{{ number_format($design->price, 2) }}</p>

                    <a href="#" class="btn btn-primary mt-auto rounded-pill">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

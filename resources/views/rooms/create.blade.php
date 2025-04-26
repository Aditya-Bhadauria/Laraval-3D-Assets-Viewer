@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h3 class="mb-0">Enter Room Details</h3>
                </div>
                <div class="card-body p-4">

                    <form method="POST" action="{{ route('rooms.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Room Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="e.g., Living Room" required>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="length" class="form-label">Length (m)</label>
                                <input type="number" step="0.1" name="length" id="length" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="width" class="form-label">Width (m)</label>
                                <input type="number" step="0.1" name="width" id="width" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="height" class="form-label">Height (m)</label>
                                <input type="number" step="0.1" name="height" id="height" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="style" class="form-label">Preferred Style</label>
                            <input type="text" name="style" id="style" class="form-control" placeholder="e.g., Modern, Classic..." required>
                        </div>

                        <div class="mb-4">
                            <label for="budget" class="form-label">Budget ($)</label>
                            <input type="number" step="0.01" name="budget" id="budget" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Submit Room Details</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

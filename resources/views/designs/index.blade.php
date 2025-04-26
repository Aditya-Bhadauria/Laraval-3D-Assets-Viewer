@extends('layouts.app')

@section('content')
<!-- Include model-viewer -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

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

                    @if($design->model)
                    <a href="#"
                       class="btn btn-primary mt-auto rounded-pill"
                       data-bs-toggle="modal"
                       data-bs-target="#modelViewerModal"
                       data-model-path="{{ asset('storage/' . $design->model) }}"
                       data-name="{{ $design->name }}">
                       View Details
                    </a>
                    @else
                    <button class="btn btn-secondary mt-auto rounded-pill" disabled>No 3D Model</button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- 3D Model Viewer Modal -->
<div class="modal fade" id="modelViewerModal" tabindex="-1" aria-labelledby="modelViewerLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content rounded-4">
      <div class="modal-header">
        <h5 class="modal-title" id="modelViewerLabel">3D Model Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <model-viewer id="modelViewer" 
                      src="" 
                      alt="3D Model" 
                      camera-controls 
                      auto-rotate 
                      style="width: 100%; height: 600px;">
        </model-viewer>
      </div>
    </div>
  </div>
</div>

<!-- JS to load 3D model dynamically in modal -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var modelViewerModal = document.getElementById('modelViewerModal');
    var modelViewer = document.getElementById('modelViewer');
    var modelTitle = document.getElementById('modelViewerLabel');

    modelViewerModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var modelPath = button.getAttribute('data-model-path');
        var modelName = button.getAttribute('data-name');

        // Set the src attribute of the model viewer
        modelViewer.src = modelPath;

        // Set the title of the modal
        modelTitle.textContent = modelName + ' - 3D Preview';
    });
});
</script>
@endsection

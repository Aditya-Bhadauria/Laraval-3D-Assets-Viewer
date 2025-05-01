@extends('layouts.app')

@section('content')

<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<div class="container py-5">
    <h2 class="mb-5 text-center fw-bold" style="color: #e63946;">All Available Designs</h2>

    <div class="row g-4">
        @foreach($designs as $design)
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden" style="background-color: #fff0f3;">
                <img src="{{ asset('storage/' . $design->image) }}" 
                     class="card-img-top rounded-top-4" 
                     alt="{{ $design->name }}" 
                     style="height: 260px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-semibold" style="color: #d62828;">{{ $design->name }}</h5>
                    <p class="mb-1"><strong style="color: #6d6875;">Style:</strong> {{ $design->style }}</p>
                    <p class="mb-3"><strong style="color: #6d6875;">Price:</strong> ₹{{ number_format($design->price, 2) }}</p>

                    @if($design->model)
                    <a href="#"
                       class="btn mt-auto px-4 py-2 rounded-pill"
                       style="background-color: #e63946; color: #fff;"
                       data-bs-toggle="modal"
                       data-bs-target="#modelViewerModal"
                       data-model-path="{{ asset('storage/' . $design->model) }}"
                       data-name="{{ $design->name }}">
                       View 3D Model
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


<div class="modal fade" id="modelViewerModal" tabindex="-1" aria-labelledby="modelViewerLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content rounded-4 border-0 shadow-lg" style="background-color: #fff0f3;">
      <div class="modal-header" style="border-bottom: none;">
        <h5 class="modal-title fw-bold" id="modelViewerLabel" style="color: #d62828;">3D Model Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <model-viewer id="modelViewer" 
                      src="" 
                      alt="3D Model" 
                      camera-controls 
                      auto-rotate 
                      style="width: 100%; height: 600px; background: #ffe5ec;">
        </model-viewer>
      </div>
    </div>
  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var modelViewerModal = document.getElementById('modelViewerModal');
    var modelViewer = document.getElementById('modelViewer');
    var modelTitle = document.getElementById('modelViewerLabel');

    modelViewerModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var modelPath = button.getAttribute('data-model-path');
        var modelName = button.getAttribute('data-name');

        modelViewer.src = modelPath;
        modelTitle.textContent = modelName + ' - 3D Preview';
    });
});
</script>
@endsection

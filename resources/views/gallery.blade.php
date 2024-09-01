<!-- resources/views/gallery.blade.php -->
@extends('layouts.app')

@section('title', 'gallery')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">GALLERY</p>
    <div class="ashbin-section">
        <div class="card">
            <div class="card-body">
                <p class="ashbin-title">WORKSHOP WITH THE LOCAL GOVERNMENT</p>
                <div class="row ashbin-gallery-img">
                    <div class="col-lg-4 col-12">
                        <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser">
                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser">
                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
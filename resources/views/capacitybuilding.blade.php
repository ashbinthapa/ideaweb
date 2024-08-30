<!-- resources/views/capacitybuilding.blade.php -->
@extends('layouts.app')

@section('title', 'capacity building')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">Capacity Building</p>
    <div>The project has conducted various training and development activities.
        All of the training activities are targeted to build capacity of stakeholders, and/or young researchers at ISER-N.
    </div>
    @foreach ($data['posts_all'] as $post)
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $post->title }}</h5>
        </div>
        <div class="card-body">
            <p>@if($post->published_at)
                {{ date('F j, Y', strtotime($post->published_at)) }}
                @else
                {{ date('F j, Y', strtotime($post->updated_at)) }}
                @endif
            </p>
            <p>{{ Str::limit(strip_tags($post->content), 250) }}</p>
            <div>
                <a href="{{ $post->slug }}">
                    <h3 class="ashbin-button"><span>Read More</span></h3>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
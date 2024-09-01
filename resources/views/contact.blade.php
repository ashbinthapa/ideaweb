<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('title', 'contact')

@section('content')
<div class="ashbin-section">
    <div class="card">
        <div class="card-body">
            <p class="ashbin-title">contact</p>
            @foreach ($data['posts_all'] as $post)
            <p class="card-text ashbin-contact-content"> {!! $post->content !!}
                @break
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection
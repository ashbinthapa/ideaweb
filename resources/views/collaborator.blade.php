<!-- resources/views/collaborator.blade.php -->
@extends('layouts.app')

@section('title', 'collaborator')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">collaborator</p>
    @foreach ($data['posts_all'] as $post)

    <div class="row">
        <div class="col-3 ashbin-investigator-image">
            <img src="{{ $post->image }}" alt="Idea-Iser">
        </div>
        <div class="col-9">
            <div class="ashbin-investigator-name">
                {{ $post->name }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->position }}
            </div>
        </div>
    </div>
</div>

@endsection
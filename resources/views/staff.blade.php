<!-- resources/views/staff.blade.php -->
@extends('layouts.app')

@section('title', 'staff')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">Staff</p>
    @foreach ($data['posts_all'] as $post)
    @if(($post->michigan) == 0)
    <div class="row">
        <div class="col-3 ashbin-investigator-image">
            @if(!empty($post->image))
            <img src="/uploads/{{ $post->image }}" alt="Idea-Iser">
            @else
            <img src="/uploads/dummy image.jpg" alt="Idea-Iser">
            @endif
        </div>
        <div class="col-9">
            <div class="ashbin-investigator-name">
                {{ $post->name }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->position }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->detail }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->email }}
            </div>
        </div>
    </div>
    @endif
    @endforeach

    @foreach ($data['posts_all'] as $post)
    @if(($post->michigan) == 1)
    <p class="ashbin-title">University Of Michigan Staff</p>
    <div class="row">
        <div class="col-3 ashbin-investigator-image">
            @if(!empty($post->image))
            <img src="/uploads/{{ $post->image }}" alt="Idea-Iser">
            @else
            <img src="/uploads/dummy image.jpg" alt="Idea-Iser">
            @endif
        </div>
        <div class="col-9">
            <div class="ashbin-investigator-name">
                {{ $post->name }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->position }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->detail }}
            </div>
            <div class="ashbin-investigator-role">
                {{ $post->email }}
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

@endsection
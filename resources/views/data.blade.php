<!-- resources/views/data.blade.php -->
@extends('layouts.app')

@section('title', 'data')

@section('content')
<div class="accordion" id="accordionExample">
    @php $a = 1; @endphp
    @foreach ($data['posts_all'] as $post)
    {!! $post->content !!}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button ashbin-accordion-design" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $a }}" aria-expanded="true" aria-controls="collapseOne">
                {{ $post->title }}
            </button>
        </h2>
        <div id="collapse{{ $a }}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                DATA <a href="{{$post->data}}">Click Here</a><br>
                CODEBOOK <a href="{{$post->codebook}}">Click Here</a>
            </div>
        </div>
    </div>
    @php $a++; @endphp
    @endforeach

</div>
@endsection
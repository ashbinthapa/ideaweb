<!-- resources/views/product.blade.php -->
@extends('layouts.app')

@section('title', 'product')

@section('content')
<div>
    <p>The products of this project will include the NAAT survey instruments,
        comprehensive panel data with potential to answer high priority scientific
        and policy questions about factors associated with school accountability and student achievement,
        and dissemination of the data and the findings at the local, national and global levels.
    </p>
</div>
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
        <div id="collapse{{ $a }}" class="accordion-collapse collapse collapse @if($loop->first) show @endif" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                {!! $post->data !!}
            </div>
        </div>
    </div>
    @php $a++; @endphp
    @endforeach

</div>
@endsection
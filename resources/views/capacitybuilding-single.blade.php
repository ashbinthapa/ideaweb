@extends('layouts.app')

@section('title', 'capacity-building')

@section('content')
<div class="ashbin-section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $data->title }}</h5>
        </div>
        <div class="card-body">
            <p>
                @if($data->published_at)
                {{ date('F j, Y', strtotime($data->published_at)) }}
                @else
                {{ date('F j, Y', strtotime($data->updated_at)) }}
                @endif
            </p>
            <p>{!! $data->content !!}</p>
        </div>
    </div>
</div>
@endsection
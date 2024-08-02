<!-- resources/views/staff.blade.php -->
@extends('layouts.app')

@section('title', 'collaborator')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">collaborator</p>
    <div class="row">
        <div class="col-3 ashbin-investigator-image">
            <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser">

        </div>
        <div class="col-9">
            <div class="ashbin-investigator-name">
                PROF. DR. DIRGHA JIBI GHIMIRE
            </div>
            <div class="ashbin-investigator-role">
                PRINCIPAL INVESTIGATOR
            </div>
            <div class="ashbin-investigator-phone">
                <i class="fa fa-phone" aria-hidden="true"></i>
                (734) 763-8649
            </div>
            <div class="ashbin-investigator-email">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                nepdjg@umich.edu
            </div>
        </div>
    </div>
</div>

@endsection
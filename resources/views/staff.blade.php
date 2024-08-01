<!-- resources/views/staff.blade.php -->
@extends('layouts.app')

@section('title', 'staff')

@section('content')
<div class="ashbin-section">
    <p class="ashbin-title">Staff</p>
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
            <div class="ashbin-investigator-role-description">
                Director – Institute for Social & Environment Research – Nepal
                Research Professor, Population Studies Center
                Ph.D. Sociology and Demography, University of Michigan
            </div>
        </div>
        <div class="ashbin-investigator-explanation">
            Research Interests
            Dr. Ghimire studies social change, developmental idealism, family and demography, population and environment dynamics. His research within family and demography revolves around three sub areas- marriage (marital arrangement, marital relationship and relationship dynamics), childbearing (timing of first birth), and fertility limitation (contraceptive use). In addition, he also studies reproductive health, HIV/AIDS and mental health and well-being. Another major area of Dr. Ghimire’s research focuses on understanding of the interplay between population and environmental processes (reciprocal impacts of population processes on land use and terrestrial biodiversity, and environmental degradation on childbearing, contraceptive use, individual mobility and household energy use). More recently his work has focused on ideational aspects of these substantive areas.
        </div>
        <div>
            <a href="#">
                <h3 class="ashbin-button"><span>Download CV</span></h3>
            </a>
        </div>
    </div>
</div>

@endsection
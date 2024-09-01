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
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label fw-bold">Subject</label>
                    <input type="text" name="subject" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Message</label>
                    <textarea name="message" class="form-control" required rows="5"></textarea>
                </div>
                <button type="submit" class="custom-button fw-bold">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('success'))
                {{ session('success') }}
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@if (session('success'))
<script>
    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
    successModal.show();
</script>
@endif
@endsection
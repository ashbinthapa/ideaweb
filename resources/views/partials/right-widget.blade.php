<!-- resources/views/partials/right-widget.blade.php -->
<div class="container ashbin-a-tag ashbin-widget-image">
    <h3 class="ashbin-widget-title"><span>Recent Activities</span></h3>
    <ul>
        @foreach ($data['posts_all'] as $post)
        <li><a href="{{ $post->slug }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

    <h3 class="ashbin-widget-title"><span>Important Links</span></h3>
    <ul>
        <li><a href="#"> DISSEMINATION WORKSHOP FOR IMPROVING LEARNING: DEVELOPING MEASURES OF ACCOUNTABILITY AND EVALUATING THEIR ASSOCIATION WITH STUDENTS’ GAINS IN ACHIEVEMENT IN NEPAL</a></li>
        <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
        <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
        <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
        <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
    </ul>

    <h3 class="ashbin-widget-title"><span>Images and Videos</span></h3>
    <div><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
    <div><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
    <div><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
</div>
<!-- resources/views/partials/footer.blade.php -->
<div class="container">
    <div class="website-footer-main-title">
        <p>
            Improving Learning: Developing Measures of Accountability and Evaluating their Association with Student’s Gains in Achievement in Nepal
        </p>
    </div>
    <div class="row ashbin-footer-img">
        <div class="col-lg-3 col-6"><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
        <div class="col-lg-3 col-6"><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
        <div class="col-lg-3 col-6"><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
        <div class="col-lg-3 col-6"><a href="#"> <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser"></a></div>
    </div>
</div>
<div class="container-fluid ashbin-footer-widgets-wrapper">
    <div class="container ashbin-a-tag website-footer-content">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xxl-3">
                <h3 class="ashbin-footer-widget-title"><span>Contact Us</span></h3>
                <ul>
                    <li><a href="#"> DISSEMINATION WORKSHOP FOR IMPROVING LEARNING: DEVELOPING MEASURES OF ACCOUNTABILITY AND EVALUATING THEIR ASSOCIATION WITH STUDENTS’ GAINS IN ACHIEVEMENT IN NEPAL</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xxl-3">
                <h3 class="ashbin-footer-widget-title"><span>Important Links</span></h3>
                <ul>
                    <li><a href="https://isernepal.org.np/"> ISER-N</a></li>
                    <li><a href="https://spe.psc.isr.umich.edu/"> Program in Society, Population, and Environment</a></li>
                    <li><a href="https://www.psc.isr.umich.edu/"> Population Studies Center</a></li>
                    <li><a href="https://umich.edu/"> University of Michigan</a></li>
                    <li><a href="https://www.ukri.org/councils/esrc/"> DFID-ESRC</a></li>
                    <li><a href="https://www.bharatpurmun.gov.np/"> Bharatpur Municipality</a></li>
                    <li><a href="https://www.ero.gov.np/"> Education Review Office</a></li>
                    <li><a href="https://loaf.isernepal.org/">LOAF</a></li>

                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xxl-3">
                <h3 class="ashbin-footer-widget-title"><span>Recent Posts</span></h3>
                <ul>
                    @foreach ($data['posts_all'] as $post)
                    <li><a href="{{ $post->slug }}">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xxl-3">
                <h3 class="ashbin-footer-widget-title"><span>Feedback</span></h3>
                <ul>
                    <li><a href="#"> DISSEMINATION WORKSHOP FOR IMPROVING LEARNING: DEVELOPING MEASURES OF ACCOUNTABILITY AND EVALUATING THEIR ASSOCIATION WITH STUDENTS’ GAINS IN ACHIEVEMENT IN NEPAL</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                    <li><a href="#"> OBSERVATION TRAINING FOR OBSERVER</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid ashbin-footer-end">
    <div class="row">
        <div class="col-6">
            <p>Copyright © 2024 IDEA. All rights reserved.</p>
        </div>
        <div class="col-6">
            <a href="https://www.facebook.com/isernepalofficial/?ref=aymt_homepage_panel&eid=ARCZ8VyOFfG6ZEJl7hyyqg7-0wlTGyxtRQQwQU2psMbjH59aUSY-HQ5o-YnV3JiVR1NXkPDdzVzzR-06">
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            </a>
        </div>

    </div>

</div>
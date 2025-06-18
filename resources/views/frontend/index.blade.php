<!DOCTYPE html>
<html>
<head>
    <title>{{ $site->name }}</title>
</head>
<body>
    <header>

    </header>

    @yield('content')
@if($site->faqs->count())
    <section id="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion">
            @foreach($site->faqs as $faq)
                <div class="accordion-item">
                    <h4>{{ $faq->question }}</h4>
                    <p>{{ $faq->answer }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endif


    <footer>
        <p>{{ $site->footer_text }}</p>
    </footer>
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="evolved-page">
    <section class="hero" id="hero">
        <div class="hero-badge">EVOLVED AND BALANCED — EVIDENCE-BASED COACHING</div>
        <h1>
            <span class="gold">Evolve</span> Your<br>Physique
            <span class="amp">&</span>
            <span class="gold">Balance</span> Your<br>Potential
        </h1>
        <p class="hero-desc">Precision coaching rooted in science. Personalized training and nutrition designed by Dr. Eyad Bassem for measurable, lasting transformation.</p>
        <a href="#cta" class="hero-btn">Begin Your Transformation</a>
    </section>

    @if($coach && $coach->programs->count())
    <section class="about" id="about">
        <div class="container">
            <div class="about-image-wrapper reveal-left">
                @if($coach->image_url)
                    <img src="{{ $coach->image_url }}" alt="{{ $coach->name }}" class="about-image">
                @endif
            </div>
            <div class="about-content reveal-right">
                <div class="section-num">01</div>
                <div class="section-label">About</div>
                <div class="section-title">{{ $coach->name }}</div>
                <p class="about-text">{{ $coach->bio }}</p>
                <div class="about-stats stagger-children">
                    <div class="about-stat">
                        <div class="about-stat-number">{{ $coach->clients_transformed }}+</div>
                        <div class="about-stat-label">Clients Transformed</div>
                    </div>
                    <div class="about-stat">
                        <div class="about-stat-number">{{ $coach->coaching_type }}</div>
                        <div class="about-stat-label">Online Coaching</div>
                    </div>
                    <div class="about-stat">
                        <div class="about-stat-number">{{ $coach->customizable_percentage }}%</div>
                        <div class="about-stat-label">Customizable</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php $program = $coach->programs->first(); @endphp
    @if($program && $program->steps->count())
    <section class="process" id="process">
        <div class="container">
            <div class="process-header reveal">
                <div class="section-num">02</div>
                <div class="section-label">The Process</div>
                <div class="section-title">From Discovery to <em>Transformation</em></div>
            </div>
            <div class="process-grid stagger-children">
                @foreach($program->steps as $step)
                <div class="process-card">
                    <div class="process-card-num">{{ str_pad($step->step_number, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3>{{ $step->title }}</h3>
                    <p>{{ $step->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if($program && $program->methods->count())
    <section class="method" id="method">
        <div class="container">
            <div class="method-header reveal">
                <div class="section-num">03</div>
                <div class="section-label">The Method</div>
                <div class="section-title">Evidence-Based. <em>Results-Driven.</em></div>
            </div>
            <div class="method-grid stagger-children">
                @foreach($program->methods as $method)
                <div class="method-card">
                    <div class="method-icon">
                        @if($method->icon)
                            <i class="{{ $method->icon }}"></i>
                        @else
                            <span>⚡</span>
                        @endif
                    </div>
                    <h3>{{ $method->title }}</h3>
                    <p>{{ $method->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @endif

    @if($testimonials->count())
    <section class="results" id="results">
        <div class="container">
            <div class="results-header reveal">
                <div class="section-num">04</div>
                <div class="section-label">Results</div>
                <div class="section-title">Client <em>Transformations</em></div>
            </div>
            <div class="results-cards">
                @foreach($testimonials as $testimonial)
                <div class="result-testimonial reveal">
                    <div class="result-quote">{{ $testimonial->quote }}</div>
                    <div>
                        <div class="result-metric">{{ $testimonial->result_metric }}</div>
                        <div class="result-type">{{ $testimonial->result_type }}</div>
                        <div class="result-program">{{ $testimonial->program_name }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if($faqs->count())
    <section class="faq" id="faq">
        <div class="container">
            <div class="faq-header reveal">
                <div class="section-num">05</div>
                <div class="section-label">Questions</div>
                <div class="section-title">Frequently Asked <em>Questions</em></div>
            </div>
            <div class="faq-grid stagger-children">
                @foreach($faqs as $faq)
                <div class="faq-item">
                    <div class="faq-item-header">
                        <div class="faq-question">{{ $faq->question }}</div>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">{{ $faq->answer }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section class="cta" id="cta">
        <div class="container">
            <h2 class="section-title">Ready to Transform?</h2>
            <p class="cta-desc">Start your journey towards evolved physique and balanced potential today.</p>
            <a href="#" class="cta-btn">Start Your Journey</a>
        </div>
    </section>
</div>
@endsection

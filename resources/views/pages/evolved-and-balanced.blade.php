@extends('layouts.app')

@section('title','Evolved & Balanced')

@section('content')

<!-- Hero -->
<section class="hero" id="hero">
  <div class="hero-badge">EVOLVED AND BALANCED — EVIDENCE-BASED COACHING</div>
  <h1>
    <span class="gold">Evolve</span> Your<br>Physique
    <span class="amp">&amp;</span>
    <span class="gold">Balance</span> Your<br>Potential
  </h1>
  <p class="hero-desc">Precision coaching rooted in science. Personalized training and nutrition designed by Dr. Eyad Bassem for measurable, lasting transformation.</p>
  <a href="#cta" class="hero-btn">Begin Your Transformation</a>
</section>

<!-- About -->
<section class="about" id="about">
  <div class="container">
    <div class="about-image-wrapper reveal-left">
      <img src="data:image/jpeg;base64,/9j/4AAQSk..." alt="Dr. Eyad Bassem" class="about-image">
    </div>
    <div class="about-content reveal-right">
      <div class="section-num">01</div>
      <div class="section-label">About</div>
      <div class="section-title">Dr. Eyad <em>Bassem</em></div>
      <p class="about-text">Where transformation begins with understanding. Every program I design is the result of thorough assessment, clinical precision, and an unwavering commitment to your individual goals.</p>
      <p class="about-text">I don't believe in templates. I believe in bespoke coaching — built from evidence-based methods, progressive overload principles, and a deep understanding of your body and lifestyle.</p>
      <p class="about-text">My approach combines structured training periodization with flexible, sustainable nutrition — giving you both the discipline of a system and the freedom to live your life.</p>
      <div class="about-stats stagger-children">
        <div class="about-stat">
          <div class="about-stat-number" data-count="25" data-suffix="+">25+</div>
          <div class="about-stat-label">Clients Transformed</div>
        </div>
        <div class="about-stat">
          <div class="about-stat-number">1:1</div>
          <div class="about-stat-label">Online Coaching</div>
        </div>
        <div class="about-stat">
          <div class="about-stat-number">100%</div>
          <div class="about-stat-label">Customizable</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process -->
<section class="process" id="process">
  <div class="container">
    <div class="process-header reveal">
      <div class="section-num">02</div>
      <div class="section-label">The Process</div>
      <div class="section-title">From Discovery to <em>Transformation</em></div>
    </div>
    <div class="process-grid stagger-children">
      <div class="process-card">
        <div class="process-card-num">01</div>
        <h3>Discovery</h3>
        <p>We begin with a comprehensive assessment — your health history, exercise background, food preferences, nutritional habits, and personal goals. Every detail matters.</p>
      </div>
      <div class="process-card">
        <div class="process-card-num">02</div>
        <h3>Design</h3>
        <p>Your bespoke program is built from the ground up — a periodized training plan paired with a macro-optimized nutrition strategy, tailored to your lifestyle and schedule.</p>
      </div>
      <div class="process-card">
        <div class="process-card-num">03</div>
        <h3>Execute</h3>
        <p>You train with purpose. Every set, rep, and tempo is prescribed. Every meal is planned with flexibility. I'm with you at every step — adjusting, refining, pushing.</p>
      </div>
      <div class="process-card">
        <div class="process-card-num">04</div>
        <h3>Evolve</h3>
        <p>As your body adapts, so does your program. Progressive overload, cycle transitions, and nutritional recalibrations ensure continuous, measurable progress.</p>
      </div>
    </div>
  </div>
</section>

<!-- Method -->
<section class="method" id="method">
  <div class="container">
    <div class="method-header reveal">
      <div class="section-num">03</div>
      <div class="section-label">The Method</div>
      <div class="section-title">Evidence-Based. <em>Results-Driven.</em></div>
    </div>
    <p class="method-desc reveal">Every program is structured around three pillars — each one essential, none negotiable. Together they form a system designed to deliver lasting transformation.</p>
    <div class="method-grid stagger-children">
      <div class="method-card">
        <div class="method-icon">[icon]</div>
        <h3>Periodized Training</h3>
        <p>Flexibility and mobility work, strength training, explosive training, functional training, and structured cardiovascular programming — all tailored to your phase and goals.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">[icon]</div>
        <h3>Nutrition Strategy</h3>
        <p>Macro-focused meal plans with flexible adherence strategies, emphasizing nutrient timing and long-term sustainability.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">[icon]</div>
        <h3>Behavioral Coaching</h3>
        <p>Habit-based change, accountability, and coaching psychology to ensure you stick with the program and iterate when needed.</p>
      </div>
    </div>
  </div>
</section>

<!-- Calculator -->
<section class="calculator" id="calculator">
  <div class="container">
    <div class="calculator-header">
      <div class="section-num">04</div>
      <div class="section-label">Calculator</div>
      <div class="section-title">Find your starting point</div>
    </div>
    <p class="calculator-desc">A quick estimator for calorie needs and macro targets. Use it as a baseline and refine with coaching.</p>
    <div class="calc-form">
      <!-- Simplified: keep static example inputs; full JS calculator can be added later -->
      <div class="form-label">Sex</div>
      <div class="toggle-group"><button class="toggle-btn active">Male</button><button class="toggle-btn">Female</button></div>
      <div style="height:24px"></div>
      <a class="calc-btn" href="#">Calculate (demo)</a>
    </div>
  </div>
</section>

<!-- Results -->
<section class="results" id="results">
  <div class="container">
    <div class="results-header">
      <div class="section-num">05</div>
      <div class="section-label">Results</div>
      <div class="section-title">Real outcomes, measured</div>
    </div>
    <div class="results-cards">
      <div class="result-testimonial">
        <div class="result-quote">"I gained the confidence and consistency I lacked — and the results followed."</div>
        <div class="result-metric">+12kg</div>
        <div class="result-type">Muscle gain</div>
      </div>
      <div class="result-testimonial">
        <div class="result-quote">"Sustainable fat loss without feeling deprived."</div>
        <div class="result-metric">-8%</div>
        <div class="result-type">Body fat</div>
      </div>
      <div class="result-testimonial">
        <div class="result-quote">"I finally understand how to train and eat for my life."</div>
        <div class="result-metric">Consistent</div>
        <div class="result-type">Habits</div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq" id="faq">
  <div class="container">
    <div class="faq-header">
      <div class="section-num">06</div>
      <div class="section-label">FAQ</div>
      <div class="section-title">Common questions</div>
    </div>
    <div class="faq-grid">
      <div class="faq-item">
        <div class="faq-item-header"><div class="faq-question">How quickly will I see results?</div><div class="faq-toggle">+</div></div>
        <div class="faq-answer">Individual results vary but most clients notice measurable changes in 6–12 weeks with consistent effort.</div>
      </div>
      <div class="faq-item">
        <div class="faq-item-header"><div class="faq-question">Do I have to follow a strict diet?</div><div class="faq-toggle">+</div></div>
        <div class="faq-answer">No — the plan emphasizes flexible adherence and sustainable habits rather than rigid rules.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta" id="cta">
  <div class="container">
    <div class="cta-desc">Ready to start? Book a consultation and we'll assess your needs, set measurable goals, and build a personalized plan.</div>
    <a href="#" class="cta-btn">Start Now</a>
  </div>
</section>

@endsection

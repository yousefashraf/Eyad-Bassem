@extends('layouts.app')

@section('title','Evolved & Balanced')

@section('content')
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

<!-- About (condensed) -->
<section class="about" id="about">
  <div class="container">
    <div class="about-content">
      <div class="section-num">01</div>
      <div class="section-label">About</div>
      <div class="section-title">Dr. Eyad <em>Bassem</em></div>
      <p class="about-text">Where transformation begins with understanding. Every program I design is the result of thorough assessment, clinical precision, and an unwavering commitment to your individuality.</p>
    </div>
  </div>
</section>

@include('partials.footer')
@endsection

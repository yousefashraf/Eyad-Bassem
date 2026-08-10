@extends('layouts.app')

@section('title','Evolved & Balanced')

@push('head')
  {{-- Page-specific head items (fonts, meta) can go here if needed --}}
@endpush

@section('content')
  {{-- HERO (converted from evolved-and-balanced.html) --}}
  <section class="hero" id="hero" style="min-height:60vh;padding:80px 24px;text-align:center;background:#0a0a0a;color:#e8e0d0;">
    <div class="hero-badge" style="font-weight:700;letter-spacing:4px;margin-bottom:24px;">EVOLVED AND BALANCED — EVIDENCE-BASED COACHING</div>
    <h1 style="font-family:serif;font-size:clamp(32px,6vw,64px);line-height:1.05;margin-bottom:16px;">
      <span style="color:#c9a84c;font-style:italic;">Evolve</span> Your Physique
      <span style="display:block;color:#c9a84c;font-style:italic;margin:10px 0;">&amp;</span>
      <span style="color:#c9a84c;font-style:italic;">Balance</span> Your Potential
    </h1>
    <p style="max-width:680px;margin:24px auto 32px;color:#d5cfc4;font-family:serif;">Precision coaching rooted in science. Personalized training and nutrition designed by Dr. Eyad Bassem for measurable, lasting transformation.</p>
    <a href="#cta" class="hero-btn" style="display:inline-block;padding:14px 40px;background:#e8e0d0;color:#0a0a0a;text-transform:uppercase;font-weight:700;">Begin Your Transformation</a>
  </section>

  {{-- ABOUT (condensed) --}}
  <section id="about" style="padding:48px 24px;background:#151515;color:#e8e0d0;">
    <div class="container" style="max-width:1100px;margin:0 auto;">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:center;">
        <div>
          {{-- Replace with <img src="{{ asset('images/about.jpg') }}" alt="About" /> when moving assets --}}
          <div style="background:#222;height:320px;border-radius:6px;display:flex;align-items:center;justify-content:center;color:#777;">About image placeholder</div>
        </div>
        <div>
          <div class="section-num" style="color:#c9a84c;font-style:italic">01</div>
          <div class="section-label" style="text-transform:uppercase;letter-spacing:4px;color:#d5cfc4;margin:6px 0;font-weight:700">About</div>
          <h2 style="font-family:serif;font-size:28px;margin-bottom:12px;">Dr. Eyad <em>Bassem</em></h2>
          <p style="font-family:serif;color:#d5cfc4;line-height:1.7;">Where transformation begins with understanding. Every program I design is the result of thorough assessment, clinical precision, and an unwavering commitment to your individual goals.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Placeholder for additional sections: process, method, calculator, results, faq, cta --}}
  <section id="process" style="padding:48px 24px;">
    <div class="container" style="max-width:1100px;margin:0 auto;color:#e8e0d0;"> <!-- condensed process block -->
      <h3 style="font-family:serif;color:#e8e0d0;">The Process</h3>
      <p style="color:#d5cfc4;">Content moved into a Blade view. Extract repeated pieces into components as needed.</p>
    </div>
  </section>

@endsection

@push('scripts')
  {{-- Page-specific JS can be pushed here --}}
@endpush

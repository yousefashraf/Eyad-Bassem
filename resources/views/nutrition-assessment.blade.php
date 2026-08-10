@extends('layouts.app')

@section('title','Nutrition Assessment')

@section('content')
<div class="top-bar">
  <div class="mark">
    <div class="mark-glyph">&amp;</div>
    <div class="mark-text">
      <div class="name">EVOLVED &amp; BALANCED</div>
      <div class="sub">DR. EYAD BASSEM</div>
    </div>
  </div>
  <div class="doc-label">Nutrition Assessment<span id="dateStamp"></span></div>
</div>

<section class="hero">
  <div class="hero-eyebrow">The</div>
  <h1>Nutrition Assessment</h1>
  <div class="hero-rule"></div>
  <p class="hero-desc">Where informed choices create lasting results. This assessment uncovers your habits, challenges, and goals with clarity and care — so your program can be built around you.</p>
  <div class="hero-meta">+2 01030590145 &nbsp;·&nbsp; eyad.bassem98@hotmail.com &nbsp;·&nbsp; @eyadbassem_</div>
</section>

<div class="form-shell">
  <div class="progress-wrap">
    <div class="step-dots" id="stepDots"></div>
    <div class="progress-track"><div class="progress-fill" id="progressFill" style="width:10%"></div></div>
    <div class="progress-text"><span id="stepLabel">Step 1 of 10 · Client Information</span><span class="pct" id="progressPct">10%</span></div>
  </div>

  <form id="assessmentForm" method="POST" action="#">
    @csrf
    <div class="section active" data-step="1" id="step-1">
      <div class="section-bar"><span class="num">01</span><h2>Client Information</h2></div>
      <div class="section-body">
        <div class="field"><label class="field-label">Full Name</label>
          <div class="input-wrap"><input type="text" name="fullName" placeholder="Enter your full name"></div>
        </div>
        <div class="row-2">
          <div class="field"><label class="field-label">Date of Birth</label>
            <div class="input-wrap"><input type="date" name="dob"></div>
          </div>
          <div class="field"><label class="field-label">Gender</label>
            <div class="pill-group" data-group="gender">
              <div class="pill" data-value="Male">Male</div>
              <div class="pill" data-value="Female">Female</div>
            </div>
          </div>
        </div>
        <div class="step-nav">
          <span></span>
          <button type="button" class="wiz-btn next" data-next>Next</button>
        </div>
      </div>
    </div>

    <!-- step placeholders preserved; full form fields from original file are in the repository for reference -->
  </form>
</div>

@include('partials.footer')
@endsection

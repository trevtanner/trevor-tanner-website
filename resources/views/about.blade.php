@extends('layouts.app')
@section('title')
    <title>TT About Me</title>
@endsection
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/battlestation.jpg')" alt="Battlestation Credit:Josh Sorenson from Pexels">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <div class="site-heading text-center">
                    <h1>Trevor Tanner</h1>
                    <br>
                    <span class="subheading text-center">
                        Programmer and general computer nerd
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="#">
                    <h1 class="post-title">
                    Who am I?
                    </h1>
                </a>
                <p class="">
                    Programming is my passion, and love to work and projects even in my free time. When I'm not writing code
                    I'm working on my PC, or playing video games. My computer is my home and the best work is done when the
                    two are perfectly integrated.
                </p>
                <p class="post-meta">"Coffee and a freshly started PC are the best way to start a day"</p>
            </div>
            <hr>
            <div class="post-preview">
                    <h1 class="post-title">
                        Favorite Things to do Outside of Development
                    </h1>
                <p>
                    <ul>
                    <li>Gaming</li>
                    <li>Working out</li>
                    <li>Watching any of Bay Area teams play</li>
                    <li>Anything involving lacrosse, including stringing</li>
                </ul>
                </p>
            </div>
            <hr>
            <div class="post-preview">
                <h1 class="post-title text-center">
            My Development Hardware and Software
                </h1>
              <div class="row pt-2">
                  <div class="col-4">
                      <h2 class="text-center">Hardware</h2>
                      <ul>
                          <li>Apple MacBook Pro running Linux Ubuntu</li>
                          <li><a href="#">Custom build computer running Windows10</a></li>
                          <li>Good ol' fashioned pen and paper</li>
                      </ul>
                  </div>
                  <div class="col-1"></div>
                  <div class="col-4 pr-2">
                      <h2>Software</h2>
                      <ul>
                          <li>PHPStorm</li>
                          <li>Atom Text Editor</li>
                          <li>Laravel Forge</li>
                          <li>DigitalOcean</li>
                      </ul>
                  </div>
                  <div class="col-3">
                      <h2>Other</h2>
                      Languages
                      <ul>
                          <li>PHP</li>
                          <li>JS</li>
                      </ul>
                      Framework
                      <ul>
                          <li>Laravel</li>
                      </ul>
                  </div>
              </div>
            </div>
    </div>
</div>

<hr>

@endsection

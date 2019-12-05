@extends('layouts.app')
@section('title')
    <title>TT Web Development & Design - About</title>
    <meta name="description" content="A deeper look into the Founder/Lead Programmer of TT Web Development & Design Trevor
    Tanner. Information includes a general about paragraph and interest outside of creating and designing websites.">
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/battlestation.jpg')"
            alt="Battlestation Credit:Josh Sorenson from Pexels">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-left">
                        <h1>About Me</h1>
                        <br>
                        <span class="subheading text-left">
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
                        Programming is my passion, and love to work and projects even in my free time. When I'm not
                        writing code
                        I'm working on my PC, or playing video games. My computer is my home and the best work is done
                        when the
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
                        <li>All things related to the Bay Area teams (Giants, 49ers, and Warriors)</li>
                        <li>Anything involving lacrosse, but I enjoy watching or playing most sports</li>
                    </ul>
                    </p>
                </div>
                <hr>
                <div class="post-preview">
                    <h1 class="post-title">
                        Trevor's Personal Blog - (Coming Soon)
                    </h1>
                    <p>
                        This page is just a small glimpse into the man Trevor is. If you'd like to get a more in-depth
                        look
                        at my day-to-day life, as well as any major events, please head over to my blog. Here you can
                        get a real
                        idea of who I am, as well as things I do in my free time. A working relationship works best if
                        you really
                        know who you're working with, and this a great way to get that insight on me.
                    </p>
                    {{--                  <a class="btn blogbtn" href="trevorstanner.blog" target="_blank">My Blog</a>--}}
                </div>
            </div>
        </div>
        <hr>
    </div>

@endsection

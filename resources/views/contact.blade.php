@extends('layouts.app')
@section('title')
    <title>TT Contact</title>
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contactus.jpg')" alt="Contact Us Photo Credit:StartupStockPhotos from Pixabay">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-left">
                        <h1>Contact Me</h1>
                        <br>
                        <span class="subheading text-left">
                        Let's get started on your website today
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container d-flex">
        <div class="col-6">
            <p>
Do any of these appy to you?
            <ul>
                <li>Have a question about a built website</li>
                <li>Interested in having me build your website</li>
                <li>A current client with a question about your product</li>
                <li>You have feedback you would like me to see</li>
                <li>Looking to give me a job</li>
            </ul>
        </p>
            <p>
If so, please fill out the form to the right.
            </p>
            <div class="text-right text-muted">
                -Trevor Tanner
            </div>
        </div>
        <div class="col-6">
            <card class="card-default">
                <div class="card-header">
                    Contact Me
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form action="{{  route('contactus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" name="message" value=""></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success contactform">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </card>
        </div>
    </div>

@endsection

@extends("frontend.layout")
@section("home")

<div class="content-area error-page" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <h2 class="error-title">404</h2>
                        <p>Sorry, the page you requested may have been moved or deleted</p>
                        <a href="{{ url('/') }}" class="btn btn-default">Home</a>                        
                    </div>
                </div> 
            </div>
        </div> 
@endsection
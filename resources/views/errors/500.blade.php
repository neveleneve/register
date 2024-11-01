@extends('layouts.app', [
    'footer' => false,
])

@section('content')
    <div class="container">
        <div class="error-page">
            <h2 class="headline text-danger">500</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>
                <p>
                    We're currently experiencing an internal error. Please try again later.
                    Meanwhile, you may <a href="{{ route('landing-page') }}">return to the homepage</a> or report this issue
                    to the
                    support team.
                </p>
            </div>
        </div>
    </div>
@endsection

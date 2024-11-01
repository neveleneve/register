@extends('layouts.app', [
    'footer' => false,
])

@section('content')
    <div class="container">
        <div class="error-page">
            <h2 class="headline text-warning">419</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page Expired.</h3>
                <p>
                    The page has expired due to inactivity. Please refresh the page and try again.
                    You may also <a href="{{ route('landing-page') }}">return to home</a>.
                </p>
            </div>
        </div>
    </div>
@endsection

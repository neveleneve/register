@extends('layouts.app', [
    'footer' => false,
])

@section('content')
    <div class="container">
        <div class="error-page">
            <h2 class="headline text-warning">405</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Method Not Allowed.</h3>
                <p>
                    The request method is not allowed for the page you were trying to access.
                    You may <a href="{{ route('landing-page') }}">return to home</a> or try navigating to a different page.
                </p>
            </div>
        </div>
    </div>
@endsection

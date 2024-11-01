@extends('layouts.app', [
    'footer' => false,
])

@section('content')
    <div class="container">
        <div class="error-page">
            <h2 class="headline text-warning">503</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Service Temporarily Unavailable.</h3>
                <p>
                    We're currently performing maintenance or facing high traffic. Please check back in a while.
                    If the problem persists, feel free to reach out to us for more information.
                </p>
                <p>
                    We apologize for the inconvenience and appreciate your patience.
                </p>
            </div>
        </div>
    </div>
@endsection

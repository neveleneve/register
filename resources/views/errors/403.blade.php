@extends('layouts.app', [
    'footer' => false,
])

@section('content')
    <div class="container">
        <div class="error-page">
            <h2 class="headline text-warning">403</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Access denied.</h3>
                <p>
                    You don't have permission to access this page.
                    Meanwhile, you may <a href="{{ route('landing-page') }}">return to the homepage</a> or contact the site
                    administrator if you believe this is a mistake.
                </p>
            </div>

            <!-- /.error-content -->
        </div>
    </div>
    <!-- /.error-page -->
@endsection

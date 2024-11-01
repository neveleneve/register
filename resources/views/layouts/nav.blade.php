<nav class="main-header navbar navbar-expand-md navbar-dark bg-booking">
    <div class="container">
        <a href="{{ route('landing-page') }}" class="navbar-brand animate__animated animate__pulse"
            style="animation-iteration-count: 1;">
            {{-- <img src="{{ asset('assets/images/logo.png') }}" class="brand-image img-circle elevation-3 "
                style="opacity: .8"> --}}
            <span class="brand-text font-weight-bold">{{ config('app.name') }}</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">

        </div>
        <ul class="navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
                <a href="#" id="language" class="nav-link " data-toggle="modal" data-target="#languageModal">
                    <i class="fi fi-{{ config('language.' . App::getLocale() . '.flag') }} flag-icon-rounded"></i>
                </a>
            </li>
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div id="dropdownMenu" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item font-weight-bold mb-0">
                            {{ __('message.name') }} : {{ Auth::user()->name }}
                        </span>
                        @role('member')
                            <span class="dropdown-item font-weight-bold">
                                {{ __('message.level_member') }} : {{ Auth::user()->level }}
                            </span>
                            <span class="dropdown-item font-weight-bold">
                                {{ __('message.balance') }} : Rp {{ number_format(Auth::user()->saldo->total, 0, ',', '.') }}
                            </span>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-widget="control-sidebar" data-target="#profile-sidebar"
                                data-slide="true" href="#" role="button">
                                <i class="fas fa-user mr-2"></i> {{ __('message.account_profile') }}
                            </a>
                            <a class="dropdown-item" data-widget="control-sidebar" data-target="#message-sidebar"
                                data-slide="true" href="#" role="button">
                                <i class="fas fa-envelope mr-2"></i> {{ __('message.message') }}
                            </a>
                            <a class="dropdown-item" data-widget="control-sidebar" data-target="#password-sidebar"
                                data-slide="true" href="#" role="button">
                                <i class="fas fa-lock mr-2"></i> {{ __('message.change_password') }}
                            </a>
                            <a class="dropdown-item" data-widget="control-sidebar" data-target="#contact-sidebar"
                                data-slide="true" href="#" role="button">
                                <i class="fab fa-whatsapp mr-2"></i> {{ __('message.contact_us') }}
                            </a>
                            <a class="dropdown-item" data-widget="control-sidebar" data-target="#setting-sidebar"
                                data-slide="true" href="#" role="button">
                                <i class="fas fa-cog mr-2"></i> {{ __('message.setting') }}
                            </a>
                        @endrole
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger btn-block font-weight-bold">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                {{ __('message.logout') }}
                            </button>
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
@push('customaside')
    @auth
        <aside class="control-sidebar control-sidebar-light" id="profile-sidebar">
            <div class="container">
                <div class="row mt-3 py-3">
                    <div class="col-12">
                        <h3 class="text-center text-dark font-weight-bold">
                            <i class="fas fa-user mr-2"></i>
                            {{ __('message.account_profile') }}
                        </h3>
                        <hr>
                    </div>
                    <div class="col-12 text-nowrap">
                        <div class="row justify-content-center mb-3">
                            <div class="col-10 col-lg-4 text-lg-right font-weight-bold">{{ __('message.name') }} :</div>
                            <div class="col-10 col-lg-5">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-10 col-lg-4 text-lg-right font-weight-bold">{{ __('message.email') }} :</div>
                            <div class="col-10 col-lg-5">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-10 col-lg-4 text-lg-right font-weight-bold">{{ __('message.phone_number') }} :
                            </div>
                            <div class="col-10 col-lg-5">{{ Auth::user()->phone }}</div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-10 col-lg-4 text-lg-right font-weight-bold">{{ __('message.level_member') }} :
                            </div>
                            <div class="col-10 col-lg-5">{{ ucwords(Auth::user()->level) }}</div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-10 col-lg-4 text-lg-right font-weight-bold">{{ __('message.account_status') }} :
                            </div>
                            <div class="col-10 col-lg-5">{{ __('message.' . Auth::user()->status) }}</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btnx btn-outline-booking btn-block font-weight-bold" data-widget="control-sidebar"
                            data-target="#profile-sidebar" data-slide="true" href="#" role="button">
                            {{-- <i class="fas fa-chevron-left"></i> --}}
                            {{ __('message.close') }}
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="control-sidebar control-sidebar-light" id="message-sidebar">
            <div class="container">
                <div class="row mt-3 py-3">
                    <div class="col-12">
                        <h3 class="text-center text-dark font-weight-bold">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ __('message.message') }}
                        </h3>
                        <hr>
                    </div>
                    <div class="col-12">
                        <h1 class="text-center font-weight-bold my-5">
                            {{ __('message.no_message') }}
                        </h1>
                    </div>
                    <div class="col-12">
                        <a class="btnx btn-outline-booking btn-block font-weight-bold" data-widget="control-sidebar"
                            data-target="#message-sidebar" data-slide="true" href="#" role="button">
                            {{ __('message.close') }}
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="control-sidebar control-sidebar-light w-auto" id="password-sidebar">
            <div class="container">
                <form method="post" action="{{ route('password.change') }}" class="row mt-3 py-3">
                    @csrf
                    <div class="col-12">
                        <h3 class="text-center text-dark font-weight-bold">
                            <i class="fas fa-lock mr-2"></i>
                            {{ __('message.change_password') }}
                        </h3>
                        <hr>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="current_password">{{ __('message.current_password') }}</label>
                        <input type="password" id="current_password" name="current_password" class="form-control" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="new_password">{{ __('message.new_password') }}</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="new_password_confirmation">{{ __('message.confirm_new_password') }}</label>
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                            class="form-control" required>
                    </div>
                    <div class="col-12">
                        <button class="btnx btn-booking btn-block font-weight-bold">
                            {{ __('message.update') }}
                        </button>
                        <a class="btnx btn-outline-booking btn-block font-weight-bold" data-widget="control-sidebar"
                            data-target="#password-sidebar" data-slide="true" href="#" role="button">
                            {{ __('message.close') }}
                        </a>
                    </div>
                </form>
            </div>
        </aside>
        <aside class="control-sidebar control-sidebar-light" id="contact-sidebar">
            <div class="container">
                <div class="row mt-3 py-3">
                    <div class="col-12">
                        <h3 class="text-center text-dark font-weight-bold">
                            <i class="fab fa-whatsapp mr-2"></i>
                            {{ __('message.contact_us') }}
                        </h3>
                        <hr>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-2 text-center">
                                <h1 class="h3 font-weight-bold text-success">
                                    <i class="fab fa-whatsapp"></i>
                                </h1>
                            </div>
                            <div class="col-md-5 col-8">
                                <h1 class="h5 font-weight-bold">
                                    Customer Service
                                    <br>
                                    <a href="https://wa.me/6285143494125" class="h6">
                                        +62 851-4349-4125
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-2 text-center">
                                <h1 class="h3 font-weight-bold text-booking">
                                    <i class="fab fa-telegram"></i>
                                </h1>
                            </div>
                            <div class="col-md-5 col-8">
                                <h1 class="h5 font-weight-bold">
                                    Telegram
                                    <br>
                                    <a href="https://t.me/mitrabooking" class="h6">@mitrabooking</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-2 text-center">
                                <h1 class="h3 font-weight-bold">
                                    <i class="fas fa-envelope"></i>
                                </h1>
                            </div>
                            <div class="col-md-5 col-8">
                                <h1 class="h5 font-weight-bold">
                                    Customer Service
                                    <br>
                                    <a href="mailto:admin-pusat@mitra-booking.com"
                                        class="h6">admin-pusat@mitra-booking.com</a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btnx btn-outline-booking btn-block font-weight-bold" data-widget="control-sidebar"
                            data-target="#contact-sidebar" data-slide="true" href="#" role="button">
                            {{ __('message.close') }}
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="control-sidebar control-sidebar-light" id="setting-sidebar">
            <div class="container">
                <div class="row mt-3 py-3">
                    <div class="col-12">
                        <h3 class="text-center text-dark font-weight-bold">
                            <i class="fas fa-cog mr-2"></i>
                            {{ __('message.setting') }}
                        </h3>
                        <hr>
                    </div>
                    <div class="col-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">{{ __('message.notification') }}</td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" name="notification" id="active_notif" checked value="1">
                                        <label for="active_notif">{{ __('message.active') }}</label>
                                        <input type="radio" name="notification" id="deactive_notif" value="0">
                                        <label for="deactive_notif">{{ __('message.deactive') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">{{ __('message.theme') }}</td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" name="theme" id="light" checked value="1">
                                        <label for="light">{{ __('message.light') }}</label>
                                        <input type="radio" name="theme" id="dark" value="0">
                                        <label for="dark">{{ __('message.dark') }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">{{ __('message.font_size') }}</td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" name="font" id="small" value="1">
                                        <label for="small">{{ __('message.small') }}</label>
                                        <input type="radio" name="font" id="medium" checked value="0">
                                        <label for="medium">{{ __('message.medium') }}</label>
                                        <input type="radio" name="font" id="large" value="0">
                                        <label for="large">{{ __('message.large') }}</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12">
                        <a class="btnx btn-outline-booking btn-block font-weight-bold" data-widget="control-sidebar"
                            data-target="#setting-sidebar" data-slide="true" href="#" role="button">
                            {{ __('message.close') }}
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    @endauth
@endpush
<div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                @php
                    $lang = config('language');
                @endphp
                <form action="{{ route('language-switch') }}" method="POST" class="row">
                    @csrf
                    @foreach ($lang as $item)
                        <div class="col-md-3 col-sm-6 col-12">
                            <button name="lang" value="{{ $item['locale'] }}"
                                class="btnx btn-xl {{ App::getLocale() == $item['locale'] ? 'bg-booking text-light' : null }} font-weight-bold btn-block py-3">
                                <i class="fi fi-{{ $item['flag'] }} flag-icon-rounded"></i>
                                {{ $item['name'] }}
                            </button>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>

@push('customjs')
    <script>
        $(document).on('click', '[data-widget="control-sidebar"]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.control-sidebar').removeClass('control-sidebar-open');
            $(target).addClass('control-sidebar-open');
        });
        // $(document).on('click', '[data-widget="control-sidebar"]', function(e) {
        //     e.preventDefault();

        //     var target = $(this).data('target');
        //     var openAside = $('.control-sidebar-open');

        //     if (openAside.length && !openAside.is(target)) {
        //         // Tutup aside yang terbuka dengan animasi
        //         openAside.removeClass('control-sidebar-open').on('transitionend', function() {
        //             // Setelah aside sebelumnya ditutup, buka aside yang baru
        //             $(target).addClass('control-sidebar-open').off('transitionend');
        //         });
        //     } else {
        //         // Jika tidak ada aside terbuka atau target sudah terbuka, langsung buka target
        //         $(target).addClass('control-sidebar-open');
        //     }
        // });
    </script>
@endpush

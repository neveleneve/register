@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.breadcrumb', ['data' => [__('message.register')], 'col' => '8 col-12'])
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-info border-3 rounded-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3 justify-content-center">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end fw-bold">{{ __('message.name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end fw-bold">{{ __('message.phone_number') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end fw-bold">{{ __('message.email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end fw-bold">{{ __('message.password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-center">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end fw-bold">{{ __('message.confirm_password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row justify-content-center ">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input @error('tos') is-invalid @enderror"
                                                type="checkbox" id="tos" name="tos" value="option1" required>
                                            <label for="tos" class="custom-control-label font-weight-normal">
                                                {!! __('message.i_agree_tos_n_ps') !!}
                                            </label>
                                            @error('tos')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1 justify-content-center">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btnx btn-booking btn-block font-weight-bold text-light">
                                        {{ __('message.register') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-12 col-md-6 offset-md-4 text-center">
                                    {{ __('message.have_account') }}
                                    <a href="{{ env('MAIN_APP') }}">{{ __('message.login') }}</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-0 justify-content-center">
                                <div class="col-10 text-center">
                                    {{ __('message.all_rights_reserved') }}
                                    <br>
                                    {{ __('message.copyright') }} © {{ date('Y') }} {{ config('app.name') }}™.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            @forelse ($image as $item)
                <div class="col-md-8 {{ $loop->last ? null : 'mb-3' }}">
                    <img src="{{ env('MAIN_APP', 'https://testing.frdhsym.space') . '/assets/images/banner/' . $item->image_name }}"
                        class="d-block w-100">
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="modal fade" id="modalToS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center h4 font-weight-bold">
                                {!! __('tos.title') !!}
                            </h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                1. {!! __('tos.introduction.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            @for ($i = 0; $i < count(__('tos.introduction.text')); $i++)
                                <p class="text-justify">
                                    {!! __('tos.introduction.text.' . $i) !!}
                                </p>
                            @endfor
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                2. {!! __('tos.parties_involved.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            @for ($i = 0; $i < count(__('tos.parties_involved.text')); $i++)
                                <p class="text-justify">
                                    {!! __('tos.parties_involved.text.' . $i) !!}
                                </p>
                            @endfor
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                3. {!! __('tos.scope_of_collaboration.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            @for ($i = 0; $i < count(__('tos.scope_of_collaboration.text')); $i++)
                                <p class="text-justify">
                                    {!! __('tos.scope_of_collaboration.text.' . $i) !!}
                                </p>
                            @endfor
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                4. {!! __('tos.right_n_obligations.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li>
                                    <h2 class="h6 font-weight-bold">
                                        {!! __('tos.right_n_obligations.text.introduction.title') !!}
                                    </h2>
                                    <p class="text-justify">
                                        {!! __('tos.right_n_obligations.text.introduction.text') !!}
                                    </p>
                                </li>
                                <li>
                                    <h2 class="h6 font-weight-bold">
                                        {!! __('tos.right_n_obligations.text.partner_rights.title') !!}
                                    </h2>
                                    <ul>
                                        @for ($i = 0; $i < count(__('tos.right_n_obligations.text.partner_rights.text')); $i++)
                                            <li>
                                                <h2 class="h6 font-weight-bold">
                                                    {!! __('tos.right_n_obligations.text.partner_rights.text.' . $i . '.title') !!}
                                                </h2>
                                                <p class="text-justify">
                                                    {!! __('tos.right_n_obligations.text.partner_rights.text.' . $i . '.text') !!}
                                                </p>
                                            </li>
                                        @endfor
                                    </ul>
                                <li>
                                    <h2 class="h6 font-weight-bold">
                                        {!! __('tos.right_n_obligations.text.partner_obligations.title') !!}
                                    </h2>
                                    <ul>
                                        @for ($i = 0; $i < count(__('tos.right_n_obligations.text.partner_obligations.text')); $i++)
                                            <li>
                                                <h2 class="h6 font-weight-bold">
                                                    {!! __('tos.right_n_obligations.text.partner_obligations.text.' . $i . '.title') !!}
                                                </h2>
                                                <p class="text-justify">
                                                    {!! __('tos.right_n_obligations.text.partner_obligations.text.' . $i . '.text') !!}
                                                </p>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                5. {!! __('tos.commission_n_payment.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            <ul>
                                @for ($i = 0; $i < count(__('tos.commission_n_payment.text')); $i++)
                                    <li>
                                        <h2 class="h6 font-weight-bold">
                                            {!! __('tos.commission_n_payment.text.' . $i . '.title') !!}
                                        </h2>
                                        <ul>
                                            @for ($j = 0; $j < count(__('tos.commission_n_payment.text.' . $i . '.text')); $j++)
                                                <li>
                                                    <p class="text-justify">
                                                        {!! __('tos.commission_n_payment.text.' . $i . '.text.' . $j) !!}
                                                    </p>
                                                </li>
                                            @endfor
                                        </ul>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                6. {!! __('tos.applicable_laws_n_regulations.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            <ul>
                                @for ($i = 0; $i < count(__('tos.applicable_laws_n_regulations.text')); $i++)
                                    <li>
                                        <p class="text-justify">
                                            {!! __('tos.applicable_laws_n_regulations.text.' . $i) !!}
                                        </p>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                7. {!! __('tos.transfer.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            <ul>
                                @for ($i = 0; $i < count(__('tos.transfer.text')); $i++)
                                    <li>
                                        <p class="text-justify">
                                            {!! __('tos.transfer.text.' . $i) !!}
                                        </p>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                8. {!! __('tos.other_provisions.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            <ul>
                                @for ($i = 0; $i < count(__('tos.other_provisions.text')); $i++)
                                    <li>
                                        <p class="text-justify">
                                            {!! __('tos.other_provisions.text.' . $i) !!}
                                        </p>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h5 font-weight-bold">
                                9. {!! __('tos.contact_us.title') !!}
                            </h2>
                        </div>
                        <div class="col-12">
                            <p class="text-justify">
                                {!! __('tos.contact_us.text') !!}
                            </p>
                            <ul>
                                @for ($i = 0; $i < count(__('tos.contact_us.subtext')); $i++)
                                    <li>
                                        <p class="text-justify">
                                            {!! __('tos.contact_us.subtext.' . $i . '.text') !!}
                                        </p>
                                        @if (array_key_exists(0, __('tos.contact_us.subtext.' . $i . '.subtext')))
                                            <ul>
                                                @for ($j = 0; $j < count(__('tos.contact_us.subtext.' . $i . '.subtext')); $j++)
                                                    <li>{!! __('tos.contact_us.subtext.' . $i . '.subtext.' . $j) !!}</li>
                                                @endfor
                                            </ul>
                                        @endif
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-danger font-weight-bold" data-dismiss="modal">
                        {{ __('message.back') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

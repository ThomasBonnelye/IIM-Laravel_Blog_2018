@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifier votre adresse E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien a été envoyer à votre adresse E-mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, verifiez si vous avez reçu le lien.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici pour recevoir de nouveau votre lien') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

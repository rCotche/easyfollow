@extends('layouts.my_app')
@section('content')
<div class="section section-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mb-5 text-center">
                <h2>Bienvenue !</h2>
                <p>Veuillez vous connectez pour accéder à votre espace</p>
            </div>
            <div class="col-12 col-lg-8">

                {{-- Session Status --}}
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="card bg-primary shadow-soft border-light">
                    @csrf
                    
                    <div class="card-body px-5">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="far fa-user-circle"></span>
                                    </span>
                                </div>
                                <input class="form-control" type="email" id="email"
                                name="email" :value="old('email')" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="far fa-envelope"></span>
                                    </span>
                                </div>
                                <input class="form-control" type="password" id="password"
                                name="password" required autocomplete="current-password">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center pt-0 pb-5">
                        <button type="submit" class="btn btn-primary rounded">
                            Connexion
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h1 class="h6">Creer un compte gratuitement !</h1>
                <div class="card card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="first_name">Prenom : <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" class="form-control">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="last_name">Nom : <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="username">Nom d'utilisateur : <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control">
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Adresse e-mail : <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Genre : <span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-select">
                                <option disabled selected>Selectionner votre genre</option>
                                <option value="male">Masculin</option>
                                <option value="female">Feminin</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mot de passe : <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation">Confirmer mot de passe : <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Creer un compte</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

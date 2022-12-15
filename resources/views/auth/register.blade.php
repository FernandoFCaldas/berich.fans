@extends('layout')

@section('title', 'Register')

@section('content')

<div class="container-7">
  <div class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="css/phoneberich.png" alt="IMG">
      </div>
      <form class="contact1-form" method="POST" action="{{ route('register') }}">
        @csrf
        <span class="contact1-form-title">
          Bem-vindo à Berich
        </span>
        @if (session('success'))
        <div class="flash-success">
          {{ session('success')}}
        </div>
        @endif
        <!--Titulo-->
        <label for="name" class="form-label">Nome:</label>
        @error('name')
        <div class="error">
          {{$message}}
        </div>
        @enderror
        <div class="wrap-input1 has-validation">
          <input type="text" class="input1 @error('name') error-border @enderror" name="name" value="{{ old('name') }}" required>
          <span class="shadow-input1"></span>
          <div class="invalid-feedback">
            É necessário inserir um nome.
          </div>
        </div>
        <!--Email-->
        <label for="email" class="form-label">Email:</label>
        @error('email')
        <div class="error">
          {{$message}}
        </div>
        @enderror
        <div class="wrap-input1 has-validation">
          <input type="text" class="input1 @error('email') error-border @enderror" name="email" value="{{ old('email') }}" required>
          <span class="shadow-input1"></span>
          <div class="invalid-feedback">
            É necessário inserir um email.
          </div>
        </div>
        <!--Senha-->
        <label for="password" class="form-label">Senha:</label>
        @error('password')
        <div class="error">
          {{$message}}
        </div>
        @enderror
        <div class="wrap-input1 has-validation">
          <input type="password" class="input1 @error('password') error-border @enderror" id="password" name="password" required>
          <span class="shadow-input1"></span>
          <div class="invalid-feedback">
            É necessário inserir uma senha.
          </div>
        </div>
        <br>
        <p class="berich-sub-title text-center">Se você já tem uma conta, faça o <a style="color: rgba(36,243,8,1); text-decoration:underline;" href="{{ route('login')}}">Login</a></p>
        <br>
        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn"  href="#">
            <span>
              Registrar
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="css/script.js"></script>
@endsection
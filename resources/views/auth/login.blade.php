@extends('layout')

@section('title', 'Login')

@section('content')

<div class="container-7">
  <div class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="css/phoneberich.png" alt="IMG">
      </div>
      <form class="contact1-form needs-validation" method="POST" action="{{ route('login') }}">
        @csrf
        <span class="contact1-form-title">
          Bem-vindo à Berich
        </span>
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
        <p class="berich-sub-title text-center">Ainda não é registrado? <a style="color: rgba(36,243,8,1); text-decoration:underline;" href="{{ route('register') }}">Registre-se aqui!</a></p>
        <br>
        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn" href="#">
            <span>
              Entrar
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="css/script.js"></script>
@endsection
@extends('layout')

@section('title', 'Login')

@section('content')

<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="container-7">
      <div class="modal-teste">
        <p class="berich-sub-title text-center" style="font-size: 20px;">Bem-vindo a Berich</p>
        <hr class="my-2">
        <!--Email-->
        <label for="email" class="form-label">Email:</label>
        @error('email')
        <div class="error">
          {{$message}}
        </div>
        @enderror
        <div class="input-group has-validation">
          <input type="text" class="form-control @error('email') error-border @enderror" name="email" value="{{ old('email') }}" required>
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
        <div class="input-group has-validation">
          <input type="password" class="form-control @error('password') error-border @enderror" id="password" name="password" required>
          <div class="invalid-feedback">
            É necessário inserir uma senha.
          </div>
        </div>
        <br>
        <p class="berich-sub-title text-center">Ainda não é registrado? <a style="color: rgba(36,243,8,1); text-decoration:underline;" href="{{ route('register') }}">Registre-se aqui!</a></p>
        <!--Button-->
        <hr class="my-4">
        <button class="button-home" style="width: 100%;" type="submit" href="#">Login</button>
      </div>
  </div>

</form>
<script src="css/script.js"></script>
@endsection
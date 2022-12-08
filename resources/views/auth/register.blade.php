@extends('layout')

@section('title', 'Register')

@section('content')

<form method="POST" action="{{ route('register') }}">
  @csrf
  <div class="container-7">
    <div class="modal-container-teste">
      <div class="modal-teste">
        @if (session('success'))
        <div class="flash-success">
          {{ session('success')}}
        </div>
        @endif
        <!--Titulo-->
        <label for="name" class="form-label">Nome do Colaborador:</label>
        @error('name')
        <div class="error">
          {{$message}}
        </div>
        @enderror
        <div class="input-group has-validation">
          <input type="text" class="form-control @error('name') error-border @enderror" name="name" value="{{ old('name') }}" required>
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
        <p class="berich-sub-title text-center">If you already have an account <a style="color: rgba(36,243,8,1); text-decoration:underline;" href="{{ route('login')}}">Login</a></p>
        <br>
        <div class="g-recaptcha" data-sitekey="6LfKKWIjAAAAAI4EeR27iOd2fmksvdqsZGq3dBlR"></div>
        <!--Button-->
        <hr class="my-3">
        <button class="button-home" style="width: 100%;" type="submit" href="#">Register</button>

      </div>
    </div>
  </div>

</form>
<script src="css/script.js"></script>
@endsection
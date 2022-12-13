@extends ('layout')
@section ('title', 'Berich')

@section('content')


<!--FAQ-->
<div class="container-3">
  <hr class="featurette-divider-2" style="color:transparent;">
  <div class="container marketing">
    <hr class="featurette-divider" style="color:transparent;">
    <div class="text-center">
      <img src="/css/100.gif" alt="" width="200" height="199" /><br>
      <hr class="featurette-divider-2" style="color:transparent;">
      <h1 class="berich-title">B E R I C H</h1>
      <p class="berich-sub-title">Somos uma plataforma 100% gratuita que conecta recrutadores com futuros colaboradores.</p>
      <hr class="featurette-divider-2" style="color:transparent;">
      <a class="button-home-2" type="button" href="{{ route('cursos') }}">Vagas</a>
      <a class="button-home-2" type="button" href="{{ route('register') }}">Registre-se</a>
    </div>
  </div>
</div>

<script src="css/script.js"></script>
@endsection
@extends ('layout')
@section ('title', 'Publicação')
@section('content')


<form method="POST" class="needs-validation" novalidate enctype="multipart/form-data" action="{{ route('posts.store') }}">
  @csrf
  <div class="container-8">
    <hr class="featurette-divider" style="color:transparent;">
    <div class="org-accordion">
      <div class="container">
        <hr class="featurette-divider-2" style="color:transparent;">
        <!--divasaoFAQ!-->
        <div class="faq">
          <div class="answer">
            @if (session('success'))
            <div class="flash-success">
              {{ session('success')}}
            </div>
            @endif
            <div class="row limit">
              <div class="col-md-6 text-start">
                <!--Titulo-->
                <label for="title" class="form-label">Titulo da Vaga</label>
                @error('title')
                <div class="error">
                  {{$message}}
                </div>
                @enderror
                <div class="input-group has-validation">
                  <input type="text" class="form-control @error('title') error-border @enderror" name="title" value="{{ old('title') }}" placeholder="Developer PHP Jr / Front-end Jr" required>
                  <div class="invalid-feedback">
                    É necessário inserir um título.
                  </div>
                </div>
                <!--Company-->
                <label for="company" class="form-label">Empresa</label>
                <select class="form-select" name="company" id="company">
                  <option selected value="{{ Auth::user()->company }}">{{ Auth::user()->company }}</option>
                </select>
                <!--Salary Expectation-->
                <label for="salaryExpectation" class="form-label">Salario</label>
                <select class="form-select" name="salaryExpectation" id="salaryExpectation">
                  <option selected value="1000R$ +">1000R$ +</option>
                  <option value="2000R$ +">2000R$ +</option>
                  <option value="3000R$ +">3000R$ +</option>
                  <option value="4000R$ +">4000R$ +</option>
                  <option value="5000R$ +">5000R$ +</option>
                  <option value="6000R$ +">6000R$ +</option>
                  <option value="7000R$ +">7000R$ +</option>
                  <option value="8000R$ +">8000R$ +</option>
                  <option value="9000R$ +">9000R$ +</option>
                  <option value="10000R$ +">10000R$ +</option>
                  <option value="À combinar">À Combinar</option>
                  <option value="Estágio">Estágio</option>
                </select>
                <!--Contract-->
                <label for="Tipo" class="form-label">Tipo</label>
                <select class="form-select" name="contract" id="contract">
                  <option selected value="Contrato">Contrato</option>
                  <option value="CLT">CLT</option>
                  <option value="PJ">PJ</option>
                  <option value="MEI">MEI</option>
                  <option value="À combinar">À combinar</option>
                </select>
                <!--Location-->
                <label for="location" class="form-label">Local</label>
                @error('location')
                <div class="error">
                  {{$message}}
                </div>
                @enderror
                <div class="input-group has-validation">
                  <input type="text" class="form-control @error('location') error-border @enderror" name="location" value="{{ old('location') }}" placeholder="Ex: Remoto(Qualquer Lugar) / Hibrido(SP) / Presencial(MG)" required>
                  <div class="invalid-feedback">
                    É necessário inserir um local.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <!--Description-->
                  <label for="description" class="form-label">Requisitos</label>
                  <textarea name="description" style="height: 450px;">{{ old('description') }}</textarea>
                </div>
              </div>
            </div>
            <!--Button-->
            <hr class="my-4">
            <button class="button-home" style="width: 100%;" type="submit" href="#">Postar</button>
          </div>
        </div>
      </div>
    </div>
    <script src="/css/script.js"></script>
</form>

@endsection
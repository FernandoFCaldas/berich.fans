@extends ('layout')
@section ('title', 'Cadastro Recrutador')
@section('content')
<div class="container-7">
    <div class="contact1">

        <div class="container-contact1">

            <div class="contact1-pic js-tilt" data-tilt>
                <span class="text-muted">
                    Sua solicitação será analisada! Após analise, lhe enviaremos um e-mail como resposta. O acesso para postar vagas e verificar currículos estará disponível.
                </span>
                <img src="css/img-01.png" alt="IMG">
            </div>

            <form class="contact1-form" action="https://formspree.io/f/xaykrgdg" method="POST">
                @csrf
                <span class="contact1-form-title">
                    Cadastro Recrutador
                </span>
                <div class="wrap-input1" data-validate="Nome é necessário">
                    <input class="input1" type="text" name="name" placeholder="Nome">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1" data-validate="É necessário um e-mail válido: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1" data-validate="Assunto é necessário">
                    <input class="input1" type="text" name="subject" placeholder="Assunto">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1" data-validate="Menssagem é necessária">
                    <textarea class="input1" name="message" placeholder="Menssagem"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
                        <span>
                            Enviar
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="css/script.js"></script>
@endsection
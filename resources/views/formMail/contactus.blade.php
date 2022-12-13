@extends ('layout')
@section ('title', 'Fale Conosco')
@section('content')
<div class="container-7">
<section class="mb-4">
    
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4" style="color:white;">Fale Conosco</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Você tem alguma pergunta? Alguma sugestão/reclamação? Fique a vontade para nos dizer, responderemos assim que possível. </p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="https://formspree.io/f/xaykrgdg" method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Nome</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Assunto</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                        <label for="message">Menssagem</label>
                        <br>
                            <textarea type="text" id="message" name="message" rows="2" style="height: 200px;"></textarea>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

            </form>
            <br>
            <div class="text-center text-md-left">
            <a class="btn btn-primary" type="submit">Enviar</a>
            </div>
        </div>
        <!--Grid column-->
    </div>
    
</section>
</div>
@endsection
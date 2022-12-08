@extends ('layout')
@section ('title', 'Free Agents')
@section('content')

<div class="container-8">
    <hr class="featurette-divider" style="color:transparent;">
    <div class="org-accordion">
        <div class="container">
            <hr class="featurette-divider-2" style="color:transparent;">
            <!--divasaoFAQ!-->
            <div class="row">
                <div class="col-md-8">
                    @foreach ($curriculums as $curriculum)
                    <div class="bck-owner text-start">
                        <h5><a class="title-owner" href="{{ route ('curriculums.show', ['curriculum' => $curriculum->id]) }}">{{ $curriculum->job }}</span></a></h5>
                        <h5><a class="title-owner" style="font-size: 15px;" href="{{ route ('curriculums.show', ['curriculum' => $curriculum->id]) }}">Name: {{ $curriculum->fname }} {{ $curriculum->lname }}</a></h5>
                        <h5 class="title-owner" style="font-size: 15px;">Linkedin: <a style="color: rgba(36,243,8,1);" href="https://www.linkedin.com/in/{{ $curriculum->linkedin }}" target="_blank">{{ $curriculum->linkedin }}</a></h5>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="container-9">
                        <br>
                        <a style="padding: 7px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                        </a>
                        <a style="padding: 7px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <br>
                        <p class="text-start" style="font-size: 14px; padding: 10px;">
                            Berich is a non-profit platform created by <a style="color: rgba(36,243,8,1);" href="https://www.linkedin.com/in/fernando-caldas-50641824a/" target="_blank">Fernando</a> with the intention of promoting the technological market.<br><br>
                            The platform is still under development and will be updated based on user feedback.<br><br>
                            Support us by following our social media.
                        </p>
                    </div>
                </div>
                <br>
                {{$curriculums->links()}}
            </div>
            <!--divasaoFAQ!-->
        </div>
    </div>

    <script src="css/script.js"></script>

    @endsection
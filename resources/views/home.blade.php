@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <!-- side part -->
                            <div class="col-md-3">
                                <div class="profile-image-user text-center">
                                    @if($user->profileImage)
                                        <img src="{{asset('storage/profiles/'.$user->profileImage)}}" class="img-thumbnail " >
                                    @else
                                        <img src="/images/profile/default-user.png" class="img-thumbnail " >
                                    @endif
                                </div>

                                <h4 class="text-center marginTB5">{{ $user->name }}</h4>
                                @if($user->city2)
                                    <p class="text-center">
                                        <small>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{$user->city2}}
                                        </small>
                                    </p>
                                @endif
                                {{--
                                <p class="text-justify">
                                    <em>Acerca de mi:</em><br>
                                    @if($user->aboutMe)
                                        {{$user->aboutMe}}
                                    @else
                                        <small>{{trans('app.MessageAboutMe')}}</small>
                                    @endif
                                </p>
                                --}}
                                <br>
                                <div class="panel-group menu-panel " id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h5 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-circle role-admin"></i> Menú Administrador
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="list-group menu-sidebar">
                                                    <a href="#" class="list-group-item">Torneos</a>
                                                    <a href="#" class="list-group-item">Equipos</a>
                                                    <a href="#" class="list-group-item">Jugadores</a>
                                                    <a href="#" class="list-group-item">Inscripciones</a>
                                                    <a href="#" class="list-group-item">Estadios/Canchas</a>
                                                    <a href="#" class="list-group-item">Árbitros</a>
                                                    <a href="#" class="list-group-item">Estadísticas</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fa fa-circle role-player"></i> Menú Jugador
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <div class="list-group menu-sidebar">
                                                    <a href="#" class="list-group-item">Mis equipos</a>
                                                    <a href="#" class="list-group-item">Mis Torneos</a>
                                                    <a href="#" class="list-group-item">Partidos</a>
                                                    <a href="#" class="list-group-item">Tabla General</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  <i class="fa fa-circle role-referee"></i> Menú Árbitro
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="list-group menu-sidebar">
                                                    <a href="#" class="list-group-item">Próximos partidos</a>
                                                    <a href="#" class="list-group-item">Actas arbitrales</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Central Part -->
                            <div class="col-md-9">
                                <div class="row">
                                    @include('home.homecontent')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        jQuery(document).ready(function(){
            $('#user-tabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });
    </script>
@endsection
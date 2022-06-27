@extends('layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    
                    <div id="willkommen">Willkommen {{ Auth::user()->name }} !


                    </div>
                    <a href="{{ url('/profil') }}">  <div class="card-body dashboard_karte"  >
                        
                                                  <h2 class="dashboard_text"> Mein Profil</h2>
                    </a></div>


                        <div class="card-body dashboard_karte"  >
                    
                        <h2 class="dashboard_text">Wettbewerbe durchsuchen</h2>
                            </div>
                            
                            <div class="card-body dashboard_karte"  >
                    
                    <h2 class="dashboard_text">Wettbewerb erstellen</h2>
                        </div>
                        <div class="card-body dashboard_karte"  >
                    
                    <h2 class="dashboard_text">Credits kaufen</h2>
                        </div>
                        <div class="card-body dashboard_karte"  >
                    
                    <h2 class="dashboard_text">Einstellungen</h2>
                        </div>
                    
                        </div>
                        
                      
                    
                  
                    
                   

                   

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

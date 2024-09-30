@extends('adminlte::page')




@section('title')
Voir Un Stagiaire | laravel Stagiaire App
@endsection

@section('content_header')
    <h1>Voir Un Stagiaire  </h1>
@endsection

@section('content')

 <div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>{{$stagiaire->full_name}}</h4>
                    </div>
                    <hr>
                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                        <a href="{{route('work.certificate',$stagiaire->registration_number)}}" class="btn btn-outline-danger">
                            Certification de Stage
                        </a>
                    </div>

                        </div>
                        <div class="card-body">

                        <div class="form-group mb-3" > <label for="fullname">Numéro d'enregistrement</label>
                        <input type="text" disabled class="form-control" name="registration_number" placeholder="Numéro d'enregistrement"
                        value="{{$stagiaire->registration_number}}">
                        </div>

                        <div class="form-group mb-3" > <label for="fullname">Nom Complet</label>
                            <input type="text" disabled class="form-control" name="full_name" placeholder="Fullname"
                            value="{{$stagiaire->full_name}}">
                            </div>

                        <div class="form-group mb-3" > <label for="fullname">Spécialité</label>
                                <input type="text" disabled class="form-control" name="depart" placeholder="Spécialité"
                                value="{{$stagiaire->depart}}">
                                </div>

                        <div class="form-group mb-3" > <label for="hire_date">Date de Début</label>
                        <input type="date" disabled class="form-control" name="hire_date" placeholder="Date de Début"
                        value="{{$stagiaire->hire_date}}">
                        </div>

                        <div class="form-group mb-3" > <label for="phone">Phone</label>
                        <input type="tel" disabled class="form-control" name="phone" placeholder="Phone"
                        value="{{$stagiaire->phone}}">
                         </div>

                         <div class="form-group mb-3" > <label for="adress">Adress</label>
                            <input type="text" disabled class="form-control" name="adress" placeholder="Adress"
                            value="{{$stagiaire->adress}}">
                             </div>

                        <div class="form-group mb-3" > <label for="adress">City</label>
                                <input type="text" disabled class="form-control" name="city" placeholder="City"
                                value="{{$stagiaire->city}}">
                         </div>

           </div>
        </div>
   </div>
</div>

@endsection



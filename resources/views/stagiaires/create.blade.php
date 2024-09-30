@extends('adminlte::page')




@section('title')
Ajouter un Nouveau Stagiaire | laravel Stagiaire App
@endsection

@section('content_header')
    <h1>Ajouter un Nouveau Stagiaire  </h1>
@endsection

@section('content')

 <div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Ajouter un Nouveau Stagiaire</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('stagiaires.store')}}" class="mt-3" method="POST">
                        @csrf
                        <div class="form-group mb-3" > <label for="fullname">Numéro d'enregistrement</label>
                        <input type="text" class="form-control" name="registration_number" placeholder="Numéro d'enregistrement"
                        value="{{old('registration_number')}}">
                        </div>

                        <div class="form-group mb-3" > <label for="fullname">Nom Complet</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Fullname"
                            value="{{old('full_name')}}">
                            </div>

                        <div class="form-group mb-3" > <label for="fullname">Spécialité</label>
                                <input type="text" class="form-control" name="depart" placeholder="Spécialité"
                                value="{{old('depart')}}">
                                </div>

                        <div class="form-group mb-3" > <label for="hire_date">Date de Début</label>
                        <input type="date" class="form-control" name="hire_date" placeholder="Date de Début"
                        value="{{old('hire_date')}}">
                        </div>

                        <div class="form-group mb-3" > <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone"
                        value="{{old('phone')}}">
                         </div>

                         <div class="form-group mb-3" > <label for="adress">Adress</label>
                            <input type="text" class="form-control" name="adress" placeholder="Adress"
                            value="{{old('adress')}}">
                             </div>

                        <div class="form-group mb-3" > <label for="adress">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City"
                                value="{{old('city')}}">
                         </div>
                         <div class="form-froup">
                            <button type="submit" class="btn btn-primary">
                                    Submit
                            </button>
                         </div>

                    </form>
                </div>
           </div>
        </div>
   </div>
</div>

@endsection



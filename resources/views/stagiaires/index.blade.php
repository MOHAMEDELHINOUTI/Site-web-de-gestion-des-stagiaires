@extends('adminlte::page')




@section('title')
     Liste des Stagiaires | laravel stagiaires App
@endsection

@section('content_header')
    <h1>Liste des Stagiaires  </h1>
@endsection

@section('content')

 <div class="container">

    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Stagiaires</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom et Prénom</th>
                                <th>Specialité</th>
                                <th>Date de début</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stagiaires as $key => $stagiaire)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$stagiaire->full_name}}</td>
                                    <td>{{$stagiaire->depart}}</td>
                                    <td>{{$stagiaire->hire_date}}</td>
                                    <td class='d-flex justify-content-center align-items-center'>
                                     <a href="{{route('stagiaires.show',$stagiaire->registration_number)}} " class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="{{route('stagiaires.edit',$stagiaire->registration_number)}} " class="btn btn-sm btn-warning mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form id="{{$stagiaire->registration_number}}" action="{{route('stagiaires.destroy',$stagiaire->registration_number)}}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <button type="submit"
                                    onclick="deleteEmp({{$stagiaire->registration_number}})"
                                    class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')


    <script>
        new DataTable('#myTable', {
        layout: {
        topStart: {

            buttons: ['copyHtml5', 'csvHtml5', 'excelHtml5', 'pdfHtml5', 'printHtml5']
        }
    }
    });
    function deleteEmp(id){
            Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(id).submit();
            Swal.fire({
                title: "Deleted!",
                text: "Trainer has been deleted.",
                icon: "success"
            });
        }
        });

    }
    </script>

@endsection

      @if (session()->has('success'))
       <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Stagiaire updated successfully",
               // title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 2500
        });

       </script>
      @endif



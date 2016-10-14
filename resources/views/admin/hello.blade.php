@extends('layout')

@section('content')
  <br><br>
  <section id="portfolio1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Dependencias</h2>
                <hr class="star-primary">
            </div>
        </div>
        <br><br>
        <p>A continuacion se muestran la lista de dependencias de gobierno.</p><br>          
        <table class="table">
            <thead>
                <tr class="danger">
                   <th>Organizacion</th>
                   <th>Responsable(s)</th>
                   <th>Telefono(s)</th>
                   <th>Email</th>
                   <th>Direccion</th>
                   <th></th>
                </tr>
            </thead>
            <tbody>
              <?php $clase = true; ?>
              @foreach($companies as $key => $value)
                @if ($clase) 
                  <tr class="active">
                  <?php $clase = false; ?>
                @else
                  <tr class="success">
                  <?php $clase = true; ?>
                @endif
                  <td>{{ $value->company }}</td>
                  <td>{{ isset($value->responsable1) ? $value->responsable1 : 'S/N' }}</td>
                  <td>{{ isset($value->tel1) ? $value->tel1 : 'S/T' }} </td>
                  <td>{{ isset($value->email1) ? $value->email1 : 'S/E' }}</td>
                  <td>{{ isset($value->address) ? $value->address : 'S/D' }}</td>
                  <td id="btn"><a href="{{ route('companyedit', $value->id) }}" id="edit" class="btn btn-primary">Editar</a>
                  <a href="{{ URL::to('companyd/' . $value->id) }}" id="destroy" class="btn btn-danger">Eliminar</a> </td>
                </tr> 
              @endforeach
            </tbody>
        </table>
      <a href="{{ url('companyc') }}" class="btn btn-primary" role="button">Crear Dependencia</a> 
      <br><br>
      <a href="{{ url('pdf') }}" class="btn btn-primary" role="button">Reporte</a>
    </div>
  </section>
  <style type="text/css">
    #edit{
      margin-left: 20px;
    }

    #btn{
      width: 20%;
    }

    td{
      width: 800px; 
    }
  </style>
@endsection
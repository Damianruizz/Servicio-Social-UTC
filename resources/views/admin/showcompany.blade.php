@extends('layout')

@section('content')
    <!-- Portfolio Grid Section -->
    <section id="">
        <div class="container">
            <div class="row" id="hea">
                <div class="col-lg-12 text-center">
                    <h2>Alumnos que estan realizando su servicio en {{ isset($company['company']) ? $company['company'] : 'Default' }}</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <br><br>
   
            <table class="table">
                <thead>
                    <tr class="danger">
                       <th>Alumno</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $clase = true; ?>
                    @foreach($alumnos as $key => $value)
                        @if ($clase) 
                          <tr class="active">
                          <?php $clase = false; ?>
                        @else
                          <tr class="success">
                          <?php $clase = true; ?>
                        @endif
                           <td>{{ isset($value->Nombre) ? $value->Nombre : 'Default' }} {{ isset($value->Apellido_Paterno) ? $value->Apellido_Paterno : 'Default' }} {{ isset($value->Apellido_Materno) ? $value->Apellido_Materno : 'Default' }}<a id="btn1" href="{{ URL::to('quitar/' . $value->id) }}" id="quitar" class="btn btn-primary">Quitar</a></td>
                        </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
    </section>

    <!-- About Section -->
   
    <style type="text/css">
        footer .footer-below {
            background-color: #001887;    
        }

        .navbar-default, .navbar-inverse {
            background-color: rgb(0, 24, 135);
        }

        #btn1{
          margin-left: 135px;
        }

        #btn2{
          margin-left: 45px;
        }

        #hea{
            padding-top: 100px;
        }

        header {
            background: rgb(234, 117, 0);
        }

        section.success{
            background: rgb(234, 117, 0);
        }

        #crud{
            margin-left: 50px;
        }
    </style>
@endsection    

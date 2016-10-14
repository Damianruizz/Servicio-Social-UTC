@extends('layout')

@section('content')
    <!-- Portfolio Grid Section -->
    <section id="portfolio1">
        <div class="container">
            <div class="row" id="hea">
                <div class="col-lg-12 text-center">
                    <h2>Asignacion de Alumnos a Servicio Social</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <br><br>

            <h3>Dependencias</h3><br>          
            <table class="table">
                <thead>
                    <tr class="danger">
                       <th>Organización</th>
                       <th>Responsable</th>
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
                           <td>{{ isset($value->company) ? $value->company : 'Default' }}</td>
                           <td>{{ isset($value->responsable1) ? $value->responsable1 : 'Default' }} </td>
                           <td><a id="btn1" href="{{ URL::to('showdep/' . $value->id) }}" id="edit" class="btn btn-primary">Consultar</a>
                            <a id="btn2" href="{{ URL::to('asigdep/' . $value->id) }}" id="destroy" class="btn btn-danger">Asignar</a></td>
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

<!-- col-lg-offset-2 -->


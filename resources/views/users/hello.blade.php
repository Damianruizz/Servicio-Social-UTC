@extends('layout')

@section('content')

    <!-- Portfolio Grid Section -->
    <section id="portfolio1">
        <div class="container">
            <div class="row" id="hea">
                <div class="col-lg-12 text-center">
                    <h2>Usuarios</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <br><br>
            <p>Lista de usuarios en el sistema</p><br>          
            <table class="table">
                <thead>
                    <tr class="danger">
                       <th>Nombre del responsable</th>
                       <th>Nombre de usuario</th>
                       <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $clase = true; ?>
                    @foreach($users as $key => $value)
                        @if ($clase) 
                          <tr class="active">
                          <?php $clase = false; ?>
                        @else
                          <tr class="success">
                          <?php $clase = true; ?>
                        @endif
                           <td>{{ isset($value->name) ? $value->name : 'Default' }}</td>
                           <td>{{ isset($value->username) ? $value->username : 'Default' }}</td>
                        @if ($user->admin == 1)    
                            @unless ($value->admin == 1) 
                               <td><a id="crud" href="{{ route('useredit', $value->id) }}" id="edit" class="btn btn-primary">Editar</a>
                               <a id="crud" href="{{ URL::to('userd/' . $value->id) }}" id="destroy" class="btn btn-danger">Eliminar</a></td>
                            @endunless
                        @endif
                        </td>
                        </tr>
                    @endforeach
                 </tbody>
            </table>
            
            @if ($user->admin == 1)
                <a href="{{ url('userc') }}" class="btn btn-primary" role="button">Crear Usuario</a>
            @endif
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

        #hea{
            padding-top: 60px;
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


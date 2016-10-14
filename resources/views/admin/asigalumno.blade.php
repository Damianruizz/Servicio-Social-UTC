@extends('layout')

@section('content')
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/js/functions.js"></script>
    <!-- Portfolio Grid Section -->
    <section id="portfolio1">
        <div class="container">
            <div class="row" id="hea">
                <div class="col-lg-12 text-center">
                    <h2 id="asig">Asignando a {{ isset($company['company']) ? $company['company'] : 'Default' }}</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <br><br>
            <table class="table table-bordered">
                <thead>
                  <tr class="danger">
                    <th>Alumno</th>
                    <th>Asignar</th>
                  </tr>
                </thead>
                <tbody>
                    <form role="form" method="post" id="formulario" action="{{ url('asigal') }}">
                        {!! csrf_field() !!}
                        <?php $clase = true; ?>
                        <?php $counter = 0; ?>
                        @foreach($alumnos as $key => $value)
                            @if ($clase) 
                              <tr class="active">
                              <?php $clase = false; ?>
                            @else
                              <tr class="success">
                              <?php $clase = true; ?>
                            @endif
                               <td>{{ isset($value->Nombre) ? $value->Nombre : 'Default' }} {{ isset($value->Apellido_Paterno) ? $value->Apellido_Paterno : 'Default' }} {{ isset($value->Apellido_Materno) ? $value->Apellido_Materno : 'Default' }}</td>
                               <td>
                                    <label class="radio-inline">
                                        <input type="checkbox" name="id_alumno{{$counter}}" value="{{ $value->id }}">
                                    </label>
                                </td>
                            </tr> 
                            <?php $counter += 1; ?>
                        @endforeach   

                        <input type="hidden" name="company_id" value="{{ $company['id'] }}">
                        <input type="hidden" name="cantidad" value="{{ $counter }}">

                        <td>
                            <button type="submit" class="btn btn-primary" id="boton">Terminar</button>    
                        </td>
                    </form>
                </tbody>
            </table>
        </div>
    </section>

    <style type="text/css">
        .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"], .radio input[type="radio"], .radio-inline input[type="radio"] {
            position: initial;
        }

        #portfolio1{
            margin-bottom: 100px;
        }

        #asig{
            padding-top: 50px;
        }
    </style>

    <!-- About Section -->
@endsection    

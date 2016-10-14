<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>UTC | Reporte </title>
  </head>
  <body>
 
    <main>
    <section id="portfolio1">
        <div class="container">
          <div class="row" id="hea">
            <div class="col-lg-12 text-center">
              <h2 id="list">Lista de Dependencias para la realizacion del Servicio Social</h2>
              <hr class="star-primary">
            </div>
          </div>
          <br><br>
        </div>

        <table class="table">
            <thead id="encabezado">
                <tr class="danger" id="cab">
                   <th>Organizacion</th>
                   <th>Responsable(s)</th>
                   <th>Telefono(s)</th>
                   <th>Email</th>
                   <th>Direccion</th>
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
                  <td>{{ isset($value->responsable1) ? $value->responsable1 : 'Default' }}</td>
                  <td>{{ isset($value->tel1) ? $value->tel1 : 'Default' }} </td>
                  <td>{{ isset($value->email1) ? $value->email1 : 'Default' }} </td>
                  <td>{{ isset($value->address) ? $value->address : 'S/D' }} </td>
                </tr> 
              @endforeach
            </tbody>
        </table>
      </section>

    </body>
      
    <style type="text/css">

      #list{
        padding-left: 130px;
        font-family: monospace;
      }

      h3{
        padding-left: 130px;
        font-family: monospace;
      }

      #hea{
        padding-top: 5px;
      }

      table{
        border-collapse: collapse;
        border: black 2px solid;
      }

      tbody{
        border-collapse: collapse;
        border: black 2px solid;  
      }

      tr{
        border-collapse: collapse;
        border: black 2px solid;  
      }

      td{
        border-collapse: collapse;
        border: black 2px solid;  
      }

      th{
        border-collapse: collapse;
        border: black 2px solid;  
      }

      body { 
        width: 100%;
      }
    </style>
</html>
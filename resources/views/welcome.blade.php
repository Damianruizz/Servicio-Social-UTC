@extends('layout')

@section('content')

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" width="304" height="236" src="img/u.jpeg" alt="" style="border-radius: 10%;">
                    <div class="intro-text">
                        <span class="name">¡Bienvenido!</span>
                        <br><br>
                        <span class="skills">Dependencias para realizacion del servicio Social</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Dependencias</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <br><br>
            <p>A continuacion se muestran la lista de dependencias de gobierno en las que puedes realizar tu servicio social.</p><br>          
            <table class="table">
                <thead>
                    <tr class="danger">
                       <th>Organizacion</th>
                       <th>Responsable</th>
                       <th>Telefono</th>
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
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="procedimiento">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Procedimiento</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>1. El alumno verifica sus créditos académicos y deberá de tener mínimo 70% aprobados.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>2. Recibe su ficha de pago de SS y formato de inicio de trámite para Carta Presentación (FSS01).</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>3. Una vez que el alumno ya eligió y se contacto con la dependencia donde realizará su SS y obtuvo los datos necesarios, llena el formato FSS01.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>4. Entrega el formato FSS01 y voucher a Recepción (Niza 67) y le informan cuando debe recoger su Carta Presentación y Constancia de Créditos.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>5. Recoge sus documentos en Recepción en la fecha indicada.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>6. Entrega documentación donde realizará su SS y la institución le indica cuándo le entregarán su Carta de Aceptación en la dependencia o fundación.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>7. Entrega la Carta de Aceptación que elaboró la dependencia en la UTC.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>8. Inicia su SS en la dependencia o fundación elegida, donde prestará su servicio por un mínimo de 6 meses, 8 horas diarias, cubriendo un total de 480 hrs., que reportará a través de los informes: mensual, trimestral y global.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>9. Solicita a la Coordinación de Vinculación y SS los formatos de informe e instructivo de llenado.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>10. Presenta en Recepción de la UTC sus 6 informes mensuales, 2 trimestrales y 1 global.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>11. Una vez cubierta sus 880 hrs. Del SS, solicita en la dependencia o fundación su Carta de Término.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>12. Con la Carta de Término, acude a la Recepción de la UTC y la entrega.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>13. Recepción le indica cuando debe pasar por su Carta de Liberación del SS.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>En caso de que el alumno labore dentro del sector gubernamental, por un periodo mínimo de 2 años a la fecha y su plaza no sea eventual o interinato, de acuerdo con el Art. 91 de la Ley Reglamentaria del Art. 5o. Constitucional, quedará exento de realizarlo y deberá solicitar el formato de trámite especial.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Antes de iniciar el trámite de Servicio Social (SS)
                    -Estar al corriente en sus pagos de colegiatura y en
                     caso de tener recargos, hacer el pago correspondientes.
                     -No adeudar materias, máximo una.</p>
                </div>
            </div>
        </div>
        <style type="text/css">
            footer .footer-below {
                background-color: #001887;    
            }

            .navbar-default, .navbar-inverse {
                background-color: rgb(0, 24, 135);
            }

            header {
                background: rgb(234, 117, 0);
            }

            section.success{
                background: rgb(234, 117, 0);
            }
        </style>
    </section>
@endsection    

<!-- col-lg-offset-2 -->


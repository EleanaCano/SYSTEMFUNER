@extends('madre')
@section('title', 'Detalles empleado')

@section('content')

    <div class="emple">
        <h3> Detalles del empleado</h3>
        <hr>
    <div class="emple">
        <form method="post" action="">
            @csrf
            <div class="form-group row">
                <label for="DNI_empleado" class="col-lg-2 control-label offset-md-1 requerido hijo">Identidad:</label>
                <div class="col-sm-8">
                  {{$empleado->DNI_empleado}}
                </div>
            </div>

            <div class="form-group row">
                <label for="nombres" class="col-lg-2 control-label offset-md-1 requerido hijo">Nombres:</label>
                <div class="col-sm-8">
                 {{$empleado->nombres }}
                </div>
            </div>

            <div class="form-group row">
                <label for="apellidos" class="col-lg-2 control-label offset-md-1 requerido hijo">Apellidos:</label>
                <div class="col-sm-8">
                    {{$empleado->apellidos}}
                </div>
            </div>
        
            <div class="form-group row">
                <label for="apellidos" class="col-lg-2 control-label offset-md-1 requerido hijo">Género:</label>
                <div class="col-sm-8">
                    {{$empleado->genero}}
                </div>
            </div>

            <div class="form-group row">
                <label for="apellidos" class="col-lg-2 control-label offset-md-1 requerido hijo">Dirección:</label>
                <div class="col-sm-8">
                   {{$empleado->direccion}}
                </div>
            </div>

            <?php $fecha_actual = date("d-m-Y");?>

            <div class="form-group row">
                <label for="fecha_ingreso" class="col-lg-2 control-label offset-md-1 requerido hijo">Fecha de Ingreso:</label>
                <div class="col-sm-8">
                   {{$empleado->fecha_ingreso}}
                </div>
            </div>

            <div class="form-group row">
                <label for="fecha_de_nacimiento" class="col-lg-2 control-label offset-md-1 requerido hijo">Fecha Nacimiento:</label>
                <div class="col-sm-8">
                   {{$empleado->fecha_de_nacimiento}}
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono" class="col-lg-2 control-label offset-md-1 requerido hijo">Teléfono de Empleado:</label>
                <div class="col-sm-8">
                    {{$empleado->telefono}}
                </div>
            </div>

            <div class="form-group row">
                <label for="contacto_de_emergencia" class="col-lg-2 control-label offset-md-1 requerido hijo">Contacto de emergencia:</label>
                <div class="col-sm-8">
                   {{$empleado->contacto_de_emergencia }}
                </div>
            </div>

            <br>

            <!--REGRESAR A PANTALLA PRINCIPAL EMPLEADO-->
            <a class="btn btn-primary" href="/empleado">Regresar</a>

        </form>

        <style>
            .emple {
                border-top: 1px solid #E6E6E6 ;
                border-left: 1px solid #E6E6E6 ;
                border-right: 1px solid #E6E6E6;
                border-bottom: 1px solid #E6E6E6 ;
                padding: 20px;
                background-color: #E0F8F7;
                position:relative;
            }

            .emple{
                font-style: bold;
                font-family: 'Times New Roman', Times, serif;
            }

            .hijo{
                font-weight: bold;
            }
        </style>

@endsection
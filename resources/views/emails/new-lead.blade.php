<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mensaje del sitio web de The One Bucerías</title>
    </head>

    <body>
        <p>Contacto recibido del sitio web de The One Residences. @if( isset($msg->contact_pref) ) Esta persona esta interesada en agendar una cita. @endif</p>
        <p>Referido por: Punto401</p> <br>

        <p>Nombre: <strong>{{$msg->name}}</strong></p>
        <p>Correo: <strong>{{$msg->email}}</strong></p>
        <p>Teléfono: <strong>{{$msg->phone ?? 'Sin especificar'}}</strong></p>

        @if ( isset($msg->contact_pref) )
            <p>Preferencia de contacto: {{$msg->contact_pref}}</p>
            <p>Día para la cita: {{$msg->ap_date}}</p>
            <p>Hora para la cita: {{$msg->ap_time}}</p>
        @endif

        <p>Contenido: <strong>{{$msg->content ?? 'Sin Contenido'}}</strong></p>
        <p>Enviado desde: <a href="{{$msg->url}}">{{$msg->url}}</a> </p> <br>

        <p>Enviado el: {{ date_format( $msg->created_at, 'd/M/Y H:i:s') }}</p>
        <p>Este mensaje fue enviado desde un formulario de contacto en el sitio web de The One Residences</p>

    </body>

</html>
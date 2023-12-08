<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #FFF;
            font-family: Arial, Helvetica, sans-serif;
        }
        </style>
</head>
<body>
    @php
        $list_price = (int)$unit->price;
        
        if( isset($plan->discount) and  $plan->discount != 0 ){
            $discountedPrice = $list_price * ( (100 - $plan->discount)/100 );
            $priceDiscount = $list_price * ($plan->discount/100);
        }else {
            $discountedPrice = $list_price;
        }

        App::setLocale('es');
    @endphp  


    <div style="text-align:center; color: #000;">
        <table style="color:#000; width:100%;">
            <tr align="center">
                <th style="font-size:22pt;">
                    {{__('Plan de pagos')}}
                </th>
            </tr>
        </table>
        <hr>
        <table style="color:#000; width:100%;">
            <tr>
                <th style="font-size:18pt;">
                    {{__('Unidad')}} {{$unit->name}} - The One Residences
                </th>
            </tr>
        </table>

        <h1 style="margin-bottom:1pt;">${{ number_format($discountedPrice); }} {{$unit->currency}}</h1>
        <p style="margin-top:1pt;">{{__('Precio Final')}}</p>
        <hr>

        <table style="font-size:16pt; width:100%;">

            <tr>
                <td>{{__('Precio de lista')}}</td>
                <td>
                    @if ( isset($plan->discount) )
                        <strike>${{ number_format($list_price); }} {{$unit->currency}}</strike> 
                    @else
                        ${{ number_format($list_price); }} {{$unit->currency}}
                    @endif
                </td>
            </tr>

            @if ( isset($priceDiscount) )
                <tr>
                    <td>{{__('Descuento')}} ({{$plan->discount}}%)</td>
                    <td>${{ number_format($priceDiscount); }} {{$unit->currency}}</td>
                </tr>
            @endif 
                
            @if ( isset($discountedPrice) )
                <tr>
                    <td>{{__('Enganche')}} ({{$plan->down_payment}}%)</td>
                    <td>${{ number_format($discountedPrice * ($plan->down_payment/100) ) }} {{$unit->currency}}</td>
                </tr>
            @endif

            @if ( isset($discountedPrice) )
                <tr>
                    <td>{{__('Segundo pago')}} ({{$plan->second_payment}}%)</td>
                    <td>${{ number_format($discountedPrice * ($plan->second_payment/100) ) }} {{$unit->currency}}</td>
                </tr>
            @endif 

            @if ( isset($plan->months_percent) and $plan->months_percent != 0 )
                <tr>
                    <td>{{__('Pagos Mensuales')}} ({{$plan->months_percent}}%)</td>
                    <td>${{ number_format($discountedPrice * ($plan->months_percent/100) ) }} {{$unit->currency}} Total</td>
                </tr>
            @endif
            

            @if ( isset($plan->closing_payment) and $plan->closing_payment != 0)
                <tr>
                    <td>{{__('Pago final')}} ({{$plan->closing_payment}}%)</td>
                    <td>${{ number_format($discountedPrice * ($plan->closing_payment/100) ) }} {{$unit->currency}}</td>
                </tr>
            @endif

        </table>

        <p>{{__('Precios, descuentos y planes de pago están sujetos a modificaciones sin previo aviso.')}}</p>

        @php
            // Set the new timezone
            date_default_timezone_set('America/Mexico_City');
            $date = date('d - M - Y');
        @endphp 

        <p>{{__('Fecha de impresión')}}: {{$date}}</p>

        </div>
</body>
</html>
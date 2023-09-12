<?php

    function Show_All()
    {
        $conn=ConexionBD();
        $SelectAllLocalidades = mysqli_query($conn, "SELECT * FROM localidades ORDER BY Id asc");

        while($mostrar = mysqli_fetch_array($SelectAllLocalidades)) 
		{    
            $Direccion=$mostrar['Direccion'];
            $Ciudad=$mostrar['Ciudad'];
            $Telefono=$mostrar['Telefono'];
            $Precio='$ '.number_format($mostrar['Precio'], $decimals = 0,$dec_point = ".",$thousands_sep = ",");
            $Codigo_Postal=$mostrar['Codigo_Postal'];
            $Tipo=$mostrar['Tipo'];
            ShowItems($Direccion,$Ciudad,$Telefono,$Codigo_Postal,$Tipo,$Precio);
        }
    }


    function ConexionBD()
    {
        $hostname = 'localhost';
        $usuario = 'root';
        $password ='';
        $basededatos = 'rentas';
        $Conexion = new mysqli($hostname, $usuario, $password,$basededatos);

        if ( mysqli_connect_errno() )
        {
            echo  'Error de conexión: '.mysqli_connect_error();
            exit();
        }

        return $Conexion;
    }

    function ShowItems($Direccion,$Ciudad,$Telefono,$Codigo_Postal,$Tipo,$Precio)
    {
        $Item=" 
        <div class='fondo-transp'>
            <div class='fondo'>
                <img src='img/home.jpg' class='imagen'/>
                <p class='texto'>
                    <b>Direccion:</b> $Direccion<br>
                    <b>Ciudad:</b> $Ciudad<br>
                    <b>Telefono:</b> $Telefono<br>
                    <b>Codigo Postal:</b> $Codigo_Postal<br>
                    <b>Tipo:</b> $Tipo<br>
                    <b><FONT COLOR='#12A14B'>Precio:</b> $Precio</FONT><br>
                </p>
            </div>
        </div>";

      echo '<br>'.$Item;
    }

?>


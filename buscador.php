<?php       

        function AllFilterSearch()
        {
            if (   (!empty($_POST['ciudad'])) && (!empty($_POST['tipo'])) && (!empty($_POST['precio']))  ) 
            { 
                $Ciudad = $_POST['ciudad'];
                $Tipo = $_POST['tipo'];
                $precio = $_POST['precio'];

                $Precios=explode(";", $precio);

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
                else
                {
                    $SelectFilterLocalidades = mysqli_query($Conexion, "SELECT * FROM localidades WHERE Ciudad = '$Ciudad' and Tipo = '$Tipo' and Precio >= $Precios[0] and Precio <= $Precios[1]");

                    while($mostrar = mysqli_fetch_array($SelectFilterLocalidades)) 
                    {    
                        $Direccion=$mostrar['Direccion'];
                        $Ciudad=$mostrar['Ciudad'];
                        $Telefono=$mostrar['Telefono'];
                        $Precio='$ '.number_format($mostrar['Precio'], $decimals = 0,$dec_point = ".",$thousands_sep = ",");
                        $Codigo_Postal=$mostrar['Codigo_Postal'];
                        $Tipo=$mostrar['Tipo'];
                    
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
                }
            }
        }

        function CityFilterSearch()
        {
            if (   (!empty($_POST['ciudad'])) && (!empty($_POST['precio']))  ) 
            { 
                $Ciudad = $_POST['ciudad'];
                $precio = $_POST['precio'];
                $Precios=explode(";", $precio);

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
                else
                {
                    $SelectbyCityLocalidades = mysqli_query($Conexion, "SELECT * FROM localidades WHERE Ciudad = '$Ciudad' and Precio >= $Precios[0] and Precio <= $Precios[1]");

                    while($mostrar = mysqli_fetch_array($SelectbyCityLocalidades)) 
                    {    
                        $Direccion=$mostrar['Direccion'];
                        $Ciudad=$mostrar['Ciudad'];
                        $Telefono=$mostrar['Telefono'];
                        $Precio='$ '.number_format($mostrar['Precio'], $decimals = 0,$dec_point = ".",$thousands_sep = ",");
                        $Codigo_Postal=$mostrar['Codigo_Postal'];
                        $Tipo=$mostrar['Tipo'];
                    
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
                }
            }
        }

        function TypeFilterSearch()
        {
            if (   (!empty($_POST['tipo'])) && (!empty($_POST['precio']))  ) 
            { 
                $Tipo = $_POST['tipo'];
                $precio = $_POST['precio'];
                $Precios=explode(";", $precio);

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
                else
                {
                    $SelectbyTypeLocalidades = mysqli_query($Conexion, "SELECT * FROM localidades WHERE Tipo = '$Tipo' and Precio >= $Precios[0] and Precio <= $Precios[1]");

                    while($mostrar = mysqli_fetch_array($SelectbyTypeLocalidades)) 
                    {    
                        $Direccion=$mostrar['Direccion'];
                        $Ciudad=$mostrar['Ciudad'];
                        $Telefono=$mostrar['Telefono'];
                        $Precio='$ '.number_format($mostrar['Precio'], $decimals = 0,$dec_point = ".",$thousands_sep = ",");
                        $Codigo_Postal=$mostrar['Codigo_Postal'];
                        $Tipo=$mostrar['Tipo'];
                    
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
                }
            }
        }

        function PriceFilterSearch()
        {
            if (   !empty($_POST['precio']) ) 
            { 
                $precio = $_POST['precio'];
                $Precios=explode(";", $precio);

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
                else
                {
                    $SelectbyPriceLocalidades = mysqli_query($Conexion, "SELECT * FROM localidades WHERE Precio >= $Precios[0] and Precio <= $Precios[1]");

                    while($mostrar = mysqli_fetch_array($SelectbyPriceLocalidades)) 
                    {    
                        $Direccion=$mostrar['Direccion'];
                        $Ciudad=$mostrar['Ciudad'];
                        $Telefono=$mostrar['Telefono'];
                        $Precio='$ '.number_format($mostrar['Precio'], $decimals = 0,$dec_point = ".",$thousands_sep = ",");
                        $Codigo_Postal=$mostrar['Codigo_Postal'];
                        $Tipo=$mostrar['Tipo'];
                    
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
                }
            }
        }


?>



    
        
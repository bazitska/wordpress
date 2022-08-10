<?php

    $imagen = get_field( 'imagen' );
    $nombre = get_field( 'nombre' );
    $apellidos = get_field( 'apellidos' );
    $email = get_field( 'email' );
    $direccion = get_field( 'direccion' );
    $ciudad = get_field( 'ciudad' );
    $telefono = get_field( 'telefono' );
    $fechaNacimiento = get_field( 'fecha_de_nacimiento' );


    echo '<div class="fichaEmpleado">';

        if(!empty($imagen)){
            echo '<div class="contenedorImagenFicha">';
            echo wp_get_attachment_image( $imagen['ID'], 'thumbnail', null, array( 'class' => 'imagenFichaEmpleado' ) );
            echo '</div>';
        }

        if(!empty($nombre) && strlen(trim($nombre)) > 0){
            echo '<h3>' . $nombre;
            if(!empty($apellidos) && strlen(trim($apellidos)) > 0){
                echo ' ' . $apellidos;
            }
            echo '</h3>';
        }

        //echo '<div class="infoFicha">';
        if(!empty($email) && strlen(trim($email)) > 0){
            echo '<div class="elementoFicha"><label>Email: </label><span>'.$email.'</span>'.'</div>';
        }

        if(!empty($direccion) && strlen(trim($direccion)) > 0){
            echo '<div class="elementoFicha"><label>Dirección: </label><span>'.$direccion.'</span>'.'</div>';
        }

        if(!empty($ciudad) && strlen(trim($ciudad)) > 0){
            echo '<div class="elementoFicha"><label>Ciudad: </label><span>'.$ciudad.'</span>'.'</div>';
        }

        if(!empty($telefono) && strlen(trim($telefono)) > 0){
            echo '<div class="elementoFicha"><label>Teléfono: </label><span>'.$telefono.'</span>'.'</div>';
        }
        
        if(!empty($fechaNacimiento) && strlen(trim($fechaNacimiento)) > 0){
            echo '<div class="elementoFicha"><label>Fecha de nacimiento: </label><span>'.$fechaNacimiento.'</span>'.'</div>';
        }
        //echo '</div>';

    echo '</div>';

?>
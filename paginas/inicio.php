<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../style/inicio.css">
    
  
</head>
<body>

<?php include '../cabecera/cabecera.php'; ?>

<div class="main-image">
    <img src="../imagenes/banners/imagen1.png" alt="Imagen 1">
    <div class="overlay-text">
        SOLUCIONES QUE<br>NUNCA FALTAN<br>EL OBJETIVO
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-half">
                <div class="content">
                    <p class="custom-font-size">Turman Asociados es un estudio contable con profesionales con más de 2 años de experiencia. ¿Nuestro propósito? es asesorar a nuestros clientes en el ámbito Contable, Jurídico, Tributario, Financiero y Laboral con una contabilidad adecuada y oportuna para la efectiva toma de decisiones.</p>
                </div>
            </div>
            <div class="column is-half">
                <img class="is-rounded" src="../imagenes/imagen2.png" alt="imagen 2">
            </div>
        </div>
    </div>
</section>

<section class="section custom-section">
    <div class="container has-text-centered">
        <h2 class="title custom-title">NUESTRA ASISTENCIA NO SE BASA SÓLO EN SOLUCIONAR PROBLEMAS SINO EN PREVENIR Y PLANIFICAR ADECUADAMENTE LOS NEGOCIOS A FIN DE QUE NUESTROS CLIENTES NO CULTIVEN PROBLEMAS PARA MAÑANA.</h2>
        <a href="servicios.php" class="button is-warning">SERVICIOS</a>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            <?php
            include '../config/database.php'; // Incluir archivo de conexión a la base de datos
            
            // Consulta SQL para obtener servicios
            $sql = "SELECT nombre, imagen FROM servicios";
            $result = $conn->query($sql);

            // Verificar si hubo un error en la consulta
            if (!$result) {
                echo "Error en SQL: " . $conn->error;
            } else {
                // Verificar si hay resultados
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = '../imagenes/servicios/' . $row["imagen"];
                        // Generar la URL de la página del servicio dinámicamente
                        $servicePage = '../servicios/' . strtolower(str_replace(' ', '', $row["nombre"])) . '.php';
                        echo '<div class="column is-one-third">';
                        echo '<div class="service-box">';
                        echo '<a href="' . htmlspecialchars($servicePage, ENT_QUOTES, 'UTF-8') . '">';
                        echo '<img src="' . htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($row["nombre"], ENT_QUOTES, 'UTF-8') . '">';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="column is-full has-text-centered">No hay resultados</div>';
                }
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>



<?php include '../piepagina/piepagina.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
</body>
</html>

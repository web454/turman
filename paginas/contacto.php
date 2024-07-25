<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../style/contacto.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<?php include '../cabecera/cabecera.php'; ?>

<section class="section contact-section">
    <div class="container">
        <div class="columns">
            <div class="column is-half">
                <h1 class="title">Contáctanos</h1>
                <div class="contact-details">
                    <p class="letra">Brindamos soluciones en <b>Asesoría Contable, Asesoría Tributaria, Asesoría Laboral, Asesoría Financiera y Asesoría Juridica Contable</b> a Micro y Pequeñas en empresas <b>(Mypes Pymes)</b></p><br>
                    <p><img src="../imagenes/contacto/mapa.png" alt="Correo" width="20px" class="imagen">&nbsp;&nbsp;<b>Av Augusto B. Leguía N° 1672</b></p>
                    <p><img src="../imagenes/contacto/correo-electronico.png" alt="Correo" width="20px" class="imagen">&nbsp;&nbsp;<b>turmanasociados@gmail.com</b></p>
                    <ul>
                        <li><img src="../imagenes/contacto/llamar.png" alt="Correo" width="20px" class="imagen">&nbsp;&nbsp;<b>+51 917 430 900</b></li>
                        <li><img src="../imagenes/contacto/llamar.png" alt="Correo" width="20px" class="imagen">&nbsp;&nbsp;<b>+51 916 889 100</b></li>
                        <li><img src="../imagenes/contacto/llamar.png" alt="Correo" width="20px" class="imagen">&nbsp;&nbsp;<b>+51 952 02 330</b></li>
                    </ul>
                </div>
            </div>
            <div class="column is-half">
                <form class="contact-form" id="contactForm">
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <input class="input" type="text" name="nombre" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Teléfono</label>
                        <div class="control">
                            <input class="input" type="text" name="telefono" placeholder="Teléfono" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mensaje</label>
                        <div class="control">
                            <textarea class="textarea" name="mensaje" placeholder="Mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="control">
                        <button class="button is-primary" type="submit">Enviar</button>
                    </div>
                </form>
                <div id="responseMessage" class="notification is-hidden"></div>
            </div>
        </div>
    </div>
</section>
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.090309000855!2d144.95738421532255!3d-37.81631497975168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43b9f67a6f%3A0x7b0e2e926f3b5d03!2sAv.%20Augusto%20B.%20Legu%C3%ADa%2C%20Lima%2003333%2C%20Peru!5e0!3m2!1sen!2sus!4v1628957458530!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
</div>
<?php include '../piepagina/piepagina.php'; ?>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    var form = event.target;
    var formData = new FormData(form);

    fetch('/TURMAN/insertar_datos/insertarcontacto.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        var responseMessage = document.getElementById('responseMessage');
        responseMessage.textContent = result;
        responseMessage.classList.remove('is-hidden');
        form.reset();
    })
    .catch(error => {
        var responseMessage = document.getElementById('responseMessage');
        responseMessage.textContent = 'Error: ' + error.message;
        responseMessage.classList.remove('is-hidden');
    });
});
</script>

</body>
</html>

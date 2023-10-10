<!DOCTYPE html>
<html lang="es">
<head>
    <title>Reserva Ya</title>
    <?php include './inc/link.php'; ?>
    <style>
        /* Agrega estilos CSS aquí si es necesario */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .reserva-info {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .reserva-button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .reserva-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php include './inc/navbar.php'; ?>
<div class="container">
    <h1>¡Reserva Ya Tu Próxima Experiencia!</h1>
    <div class="reserva-info">
        <p>¿Estás listo para vivir una experiencia inolvidable? ¡Haz tu reserva ahora y asegura tu lugar en nuestro próximo evento o actividad! En Reserva Ya, nos esforzamos por proporcionarte las mejores experiencias posibles, desde eventos emocionantes hasta actividades relajantes.</p>

        <p>Para hacer una reserva, simplemente haz clic en el botón de abajo y sigue los sencillos pasos en nuestro sistema de reserva en línea. Si tienes alguna pregunta o necesitas asistencia, no dudes en ponerte en contacto con nuestro equipo de soporte al cliente.</p>
    </div>
    <button class="reserva-button">¡Haz tu Reserva Ahora!</button>
</div>

<?php include './inc/footer.php'; ?>
</body>
</html>

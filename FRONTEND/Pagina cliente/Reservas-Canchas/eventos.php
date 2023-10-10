<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ver Eventos</title>
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
        .evento {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<?php include './inc/navbar.php'; ?>
<div class="container">
   <h1>¡Hola Mundo!</h1>
   <p>Bienvenido a nuestra página de eventos. Aquí encontrarás información sobre los próximos eventos emocionantes que estamos organizando.</p>
   
   <div class="evento">
       <h2>Evento 1: Título del Primer Evento</h2>
       <p><strong>Fecha:</strong> 15 de noviembre de 2023</p>
       <p><strong>Lugar:</strong> Dirección del lugar del evento</p>
       <p>Descripción del evento. Puedes proporcionar detalles emocionantes sobre qué esperar en este evento. ¡Esperamos verte allí!</p>
   </div>
   
   <div class="evento">
       <h2>Evento 2: Título del Segundo Evento</h2>
       <p><strong>Fecha:</strong> 20 de diciembre de 2023</p>
       <p><strong>Lugar:</strong> Otra dirección del lugar del evento</p>
       <p>Otra descripción del evento. Comparte más información sobre este evento para entusiasmar a los visitantes.</p>
   </div>
</div>

<?php include './inc/footer.php'; ?>
</body>
</html>

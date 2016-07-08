<html>
    <head>
        <title>Subir Archivos</title>
    </head>
    <body>
        <form action="recepcion.php" method="POST" enctype="multipart/form-data">
            <input name="archivo" type="file" size="35"/>
            <input name="enviar" type="submit" value="subir"/>
            <input name="action" type="hidden" value="upload"/>
        </form>
    </body>
</html>

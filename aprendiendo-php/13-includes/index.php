<!--   http://localhost/PHP/MASTER-PHP/aprendiendo-php/13-includes/ -->

<?php include_once "includes/cabecera.php" ?>
    
    <hr/>
    
    <!-- Contenido INICIO -->
    <div>
        <h2>Esta es la pagina de prueba</h2>
        <p>Texto de prueba de la página de inicio</p>
        <div>
            <ul>
                <li>La palabra clave <b>include</b> se utiliza para incrustar código PHP desde otro archivo. Si no se encuentra el archivo, se muestra una advertencia y el programa continúa ejecutándose.</li>
                <li>La palabra clave <b>include_once</b> se utiliza para incrustar código PHP desde otro archivo. Si no se encuentra el archivo, se muestra una advertencia y el programa continúa ejecutándose. <u>Si el archivo ya se incluyó anteriormente, esta instrucción no lo incluirá de nuevo.</u></li>
                <li>La palabra clave <b>require</b> se utiliza para incrustar código PHP desde otro archivo. Si no se encuentra el archivo, se produce un error grave y el programa se detiene.</li>
                <li>La palabra clave <b>require_once</b> se utiliza para incrustar código PHP desde otro archivo. Si no se encuentra el archivo, se produce un error grave y el programa se detiene. <u>Si el archivo ya se incluyó anteriormente, esta instrucción no lo incluirá de nuevo.</u></li>
            </ul>
        </div>
    </div>
    <!-- Contenido FIN -->
    
    <hr/>
    
    <?php include "includes/footer.php" ?>
    
</body>
</html>
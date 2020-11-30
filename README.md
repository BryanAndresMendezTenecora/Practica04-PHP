# Practica04-PHP
- **¿Qué realiza la sentencia include en PHP?**

La sentencia include, incluye y evalua el archivo especiado, en este caso llama el archivo conexionBD.php

![](RackMultipart20201130-4-n5zv8y_html_4e1e88c622e4ae01.png)

- **¿Qué es la variable $\_POST?**

Es un método para enviar y recibir información o datos.

![](RackMultipart20201130-4-n5zv8y_html_5b08f0177a4ed691.png)

- **¿Qué hace la función isset()?**

Determina si una variable esta definida y no es null.

![](RackMultipart20201130-4-n5zv8y_html_1b32246fcdd6345e.png)

- **¿Qué hace la función trim()?**

Elimina espacios en blanco, del inicio y final de la cadena o caracteres específicos.

![](RackMultipart20201130-4-n5zv8y_html_129fb975c620459b.png)

- **¿Qué hace la función strtoupper()?**

Convierte en un string en mayúsculas.

![](RackMultipart20201130-4-n5zv8y_html_fcebff0cbb55a737.png)

- **¿La función MD5 es de PHP?**

Calcula el &#39;hash&#39; md5 de un string, devuelve el hash como un número hexadecimal de 32 caracteres.

![](RackMultipart20201130-4-n5zv8y_html_c0468c1b7eca8a39.png)

- **¿Por qué utilizamos la función MD5?**

Para convertir la variable contraseña en un string hexadecimal por lo tanto esta variable esta cifrada.

- **¿Por qué agregamos el código 0?**

Por qué pertenece al campo `usu_codigo` int(11) NOT NULL AUTO\_INCREMENT de la tabla usuario

- **¿Cuál es el error 1062 en mysql?**

Este error se puede deber a que el índice de dicha columna está definido como &#39;UNIQUE&#39;. Tienes que cambiarlo a &#39;INDEX&#39;.

- **¿Por qué los dos últimos valores de la sentencia SQL son null?**

Por qué no es un tipo de datos, ya que hacen referencia al:

![](RackMultipart20201130-4-n5zv8y_html_1568ea053e9ff1c3.png)

![](RackMultipart20201130-4-n5zv8y_html_95cc90e36b7e523a.png)

- **La función query(), ¿para que tipo de consultas SQL se utiliza?**

Ejecuta una sentencia SQL en una única llamada a función, devolviendo el conjunto de resultados (si los hay) que devuelve la sentencia como un objeto PDOStatement.
 En este caso ejecuta la consulta guardada en la variable $sql.

![](RackMultipart20201130-4-n5zv8y_html_9da9271f123964bc.png)

- **¿Qué realiza la función mysqli\_error()?**

Devuelve el últmo mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado

![](RackMultipart20201130-4-n5zv8y_html_e0adb1669f5db3d9.png)

- **¿Qué realiza la función close()?**

Cierra una conexión previamente abierta a una base de datos. Devuelve TRUE en caso de éxito o FALSE en caso de error

![](RackMultipart20201130-4-n5zv8y_html_5277a8e98308de5.png)

- ¿Se puede tener etiquetas html y código php en el mismo archivo?. En caso que la respuesta sea afirmativa, el archivo ¿deberá tener extensión html o php? ¿Porqué?. En caso que la respuesta sea negativa. ¿Porqué no?


Se puede incrustar código o etiquetas HTML en PHP directamente, o se puede usar en combinación con varios sistemas de plantillas web, sistema de gestión de contenido web y frameworks web..No, porque los archivos html son leídos directamente por el navegador y el navegador no es capaz de reconocer el código php. En este caso, simplemente lo ignora.

- **¿La etiqueta meta en el head es necesario? ¿Qué pasa si no se pone esta etiqueta?**

Las etiquetas meta o meta tags encabezan un documento HTML y suministran información codificada a navegadores y motores de búsqueda sobre una página web. Los metadatos son invisibles para el usuario y se encargan de añadir información para facilitar el análisis de los archivos HTML y la gestión del contenido de una página web.

- **Ingresar datos con tíldes o caracteres latinos. ¿Cómo se guarda en la base de datos?**

Los datos se alteran, acabando en Ã¡Ã³Ã± y cosas parecidas., por ello todos los ficheros PHP y HTML de nuestro sitio web deben estar guardados en formato UTF-8

- **Qué realiza la función session\_start()?**

Iniciar una nueva sesión o reanudar la existente. Crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.

![](RackMultipart20201130-4-n5zv8y_html_15cb1f062cc408d0.png)

- **¿Qué se almacena en la variable $result?**

Se guardo el resultado de la consulta sql, en este caso el usuario que coincida con su nombre y contraseña.

![](RackMultipart20201130-4-n5zv8y_html_17c4bae4401c6f7e.png)

- **¿Qué es la variable $\_SESSION de php?**

Es un array asociativo que contiene variables de sesión disponibles para el script actual.

Esta es una &#39;superglobal&#39; o una variable automatic global. Significa simplemente que es una variable que está disponible en cualquier parte del script.

![](RackMultipart20201130-4-n5zv8y_html_9a9ddc527b215852.png)

- **¿Qué realiza la función header?**

Enviar encabezado sin formato HTTP.

Recuerde que header() debe ser llamado antes de mostrar nada por pantalla, etiquetas HTML, líneas en blanco desde un fichero o desde PHP.

![](RackMultipart20201130-4-n5zv8y_html_9a9ddc527b215852.png)

- **¿Qué realiza el parámetro Location de la función header?**

No solamente envía el encabezado al navegador, sino que también devuelve el código de status (302) REDIRECT al navegador a no ser que el código de status 201 o 3xx ya haya sido enviado.

![](RackMultipart20201130-4-n5zv8y_html_7891e155571b9ed.png)

- **¿Qué realiza la función fecth\_assoc()?**

Obtener una fila de resultado como un array asociativo

Devuelve un array asociativo de strings que representa a la fila obtenida del conjunto de resultados, donde cada clave del array representa el nombre de una de las columnas de éste; o NULL si no hubieran más filas en dicho conjunto de resultados.

![](RackMultipart20201130-4-n5zv8y_html_64ebd9a7378920c4.png)

- **¿Qué se almacena en la variable $row?**

El nombre de las columnas de la tabla.

![](RackMultipart20201130-4-n5zv8y_html_6887b72d65325cbf.png)

- **¿Cuál es el método http que se usa para enviar parámetros a través de la URL?**

Con el método GET, los datos que se envían al servidor se escriben en la misma dirección URL. En la ventana del navegador, lo encontrarás así:

www.ejemplo.com/registrarse.php?nombre=pedro&amp;amp;apellido=perez&amp;amp;edad=55&amp;amp;genero=hombre

Los parámetros URL se pueden guardar junto a la dirección URL como marcador. De esta manera, puedes introducir una búsqueda y más tarde consultarla de nuevo fácilmente. También se puede volver a acceder a la página a través del historial del navegador.

- **¿Qué hace la super variable $\_GET?**

Un array asociativo de variables pasado al script actual vía parámetros URL (también conocida como cadena de consulta). Tenga en cuenta que el array no solo se rellena para las solicitudes GET, sino para todas las solicitudes con una cadena de consulta.

Esta es una &#39;superglobal&#39; o una variable automatic global. Significa simplemente que es una variable que está disponible en cualquier parte del script.

![](RackMultipart20201130-4-n5zv8y_html_a7704a0addb88b58.png)

- **¿Qué hace la función date\_default\_timezone\_set ?**

Establece la zona horaria predeterminada usada por todas las funciones de fecha/hora en un script.

![](RackMultipart20201130-4-n5zv8y_html_eca17d51a71dd380.png)

- **¿Qué hace la función date?**

Dar formato a la fecha/hora local.
 Devuelve una cadena formateada según el formato dado usando el parámetro de tipo integer timestamp dado o el momento actual si no se da una marca de tiempo. En otras palabras, timestamp es opcional y por defecto es el valor de time().

![](RackMultipart20201130-4-n5zv8y_html_7dc740bf7cda5756.png)

- **¿Qué hace la función time?**

Devuelve la fecha Unix actual.
 Devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT).

![](RackMultipart20201130-4-n5zv8y_html_7dc740bf7cda5756.png)

- ¿Qué hace la super variable $\_GET?


Un array asociativo de variables pasado al script actual vía parámetros URL (también conocida como cadena de consulta). Tenga en cuenta que el array no solo se rellena para las solicitudes GET, sino para todas las solicitudes con una cadena de consulta.

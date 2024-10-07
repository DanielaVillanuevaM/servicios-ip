# :desktop_computer: Registro Nmap pruebas

## Prueba 1: Imprime resultado

El programa es capaz de ejecutar nmap e imprimir el resultado en la pantalla. La forma en la que se transmite la dirección es por la url, se probó con localhost

Comando: Nmap <dirección IP>

## Prueba 2: Probar con otra dirección en la misma red

El escaneo es exitoso

Comando: Nmap <dirección IP>

## Prueba 3: Probar con una dirección no existente

El resultado muestra que no se pudo escanear la dirección, se considera exitoso

Comando: Nmap <dirección IP>

## Prueba 4: Probar con un dominio web google.com

El escaneo es exitoso

Comando: Nmap google.com

## Prueba 5: Probar con una dirección IP publica

En la página https://www.whatismyip.com sacamos la dirección IP pública de uno de nuestro dispositivos y tratamos de realizar un escaneo, nmap decía que no era posible escanear

Comando: Nmap <dirección IP>

Buscando en la documentación de Nmap se modificó el comando a:

Comando: Nmap <dirección IP> -Pn -sS

## Prueba 6: Probar con el nuevo comando

El escaneo fue exitoso

Analizando estas primeras 6 pruebas, concluimos que:

-   pasar la dirección por medio de la url no es la opción más segura de realizar, tendremos que buscar otras opciones.
-   El resultado es impreso en una sola línea de texto, lo cual nos imposibilitaría darle un formato.

Tomando en cuenta estas dos conclusiones, seguí buscando soluciones

Para la segunda conclusión:

Nmap tiene la opción de imprimir el resultado en XML, sin embargo para esto es necesario que se cree de manera forzosa un archivo. Las pruebas se realizarán en la terminal de la computadora por el momento.

Nuevo comando: nmap -Pn -sS -oX <dirección del archivo XML>> <dirección IP>

Con el archivo XML, se necesita mostrarlo ahora en html

## Prueba 7: Mostrar el archivo dentro de un iframe

No se mostraba nada

Tratando de ver como se debería ver el resultado busqué convertidores en línea de XML a HTML, pero igual no mostraban resultando

Leyendo en la documentación de Nmap, muestra tres herramientas para transformar el XML a HTML

-   xsltproc
-   Saxon
-   Xalan

xsltproc reportaba algunos errores en windows 10, además de no poder entender la forma en la que se instalaba, opté probarlo en una computadora con ubuntu

## Prueba 8: Transformar el archivo XSL a HTML con xsltproc

Marcaba error al tratar de convertirlo, resultado fallido

Siguiendo con Saxon, este tiene múltiples opciones para ser usado Java, JS, PHP, etc...

## Prueba 9: Transformar el archivo XSL a HTML con saxon JS

No se mostraba el archivo, la consola de la página mostraba el error

Access to Script at 'dirección' from origin 'null' has been blocked by CORS policy: Invalid response. Origin 'null' is therefore not allowed access.

Resultado fallido

## Prueba 9: Transformar el archivo XSL a HTML con saxon Java

El archivo se pudo transforma, pero algunos vínculos los transformaba de forma extraña

Xalan pedía un plan de pago así que se ignoró la opción

Buscando más opciones encontré un projecto en Github que permite transformar el XML en diferentes formatos, entre ellos HTML: https://github.com/vdjagilev/nmap-formatter

## Prueba 9: Transformar el archivo XSL a HTML con nmap-formatter

El resultado se mostró mejor que el de Saxon, esta sería la mejor opción

Viendo que es necesario de forma obligatoria la creación mínima de dos archivos uno XML y otro HTML, además de tomar en cuenta la forma de ejecutar NMAP, tal vez sería transformar el proyecto a una aplicación en vez de una página web, debido que no encuentro forma de que los archivos se guarden directamente en la base de datos, además de que esta sería demasiado pesada por todos los archivos, la aplicación podría realizarse con Electron que utiliza tecnología web para no atrasarnos tanto y poder utilizar lo que ya se diseñó de front-end.

Se deberá de discutir esto con la cliente y la maestra

# Plantilla de Formulario Simple Hubspot 📑
Formulario simple con cabecera y footer usando formulario de Hubspot.

## Comenzando 🚀
Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo.

## Pre-requisitos 📋
Que cosas necesitas para instalar y utilizar la plantilla.
En caso ya tenerlas omitir este paso.

### 1. Node / NPM
Descargar Node e instalar https://nodejs.org/es/download/

### 2. Grunt
En consola:

    npm install -g grunt-cli

## ¿Cómo utilizarlo? 🛠️
### 1. Clonar el repositorio

    $ git clone https://github.com/VampByte/form-simple

### 2. Instalar dependencias

    npm install

### 3. Iniciar grunt para compilar tanto JS como SCSS en caso se necesite.

    grunt watch

### 4. Maquetar según requerimiento.
#### Consideraciones del proyecto:
1. Para la cabecera son dós imágenes.
**Desktop:** 700 x 360 px
**Mobile:** 576 x 450 px

2. El formulario es un embed de Hubspot, deberemos contar con el **id** y asignarlo a la variable **$formID** ubicada en *libs/informacion.php*

    Ejemplo:

    $formID = "c33c510a-b2d1-43f7-a092-ef2a5221f911";

3. Modificar en caso se requiera el mensaje de gracias ubicado en **gracias.php**, en la variable **$_msg**

4. El footer no requiere indicaciones en especial.


## Despliegue 📦
Para llevar al servidor para presentar un dev o pasar a producción considerar:
- Excluir la carpeta **node_modules**.
- Comprimir las imágenes nuevas.

## Construido con 🛠️
- Bootstrap 5
- Jquery (para el script que redirecciona el form al gracias)

## Autor ✒️
Javier Madrid Velasco
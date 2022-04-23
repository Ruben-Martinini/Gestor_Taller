# Gestor_Taller
PROYECTO DE MEJORA E INNOVACIÓN
“SITIO WEB GESTOR TALLER DNA”

1. INTRODUCCIÓN 

El desarrollo que se expone trata de un conjunto de soluciones aplicadas a la gestión y administración de repuestos, máquinas  y vehículos de combustión interna en el marco del sistema procedimental del taller mecánico y apéndices de la Dirección Nacional del Antártico.
Proporciona una serie de funcionalidades condensadas en un sitio web, que como tal puede ser accedido desde cualquier dispositivo, navegador y punto del planeta.
El acceso es exclusivo y se otorgan permisos de acuerdo con el nivel de responsabilidad del cargo del usuario. 

2. DESARROLLO

Descripción general.

La aplicación desarrollada pretende gestionar, desde el alta de repuestos, la búsqueda, como también las transferencias entre depósitos que la Dirección Nacional administra tanto en Buenos Aires como en el continente Antártico y descargas en torno a una base de datos y (próximamente) la gestión de legajos de máquinas y vehículos.

El sitio web consta de:

Página de inicio, donde se debe identificar quien ingrese a través de un usuario y contraseña otorgados por el administrador del Sitio.
Se establecen dos tipos de acceso, administrador e invitado. Estos accesos están signados por una variable de usuario que permite plasmar e identificar a cada transacción con la base de datos.

Usuario Administrador: tiene acceso a la sección “Búsqueda”, “Alta”, “Descarga/Transferencia” y “Legajos”(*). Solo habilitado para personal de la Dirección Nacional.

Usuario Invitado: tiene acceso solo a las secciones “Búsqueda” y “Legajos”(*). Está orientado a los mecánicos que cumplen funciones en el Taller del Depósito Polar Buenos Aires y al responsable del taller mecánico de la Base antártica Carlini administrada por la Dirección Nacional del Antártico. 

Sección Alta: Una vez adquirido un repuesto a través de cualquier canal conocido y cerciorándose de la no existencia en la base de datos, accedemos a esta interfaz para insertar el registro.
Los datos necesarios y suficientes para poder generar el alta son: Marca y modelo de máquina o vehículo, N° de Parte, Designación, Aplicación, Cantidad, Ubicación y Forma de adquisición con su nomenclatura y numeración si aplicase.

Sección Búsqueda: como dice el nombre de la sección es la interfaz encargada de realizar búsquedas de repuestos eligiendo algún criterio entre Marca y modelo de máquina o vehículo, N° de Parte, Designación, Aplicación, Cantidad y Ubicación. 
Concede, para el caso de identificarse como administrador, la posibilidad de editar los siguientes campos del registro elegido: Marca y modelo de máquina o vehículo, N° de Parte, Designación, Aplicación y Ubicación.
También permite eliminar un registro de repuesto de la base de datos, dejando en la misma la información de forma y fecha de adquisición de forma permanente.

Sección Descarga/Transferencia: Esta interfaz se dedica exclusivamente al control y movimientos de stock.
Inicia el proceso por la búsqueda del repuesto a descargar o transferir para luego ingresar a un tablero de control y ejecutar el procedimiento elegido.
Descarga: es el proceso de descuento sobre el stock de uno de los depósitos que la DNA posee tanto en Buenos Aires como en la Antártida, como ser DP1 (en Buenos Aires), DP2 (en Base Carlini) o DP3 (en Base Marambio) afectando los campos de la tabla correspondiente de la base de datos.
Transferencia: es el proceso por el cual una cantidad de stock descontada correspondiente a un depósito se le incrementa a otro, afectando los campos de la tabla correspondiente de la base de datos.

Sección Legajos: Es la interfaz que permite acceder a la información patrimonial y técnica de cada máquina o vehículo con cargo en la Dirección Nacional del Antártico.
Accesible para todos los mecánicos, quienes operen y/o mantengan las unidades.
Permite la carga de los informes técnicos semestrales y posterior relevamiento de necesidades para los futuros pedidos. (Manual de Procedimientos Taller)
Además, proporciona información acerca de plazos e intervalos de mantenimientos preventivos e historial.

Tecnologías usadas en el desarrollo del proyecto

1 HTML
2 CSS
3 JavaScript
4 PHP
5 MySQL
6 PhpMyAdmin
7 Visual Studio Code

Definiciones.

Sitio web: Conjunto de archivos electrónicos y páginas web referentes a un tema en particular que incluye una página inicial de bienvenida, con un nombre de dominio y dirección en Internet específicos. 
Interfaz: Parte del programa informático que permite el flujo de información entre varias aplicaciones o entre el propio programa y el usuario. 
Navegador: Permite al usuario recuperar y visualizar páginas web a través de Internet. Servidor web: Se trata de un programa que implementa el protocolo HTTP (HyperText Transfer Protocol). Este protocolo está diseñado para transferir lo que llamamos hipertextos, páginas web o páginas HTML: textos complejos con enlaces, figuras, formularios, botones y objetos incrustados como animaciones o reproductores de música. 


3. PROPUESTA DE MEJORA

Establecer parámetros procedimentales ajustados a la normativa interna del Depósito Polar de la Dirección Nacional del Antártico aprovechando las bondades de la digitalización de los datos.
Ordenar y formalizar la senda de cada uno de los procedimientos que se realizan en nuestra actividad, sustanciándolos por medio de algoritmos, evitando muchos errores humanos.
Contribuir en el aspecto estadístico, de manera que nos permita ahorrar tiempo en el relevamiento de repuestos faltantes y no existentes con el fin de eficientizar los procesos de definición de solicitudes de compra.
Asegurar la integridad de la información utilizando una base de datos y accediéndola con protocolos exhaustivos. 


<?php declare(strict_types=1);

class CadenasDeTexto
{

    protected $cadena;

    public function __construct($cadena, $encoding = 'UTF-8', $forceEncode = true)
    {
        if (mb_detect_encoding($cadena) != 'UTF-8' && $forceEncode) {
            $cadena = mb_convert_encoding($cadena, 'UTF-8');
        }

        $this->cadena = $cadena;
    }

    public function inicioCadena($cadenaAuxiliar)
    {

        return mb_substr($this->cadena, 0, mb_strlen($cadenaAuxiliar)) === $cadenaAuxiliar;
    }
}

/*
Este código PHP define una clase llamada CadenasDeTexto que se utiliza para manipular cadenas de texto, 
específicamente en el contexto de codificación y comprobación de inicio de cadenas. Aquí está una explicación paso a paso del código:

Se define la clase CadenasDeTexto usando la palabra clave class.
Dentro de la clase, se declara una propiedad protegida llamada $cadena, 
que se utilizará para almacenar la cadena de texto con la que trabajará la clase. 
Esta propiedad se inicializa en el constructor.

El constructor de la clase (__construct) toma tres parámetros:
$cadena: La cadena de texto con la que se inicializará la instancia de la clase.
$encoding: La codificación de caracteres que se utilizará (predeterminada: 'UTF-8').
$forceEncode: Un booleano que determina si se debe forzar la conversión de codificación a UTF-8 si la cadena no está en esa codificación.

Dentro del constructor, se realiza una comprobación para verificar si la codificación de la cadena proporcionada no es UTF-8 
y si se debe forzar la conversión. Si ambas condiciones se cumplen, se utiliza la función mb_convert_encoding para convertir la cadena a UTF-8.
 Luego, la cadena se asigna a la propiedad $cadena.

La clase tiene un método público llamado inicioCadena que toma un parámetro llamado $cadenaAuxiliar.
 Este método se utiliza para verificar si la cadena de texto almacenada en la propiedad $cadena
  comienza con la cadena proporcionada en $cadenaAuxiliar.

Dentro del método inicioCadena, se utiliza la función mb_substr para obtener una subcadena de la propiedad $cadena 
que abarca desde el inicio hasta la longitud de $cadenaAuxiliar.
 Luego, se compara esta subcadena con $cadenaAuxiliar usando el operador === para determinar si la cadena de texto comienza con $cadenaAuxiliar.

En resumen, esta clase CadenasDeTexto está diseñada para trabajar con cadenas de texto
 y proporciona un método para verificar si una cadena comienza con otra cadena específica.
  También incluye una funcionalidad opcional para convertir la codificación de caracteres a UTF-8 si es necesario.
*/
?>

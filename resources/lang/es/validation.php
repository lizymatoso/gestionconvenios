<?php

return [

    /*
    |----------------------------------------------------------------- -------------------------
    | Líneas de idioma de validación
    |----------------------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase de validador. Algunas de estas reglas tienen múltiples versiones tales
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes aquí.
    |
    */
    

    'aceptado'              => 'El campo :atributo debe ser aceptado.' ,
    'active_url'            => 'El campo :atributo no es una URL válida' ,
    'after'                 => 'El campo :attribute debe ser una fecha posterior a :date.' ,
    'after_or_equal'        => 'El campo :attribute debe ser una fecha posterior o igual a :date.' ,
    'alpha'                 => 'El campo :attribute solo puede contener letras.' ,
    'alpha_dash'            => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.' ,
    'alpha_num'             => 'El campo :attribute solo puede contener letras y números.' ,
    'array'                 => 'El campo :attribute debe ser un array.' ,
    'before'                => 'El campo :attribute debe ser una fecha anterior a :date.' ,
    'before_or_equal'       => 'El campo :attribute debe ser una fecha anterior o igual a :date.' ,
    'entre'               => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.' ,
        'file'     => 'El archivo :atributo debe pesar entre :min y :max kilobytes.' ,
        'string'   => 'El campo :attribute debe contener entre :min y :max caracteres.' ,
        'array'    => 'El campo :attribute debe contener entre :min y :max elementos.' ,
    ],
    'boolean'               => 'El campo :attribute debe ser verdadero o falso.' ,
    'confirmed'             => 'El campo confirmación de :attribute no coincide.' ,
    'date'                  => 'El campo :attribute no corresponde con una fecha válida.' ,
    'date_equals'           => 'El campo :attribute debe ser una fecha igual a :date.' ,
    'date_format'           => 'El campo :attribute no corresponde con el formato de fecha :format.' ,
    'diferente'             => 'Los campos :atributo y :otros deben ser diferentes.' ,
    'digits'                => 'El campo :attribute debe ser un número de :digits dígitos.' ,
    'digits_ between'        => 'El campo :attribute debe contener entre :min y :max dígitos.' ,
    'dimensions'            => 'El campo :attribute tiene dimensiones de imagen inválidas.' ,
    'distinct'              => 'El campo :attribute tiene un valor duplicado.' ,
    'email'                 => 'El campo :attribute debe ser una dirección de correo válida' ,
    'ends_with'             => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values' ,
    'exists'                => 'El campo :atributo seleccionado no existe.' ,
    'file'                  => 'El campo :attribute debe ser un archivo.' ,
    'llenado'                => 'El campo :atributo debe tener un valor.' ,
    'gt'                    => [
        'numeric' => 'El campo :atributo debe ser mayor a :valor.' ,
        'file'     => 'El archivo :attribute debe pesar más de :value kilobytes.' ,
        'string'   => 'El campo :attribute debe contener más de :value caracteres.' ,
        'array'    => 'El campo :attribute debe contener más de :value elementos.' ,
    ],
    'gte'                   => [
        'numeric' => 'El campo :atributo debe ser mayor o igual a :valor.' ,
        'file'     => 'El archivo :atributo debe pesar :valor o más kilobytes.' ,
        'string'   => 'El campo :atributo debe contener :valor o más caracteres.' ,
        'array'    => 'El campo :atributo debe contener :valor o más elementos.' ,
    ],
    'image'                 => 'El campo :attribute debe ser una imagen.' ,
    'in'                    => 'El campo :atributo es inválido.' ,
    'in_array'              => 'El campo :atributo no existe en :otro.' ,
    'integer'               => 'El campo :attribute debe ser un número entero.' ,
    'ip'                    => 'El campo :attribute debe ser una dirección IP válida.' ,
    'ipv4'                  => 'El campo :attribute debe ser una dirección IPv4 válida.' ,
    'ipv6'                  => 'El campo :attribute debe ser una dirección IPv6 válida.' ,
    'json'                  => 'El campo :attribute debe ser una cadena de texto JSON válida.' ,
    'lt'                    => [
        'numeric' => 'El campo :atributo debe ser menor a :valor.' ,
        'file'     => 'El archivo :attribute debe pesar menos de :value kilobytes.' ,
        'string'   => 'El campo :attribute debe contener menos de :value caracteres.' ,
        'array'    => 'El campo :attribute debe contener menos de :value elementos.' ,
    ],
    'lte'                   => [
        'numeric' => 'El campo :atributo debe ser menor o igual a :valor.' ,
        'file'     => 'El archivo :atributo debe pesar :valor o menos kilobytes.' ,
        'string'   => 'El campo :atributo debe contener :valor o menos caracteres.' ,
        'array'    => 'El campo :atributo debe contener :valor o menos elementos.' ,
    ],
    'máximo'                   => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.' ,
        'file'     => 'El archivo :attribute no debe pesar más de :max kilobytes.' ,
        'string'   => 'El campo :attribute no debe contener más de :max caracteres.' ,
        'array'    => 'El campo :attribute no debe contener más de :max elementos.' ,
    ],
    'mimes'                 => 'El campo :attribute debe ser un archivo de tipo: :values.' ,
    'mimetypes'             => 'El campo :attribute debe ser un archivo de tipo: :values.' ,
    'min'                   => [
        'numeric' => 'El campo :atributo debe ser al menos :min.' ,
        'file'     => 'El archivo :atributo debe pesar al menos :min kilobytes.' ,
        'string'   => 'El campo :attribute debe contener al menos :min caracteres.' ,
        'array'    => 'El campo :attribute debe contener al menos :min elementos.' ,
    ],
    'not_in'                => 'El campo :atributo seleccionado es inválido.' ,
    'not_regex'             => 'El formato del campo :attribute es inválido.' ,
    'numeric'               => 'El campo :attribute debe ser un número.' ,
    'contraseña'              => 'La contraseña es incorrecta.' ,
    'presente'               => 'El campo :atributo debe estar presente.' ,
    'regex'                 => 'El formato del campo :attribute es inválido.' ,
    'required'              => 'El campo :atributo es obligatorio.' ,
    'required_if'           => 'El campo :atributo es obligatorio cuando el campo :otro es :valor.' ,
    'required_unless'       => 'El campo :attribute es requerido a menos que :other se encuentre en :values.' ,
    'required_with'         => 'El campo :attribute es obligatorio cuando :values ​​está presente.' ,
    'required_with_all'     => 'El campo :attribute es obligatorio cuando :values ​​están presentes.' ,
    'required_without'      => 'El campo :attribute es obligatorio cuando :values ​​no está presente.' ,
    'required_without_all' => 'El campo :atributo es obligatorio cuando ninguno de los campos :valores están presentes.' ,
    'same'                  => 'Los campos :atributo y :otros deben coincidir.' ,
    'tamaño'                  => [
        'numeric' => 'El campo :atributo debe ser :tamaño.' ,
        'file'     => 'El archivo :atributo debe pesar :tamaño kilobytes.' ,
        'string'   => 'El campo :attribute debe contener :size caracteres.' ,
        'array'    => 'El campo :attribute debe contener :size elementos.' ,
    ],
    'starts_with'           => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values' ,
    'string'                => 'El campo :attribute debe ser una cadena de caracteres.' ,
    'timezone'              => 'El campo :attribute debe ser una zona horaria.válida' ,
    'unique'                => 'El valor del campo :attribute ya está en uso.' ,
    'uploaded'              => 'El campo :attribute no se pudo subir.' ,
    'url'                   => 'El formato del campo :attribute es inválido.' ,
    'uuid'                  => 'El campo :attribute debe ser un UUID válido.' ,

    /*
    |----------------------------------------------------------------- -------------------------
    | Líneas de idioma de validación personalizadas
    |----------------------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos usando el
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido para
    | especificar una línea de idioma personalizada específica para una regla de atributo determinada.
    |
    */

    'personalizado' => [
        'nombre-atributo' => [
            'nombre-regla' => 'mensaje-personalizado' ,
        ],
    ],

    /*
    |----------------------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    |----------------------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributos
    | con algo más fácil de leer, como la dirección de correo electrónico en su lugar
    | de "correo electrónico". Esto simplemente nos ayuda a que los mensajes sean un poco más limpios.
    |
    */

    'atributos' => [],

];
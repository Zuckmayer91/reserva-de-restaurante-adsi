<?php

return [
    'search_prompt' => 'Buscar nombre de la api',
    'search_tokens_prompt' => 'Buscar tokens',

    'text_tab_general' => 'General',
    'text_tokens_title' => 'Tokens de acceso',
    'text_token_type_staff' => 'Personal',
    'text_token_type_customer' => 'Cliente',
    'text_guest' => 'Invitados',
    'text_admin' => 'Personal',
    'text_customer' => 'Clientes',
    'text_admin_customer' => 'Personal o Clientes',
    'text_all' => 'Todos',
    'text_allow_only' => 'Permitir solo',

    'button_tokens' => '<i class="fa fa-key"></i>&nbsp;&nbsp;Tokens de acceso',

    'column_api_name' => 'Nombre de API',
    'column_base_endpoint' => 'Base de Endpoint',
    'column_description' => 'Descripción',

    'column_issued_to' => 'Emitido a',
    'column_token_type' => 'Tipo',
    'column_device_name' => 'Nombre del dispositivo',
    'column_created' => 'Creado el',
    'column_lastused' => 'Última vez usado',

    'label_api_name' => 'Nombre de API',
    'label_base_endpoint' => 'Base de Endpoint',
    'label_description' => 'Descripción',
    'label_api_name_comment' => 'Nombre del recurso de tu API',
    'label_description_comment' => 'Describa el recurso de la API',
    'label_base_endpoint_comment' => 'https://ejemplo.com/api/<b>endpoint</b>',

    'label_controller' => 'Controlador',
    'label_actions' => 'Acciones',
    'help_actions' => 'Dejar en blanco para desactivar el Endpoint',
    'label_require_authorization' => 'Requiere autorización',
    'label_setup' => 'Documentos de referencia',

    'actions' => [
        'text_index' => 'Listar todos los recursos (GET)',
        'text_show' => 'Mostrar un simple recurso (GET)',
        'text_store' => 'Crear un recurso (POST)',
        'text_update' => 'Actualizar un recurso (PUT/PATCH)',
        'text_destroy' => 'Eliminar un recurso (BORRAR)',
    ],

    'alert_auth_failed' => 'No se ha proporcionado un token de API válido.',
    'alert_auth_restricted' => 'El token de API no tiene permisos para realizar la solicitud.',
    'alert_token_restricted' => 'El token de API no tiene las habilidades adecuadas para realizar esta acción',
    'alert_validation_failed' => 'Error al validar los parámetros de la solicitud',
];

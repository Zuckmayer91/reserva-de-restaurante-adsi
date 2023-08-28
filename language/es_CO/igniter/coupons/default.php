<?php

return [
    'side_menu' => 'Cupones',

    'permissions' => 'Crear, editar y eliminar cupones',

    'text_title' => 'Cupones',
    'text_form_name' => 'Cupón',
    'text_tab_general' => 'General',
    'text_tab_restrictions' => 'Restricciones',
    'text_tab_history' => 'Historial',
    'text_filter_search' => 'Buscar por nombre, código o validez.',
    'text_filter_type' => 'Ver todos los tipos',
    'text_empty' => 'No hay cupones disponibles.',
    'text_fixed_amount' => 'Cantidad fija',
    'text_percentage' => 'Porcentaje',
    'text_forever' => 'Para siempre',
    'text_fixed' => 'Fijo',
    'text_period' => 'Período',
    'text_recurring' => 'Recurrente',
    'text_delivery_only' => 'Sólo Domicilios',
    'text_collection_only' => 'Sólo recogida en el local',
    'text_redeemed' => 'Canjeado',
    'text_not_redeemed' => 'Aún no se ha canjeado',
    'text_coupon' => 'Cupón de descuento [%s]',

    'alert_coupon_login_required' => 'Por favor, inicia sesión o regístrate para usar este cupón',

    'column_code' => 'Código',
    'column_discount' => 'Descuento',
    'column_validity' => 'Validez',
    'column_order_id' => 'ID Pedido',
    'column_customer' => 'Cliente',
    'column_amount' => 'Cantidad Total',
    'column_min_total' => 'Total mínimo del pedido',
    'column_date_used' => 'Fecha de uso',
    'column_count' => 'Número de canjes',

    'label_code' => 'Código',
    'label_discount' => 'Descuento',
    'label_min_total' => 'Total Mínimo',
    'label_redemption' => 'Reembolsos',
    'label_customer_redemption' => 'Reembolsos al cliente',
    'label_validity' => 'Validez',
    'label_order_restriction' => 'Restricción de pedido',
    'label_cart_restriction' => 'No aplicar a todo el carrito',
    'label_categories' => 'Aplicar a los elementos del menú de estas categorías',
    'label_menus' => 'Aplicar a estos elementos de menú',
    'label_date' => 'Fecha',
    'label_fixed_date' => 'Fecha fija',
    'label_fixed_from_time' => 'Fijado desde hora',
    'label_fixed_to_time' => 'Fijado a hora',
    'label_period_start_date' => 'Fecha de inicio del período',
    'label_period_end_date' => 'Fecha de fin del período',
    'label_recurring_every' => 'Recurriendo cada',
    'label_recurring_from_time' => 'Repite desde esta Hora',
    'label_recurring_to_time' => 'Repite hasta esta Hora',
    'label_auto_apply' => 'Aplicar automáticamente',

    'help_type' => 'Si se resta una cantidad fija o un porcentaje del total del pedido.',
    'help_redemption' => 'El número total de veces que este cupón puede ser canjeado. Introduzca 0 para canjear ilimitadamente.',
    'help_customer_redemption' => 'El número de veces que un cliente específico puede canjear este cupón. Establecer en 0 para permitir cualquier número de canjes.',
    'help_order_restriction' => 'Restringir el cupón a un tipo de pedido específico.',
    'help_locations' => 'Aplicar este cupón SÓLO en los pedidos realizados en la ubicación seleccionada(s). Dejar en blanco para hacer que el cupón esté disponible en todas las ubicaciones',
    'help_categories' => 'Aplicar este cupón SÓLO a elementos del menú en el orden que aparecen en estas categorías. Dejar en blanco para hacer que el cupón esté disponible en todos los artículos',
    'help_menus' => 'Aplicar este cupón SOLO a estos elementos del menú en el pedido. Dejar en blanco para que el cupón esté disponible en todos los artículos',
    'help_coupon_condition' => 'Aplica cupón al carrito.',
];
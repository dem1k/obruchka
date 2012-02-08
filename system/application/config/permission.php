<?php
$config['permission'] = array(
    'Collection' => array(
        'name' => 'Collection',
        'methods' => array(
            'index' => 'Просмотр списка',
            'view' => 'Детальный просмотр',
            'create' => 'Создание коллекции',
            'status'=>'Редактирование статуса',
            'region'=>'Редактирование региона',
            'edit_info'=>'Редактирование контактов',
            'edit_product'=>'Редактирование заказанных товаров'
        )
    ),
    'general' => array(
        'name' => 'Главная',
        'methods' => array(
            'index' => 'Страничка приветсвия',
        )
    ),
    'users' => array(
        'name' => 'Пользователи',
        'methods' => array(
            'index' => 'Просмотр списка',
            'create' => 'Создание',
            'edit' => 'Редактирование',
            'delete'=>'Удаление',
        )
    ),
);






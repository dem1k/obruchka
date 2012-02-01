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
    'staticpage' => array(
        'name' => 'Статичные страницы',
        'methods' => array(
            'index' => 'Просмотр списка',
            'view' => 'Детальный просмотр',
            'edit'=>'Редактирование',
            'create'=>'Добавление',
            'delete'=>'Удаление',
        )
    ),
    'works' => array(
        'name' => 'Смотрим на работу',
        'methods' => array(
            'index' => 'Просмотр списка',
            'view' => 'Детальный просмотр',
            'edit'=>'Редактирование',
            'create'=>'Добавление',
            'delete'=>'Удаление',
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
    'currency' => array(
        'name' => 'Валюты',
        'methods' => array(
            'index' => 'Просмотр списка',
            'create' => 'Создание',
            'edit' => 'Редактирование',
            'delete'=> 'Удаление'
        )
    ),
);






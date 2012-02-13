<?php
$tab = $res ? $res : "collection";

//var_dump($res);exit;
?>

<div class="column-left">

    <ul class="sidebar">
        <li class="<?= ($tab == "collection") ? "active" : "" ?>"><a href="/admin/collection">Коллекции</a></li>
        <li class="<?= ($tab == "orders") ? "active" : "" ?>"><a href="/admin/orders">Заказы</a></li>
        <!--li class="<?=($tab == "startpage") ? "active " : "" ?>"><a href="/admin/startpage">Главная</a></li-->
        <li class="<?= ($tab == "product") ? "active" : "" ?>"><a href="/admin/product">Товары</a></li>
        <li class="<?= ($tab == "parametrs") ? "active" : "" ?>"><a href="/admin/parametrs/">Параметры товара</a></li>
        <li class="<?= ($tab == "article") ? "active" : "" ?>"><a href="/admin/article">Статьи</a></li>
        <li class="<?= ($tab == "map") ? "active" : "" ?>"><a href="/admin/map">Карта</a></li>
        <li class="<?= ($tab == "seo") ? "active" : "" ?>"><a href="/admin/seo">CEO</a></li>
        <li class="<?= ($tab == "contacts") ? "active" : "" ?>"><a href="/admin/contacts">Контакты</a></li>
        <li class="<?= ($tab == "emails") ? "active" : "" ?>"><a href="/admin/emails">Email-s</a></li>
        <li class="<?= ($tab == "sender") ? "active" : "" ?>"><a href="/admin/messages">Рассылка</a></li>
        <li class="last"><a href="/admin/auth/logout">Выход</a></li>
    </ul>

</div>




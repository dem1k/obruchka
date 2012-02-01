<a class="button" href="/admin/product/create">Создать товар</a>
<br/>

<table class="extended">
    <thead>
    <th width="150">Картинка</th>
    <th>Название</th>
    <th width="150">Действие</th>
</thead>
<tbody>
    <?php if (!empty($products)):?>
        <?php foreach($products as $product):?>
    <tr>
        <td><img style="height: 100px;width: auto;"src="/uploads/products/<?=$product['image_small']?>"/></td>
        <td><?=$product['name']?></td>
        <td><a href="/admin/product/view/<?=$product['id']?>/">Показать</a>
            <a href="/admin/product/edit/<?=$product['id']?>/">Редактировать</a>
            <a href="/admin/product/delete/<?=$product['id']?>/" onclick="return confirm('Удалить ?')">Удалить</a></td>
    </tr>
        <?php endforeach?>
    <?php else:?>
    <tr><td></td><td> Еще нет товаров !!</td></tr>
    <?php endif;?>
</tbody>
<tfoot>
<th>Картинка</th>
<th>Название</th>
<th>Действие</th>
</tfoot>
</table>
<a class="button" href="/admin/collection/create">Создать Коллекцию</a>
<br/>

<table class="extended">
    <thead>
    <th>ID</th>
    <th>Название</th>
    <th>Действие</th>
</thead>
<tbody>
    <?php if (!empty($collections)):?>
        <?php foreach($collections as $collection):?>
    <tr>
        <td><?=$collection['id']?></td>
        <td><?=$collection['name']?></td>
        <td><a href="/admin/collection/view/<?=$collection['id']?>/">Показать</a>
            <a href="/admin/collection/edit/<?=$collection['id']?>/">Редактировать</a>
            <a href="/admin/collection/delete/<?=$collection['id']?>/"onclick="return confirm('Удалить коллекцию с ID=<?=$collection['id']?>')">Удалить</a></td>
    </tr>
        <?php endforeach?>
    <?php else:?>
    <tr><td></td><td> Еще нет ниодной коллекции !!</td></tr>
    <?php endif;?>
</tbody>
<tfoot>
<th>ID</th>
<th>Название</th>
<th>Действие</th>
</tfoot>
</table>

<a class="button" href="/admin/map/create/">Добавить город</a> <br/>
<table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
    <thead>
    <th width="20px">ID</th>
    <th>Название</th>
    <th width="200px">Действие</th>
</thead>
<tbody>
    <?php foreach ($map as $city):?>
    <tr>
        <td><?=$city->id?>
        </td>
        <td><?=$city->city_ru?>
        </td>
        <td>
            <a href="/admin/map/edit/<?=$city->id?>/">Редактировать</a>
            <a  onclick="return confirm('Удалить запись с ID=<?=$city->id?>?>')" href="/admin/map/delete/<?=$city->id?>/">Удалить</a>
        </td>
    </tr>
    <?endforeach;?>
</tbody>
<tfoot> <th>ID</th>
<th>Название</th>
<th>Действие</th></tfoot>
</table>

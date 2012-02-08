<script type="text/javascript">
$(function(){
// Add tables functionality (like sorting, filtering, and paging)
  $('table.extended').dataTable({
    "bAutoWidth": false,
    "iDisplayLength": 25,
    "oLanguage": {
      "sLengthMenu": "Показывать _MENU_ записей на стр.",
      "sZeroRecords": "К сожалению ничего не найдено.",
      "sInfo": "Показано с _START_ по _END_ из _TOTAL_ записей",
      "sInfoEmtpy": "0 из 0 записей",
      "sInfoFiltered": "(найденых из всего _MAX_ записей)",
      "sSearch": "Поиск"
    },
    "aaSorting": [[ 0, "desc" ]]
  });
});
</script>
<a class="button" href="/admin/product/create">Добавить продукт</a>
<br/>
<? if (!empty($product[0])): ?>

<table class="extended">
    <thead>
        <tr>
            <th>id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Управление</th>
        </tr>
    </thead>
    <tbody>
            <? foreach ($product as $prod): ?>
        <tr>
            <td><?php echo $prod->id ?></td>
            <td><?php echo $prod->name ?></td>
            <td><?php echo $prod->description ?></td>
            <td>
                <a href="/admin/product/view/<?php echo $prod->id ?>">Подробно</a>
                <a href="/admin/product/edit/<?php echo $prod->id ?>">Редактировать</a>
                <a href="/admin/product/delete/<?php echo $prod->id ?>">Удалить</a>
            </td>
        </tr>
            <? endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Управление</th>
        </tr>
    </tfoot>
</table>
<div class="clear"></div>

    <?php /* <div class="pagination">  <?=$pagination?> </div> */ ?>
<? else: ?>
Продуктов в базе нету
<? endif ?>

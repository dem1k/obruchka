<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Коллекции</a></li>
        <li><a href="#tabs-2">Группы</a></li>
        <li><a href="#tabs-3">Металлы</a></li>
        <li><a href="#tabs-4">Цвета</a></li>
        <li><a href="#tabs-5">Вставки</a></li>
    </ul>
    <div id="tabs-1">
        <a class="button" href="/admin/parametrs/create/collections/">Создать колекцию</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($collections as $collection):?>
                <tr>
                    <td><?=$collection['id']?>
                    </td>
                    <td><?=$collection['name']?>
                    </td>
                    <td>
                        <a href="/admin/parametrs/edit/collections/<?=$collection['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить коллекцию с ID=<?=$collection['id']?>')" href="/admin/parametrs/delete/collections/<?=$collection['id']?>/">Удалить</a>
                    </td>
                </tr>
                <?endforeach;?>
            </tbody>
            <tfoot> <th>ID</th>
            <th>Название</th>
            <th>Действие</th></tfoot>
        </table>

    </div>
    <div id="tabs-2">
        <a class="button" href="/admin/parametrs/edit/classes/">Создать Группу</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($classes as $class):?>
                <tr>
                    <td><?=$class['id']?>
                    </td>
                    <td><?=$class['name']?>
                    </td>
                    <td>
                        <a href="/admin/class/edit/<?=$class['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить группу с ID=<?=$class['id']?>')" href="/admin/class/delete/<?=$class['id']?>/">Удалить</a>
                    </td>
                </tr>
                <?endforeach;?>
            </tbody>
            <tfoot> <th>ID</th>
            <th>Название</th>
            <th>Действие</th></tfoot>
        </table>

    </div>
    <div id="tabs-3">
        <a class="button" href="/admin/parametrs/create/metals/">Создать металл</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($metals as $metal):?>
                <tr>
                    <td>
                            <?=$metal['id']?>
                    </td>
                    <td>
                            <?=$metal['name']?>
                    </td>
                    <td>
                        <a href="/admin/metal/edit/<?=$metal['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить металл с ID=<?=$metal['id']?>')" href="/admin/metal/delete/<?=$metal['id']?>/">Удалить</a>
                    </td>
                </tr>
                <?endforeach;?>
            </tbody>
            <tfoot> <th>ID</th>
            <th>Название</th>
            <th>Действие</th></tfoot>
        </table>

    </div>
    <div id="tabs-4">
        <a class="button" href="/admin/parametrs/create/colors/">Создать цвет</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($colors as $color):?>
                <tr>
                    <td>
                            <?=$color['id']?>
                    </td>
                    <td>
                            <?=$color['name']?>
                    </td>
                    <td>
                        <a href="/admin/parametrs/edit/colors/<?=$color['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить цвет с ID=<?=$color['id']?>')" href="/admin/parametrs/create/colors/<?=$color['id']?>/">Удалить</a>
                    </td>
                </tr>
                <?endforeach;?>
            </tbody>
            <tfoot> <th>ID</th>
            <th>Название</th>
            <th>Действие</th></tfoot>
        </table>

    </div>
    <div id="tabs-5">
        <a class="button" href="/admin/parametrs/create/rocks/">Создать вставку</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($rocks as $rock):?>
                <tr>
                    <td><?=$rock['id']?>
                    </td>
                    <td><?=$rock['name']?>
                    </td>
                    <td>
                        <a href="/admin/parametrs/edit/rocks/<?=$rock['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить коллекцию с ID=<?=$rock['id']?>')" href="/admin/parametrs/delete/rocks/<?=$rock['id']?>/">Удалить</a>
                    </td>
                </tr>
                <?endforeach;?>
            </tbody>
            <tfoot> <th>ID</th>
            <th>Название</th>
            <th>Действие</th></tfoot>
        </table>

    </div>
</div>
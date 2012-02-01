<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Статьи</a></li>
        <li><a href="#tabs-2">Категории</a></li>
    </ul>
    <div id="tabs-1">
        <a class="button" href="/admin/article/create/">Создать статью</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($articles as $article):?>
                <tr>
                    <td><?=$article['id']?>
                    </td>
                    <td><?=$article['name']?>
                    </td>
                    <td>
                        <a href="/admin/article/edit/<?=$article['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить cтатью с ID=<?=$article['id']?>')" href="/admin/parametrs/delete/articles/<?=$article['id']?>/">Удалить</a>
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
        <a class="button" href="/admin/parametrs/create/category_art/">Создать категорию</a> <br/>
        <table width="100%" border="1px solid " cellspacing="0" cellpadding="0">
            <thead>
            <th width="20px">ID</th>
            <th>Название</th>
            <th width="200px">Действие</th>
            </thead>
            <tbody>
                <?php foreach ($categoryes_art as $category):?>
                <tr>
                    <td><?=$category['id']?>
                    </td>
                    <td><?=$category['name']?>
                    </td>
                    <td>
                        <a href="/admin/parametrs/edit/category_art/<?=$category['id']?>/">Редактировать</a>
                        <a  onclick="return confirm('Удалить категорию с ID=<?=$category['id']?>')" href="/admin/parametrs/delete/category_art/<?=$category['id']?>/">Удалить</a>
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
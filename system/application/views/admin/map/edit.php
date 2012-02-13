
<?=form_open_multipart('admin/map/edit/'.$id);?>
<?=form_error("city","<span class='error'>","</span><br/>")?>
<?=form_error("city_ru","<span class='error'>","</span><br/>")?>
<?=form_error("addr","<span class='error'>","</span><br/>")?>
<?=form_error("addr2","<span class='error'>","</span><br/>")?>
<?=form_error("description","<span class='error'>","</span><br/>")?>
<?=form_error("x","<span class='error'>","</span><br/>")?>
<?=form_error("y","<span class='error'>","</span><br/>")?>
<table cellspacing="0">
    <tr>
        <td>
            Город
        </td>
        <td>
            <input type="text" name="city_ru" value="<?= set_value('city_ru',$map->city_ru); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Ссылка
        </td>
        <td>
            <input type="text" name="city" value="<?= set_value('city',$map->city); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Адресная строка
        </td>
        <td>
            <input type="text" name="addr" value="<?= set_value('addr',$map->addr); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Улица, номер дома
        </td>
        <td>
            <input type="text" name="addr2" value="<?= set_value('addr2',$map->addr2); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Координата для флешки Х
        </td>
        <td>
            <input type="text" name="x" value="<?= set_value('x',$map->x); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Координата для флешки Y
        </td>
        <td>
            <input type="text" name="y" value="<?= set_value('y',$map->y); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Вся статья
        </td>
        <td>
            <textarea name="description"><?=set_value("description",$map->description)?></textarea>
        </td>
    </tr>
</table>
<input type="hidden" name="action" value="save"/>
<input type="submit" value="Сохранить"/>

<?php form_close();?>

<script type="text/javascript" src="/assets/js/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="/assets/admin/js/product.js"></script>
<?=form_open_multipart('admin/product/create');?>
<?=form_error("name","<span class='error'>","</span><br/>")?>
<?=form_error("collection","<span class='error'>","</span><br/>")?>
<?=form_error("class","<span class='error'>","</span><br/>")?>
<?=form_error("metal","<span class='error'>","</span><br/>")?>
<?=form_error("color1","<span class='error'>","</span><br/>")?>
<!--?=form_error("color2","<span class='error'>","</span><br/>")?-->
<!--?=form_error("color3","<span class='error'>","</span><br/>")?-->
<?=form_error("rock","<span class='error'>","</span><br/>")?>
<?=form_error("m_art","<span class='error'>","</span><br/>")?>
<?=form_error("m_weight","<span class='error'>","</span><br/>")?>
<?=form_error("f_art","<span class='error'>","</span><br/>")?>
<?=form_error("f_weight","<span class='error'>","</span><br/>")?>
<?=form_error("new","<span class='error'>","</span><br/>")?>
<?=form_error("fan","<span class='error'>","</span><br/>")?>
<?=form_error("description","<span class='error'>","</span><br/>")?>
<?= isset($error_upload) ? "<span class='error'>".$error_upload."</span><br/>" : ""?>
<table cellspacing="0">

    <tr>
        <td>
            Название
        </td>
        <td>
            <input type="text" name="name" value="<?= set_value('name'); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Коллекция
        </td>
        <td>
            <select name="collection">

                <?php foreach ($collections as $collection):?>
                <option value="<?=$collection['id']?>"<?=set_select('collection', $collection['id'])?> > <?=$collection['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('collection', 0,true)?> >не выбрано</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Группа товара
        </td>
        <td>
            <select name="class">
                <?php foreach ($classes as $class):?>
                <option value="<?=$class['id']?>"<?=set_select('class', $class['id'])?> > <?=$class['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('class', 0,true)?> >не выбрано</option>

            </select>
        </td>
    </tr>
    <tr >
        <td>
            Металл
        </td>

        <td>
            <select name="metal">
                <?php foreach ($metals as $metal):?>
                <option value="<?=$metal['id']?>"<?=set_select('metal', $metal['id'])?> > <?=$metal['name']?></option>
                <?php endforeach;?>
                <option value="0"<?=set_select('metal', 0,true)?> >не выбрано</option>


            </select>
        </td>
    <tr bgcolor="#EEEEEE">
        <td>
            Цвет металла
        </td>
        <td>
             <select name="color1">
                <?php foreach ($colors as $color):?>
                <option value="<?=$color['id']?>"<?=set_select('color1', $color['id'])?> > <?=$color['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('color1', 0,true)?> >не выбрано</option>


            </select>
        </td>
    </tr>
    <!--tr bgcolor="#EEEEEE">
        <td align="right">1
        </td>
        <td>
            <select name="color1">
                <?php foreach ($colors as $color):?>
                <option value="<?=$color['id']?>"<?=set_select('color1', $color['id'])?> > <?=$color['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('color1', 0,true)?> >не выбрано</option>


            </select>
        </td>
    </tr>

    <tr bgcolor="#EEEEEE">
        <td align="right">2
        </td>
        <td>
            <select name="color2">
                <?php foreach ($colors as $color):?>
                <option value="<?=$color['id']?>"<?=set_select('color2', $color['id'])?> > <?=$color['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('color2', 0,true)?> >не выбрано</option>


            </select>
        </td>
    </tr>

    <tr bgcolor="#EEEEEE">
        <td align="right">3
        </td>
        <td>
            <select name="color3">
                <?php foreach ($colors as $color):?>
                <option value="<?=$color['id']?>"<?=set_select('color3', $color['id'])?> > <?=$color['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('color3', 0,true)?> >не выбрано</option>


            </select>
        </td>
    </tr-->
    <tr>
        <td>
            Вставка
        </td>
        <td>
            <select name="rock">
                <?php foreach ($rocks as $rock):?>
                <option value="<?=$rock['id']?>"<?=set_select('rock', $rock['id'])?> > <?=$rock['name']?></option>
                <?php endforeach;?>
                <option value=""<?=set_select('rock', 0,true)?> >не выбрано</option>


            </select>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td>Мужское</td>
                </tr>
                <tr>
                    <td>
                        Артикул
                    </td>
                    <td>
                        <input type="text" name="m_art" value="<?=set_value("m_art")?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Средний вес (гр.)
                    </td>
                    <td>
                        <input type="text" name="m_weight" value="<?=set_value("m_weight")?>"/>
                    </td>
                </tr>

            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td>Женское</td></tr>
                <tr>
                    <td>
                        Артикул
                    </td>
                    <td>
                        <input type="text" name="f_art"value="<?=set_value("f_art")?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Средний вес (гр.)
                    </td>
                    <td>
                        <input type="text" name="f_weight"value="<?=set_value("f_weight")?>"/>
                    </td>
                </tr>

            </table></td>
    </tr>
    <tr>
        <td>
            Новинка (0-99)
        </td>
        <td>
            <input type="text" name="new" value="<?=set_value("new",0)?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Популярность (0-99)
        </td>
        <td>
            <input type="text" name="fan" value="<?=set_value("fan",0)?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Описание
        </td>
        <td>
            <textarea  name="description" ><?=set_value("description")?>"</textarea>
        </td>
    </tr>
    <tr>
        <td>
            Большая картинка
        </td>
        <td>
            <div id="container_big">
                <div id="filelist_big">No runtime found.</div>
                <br />
                <a id="pickfiles_big" href="#">[Выбрать]</a>
                <div id=""></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Маленькая картинка
        </td>
        <td>
            <div id="container_small">
                <div id="filelist_small">No runtime found.</div>
                <br />
                <a id="pickfiles_small" href="#">[Выбрать]</a>
                <div id=""></div>
            </div>
        </td>
    </tr>
</table>
<input type="submit" value="Сохранить"/>
<input type="hidden" name="action" value="save"/>

<?php form_close();?>

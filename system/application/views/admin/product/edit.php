<script type="text/javascript" src="/assets/js/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="/assets/admin/js/product.js"></script>




<?=form_open_multipart('admin/product/edit/'.$id);?>
<!--form action="/admin/product/create" method="post"  -->
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
            Наименование
        </td>
        <td>
            <input type="text" name="name" value="<?= set_value('name',$product['name']); ?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Коллекция
        </td>
        <td>
            <select name="collection">
                <?php foreach ($collections as $collection):?>
                <option value="<?=$collection['id']?>"<?= $collection['name']==$product['collection'] ? set_select('collection', $collection['id'],true):set_select('collection', $collection['id'],false)?> > <?=$collection['name']?></option>
                <?php endforeach;?>
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
                <option value="<?=$class['id']?>"<?=$class['name']==$product['class']?set_select('class', $class['id'],true):set_select('class', $class['id'],false)?> > <?=$class['name']?></option>
                <?php endforeach;?>
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
                <option value="<?=$metal['id']?>"<?=$metal['name']==$product['metal']?set_select('metal', $metal['id'],true):set_select('metal', $metal['id'],false)?> > <?=$metal['name']?></option>
                <?php endforeach;?>
            </select>
        </td>
    <tr bgcolor="#EEEEEE">
        <td>
            Цвет металла
        </td>
        <td> <select name="color1">
                <?php foreach ($colors as $color):?>
                <option value="<?=$color['id']?>"<?=$color['name']==$product['color1_id']?set_select('color', $color['id'],true):set_select('color', $color['id'],false)?> > <?=$color['name']?></option>
                <?php endforeach;?>
            </select>
        </td>
    </tr>
    <!--tr bgcolor="#EEEEEE">
        <td align="right">1
        </td>
        <td>
            <select name="color1">
                <?php foreach ($colors as $color):?>
                <option value="<?=$color['id']?>"<?=$color['name']==$product['color1_id']?set_select('color', $color['id'],true):set_select('color', $color['id'],false)?> > <?=$color['name']?></option>
                <?php endforeach;?>
            </select>
        </td>
    </tr>

    <tr bgcolor="#EEEEEE">
        <td align="right">2
        </td>
        <td>
            <select name="color2">
                <?php foreach ($colors as $color):?>
                <option value="0"> не выбрано</option>
                    <? if( $color['name']==$product['color2_id']) : ?>
                <option value="<?=$color['id']?>"<?= set_select('color2', $color['id'],true)?>> <?=$color['name']?></option>
                    <?else :?>
                <option value="<?=$color['id']?>"<?= set_select('color2', $color['id'],false)?>> <?=$color['name']?></option>
                    <?endif;?>
                <?php endforeach;?>


            </select>
        </td>
    </tr>

    <tr bgcolor="#EEEEEE">
        <td align="right">3
        </td>
        <td>
            <select name="color3">
                <?php foreach ($colors as $color):?>
                <option value="0"> не выбрано</option>
                    <? if( $color['name']==$product['color3_id']) : ?>
                <option value="<?=$color['id']?>"<?= set_select('color3', $color['id'],true)?>> <?=$color['name']?></option>
                    <?else :?>
                <option value="<?=$color['id']?>"<?= set_select('color3', $color['id'],false)?>> <?=$color['name']?></option>
                    <?endif;?>
                <?php endforeach;?>


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
                <option value="<?=$rock['id']?>"<?=$rock['name']==$product['rock']?set_select('rock', $rock['id'],true):set_select('rock', $rock['id'],false)?> > <?=$rock['name']?></option>
                <?php endforeach;?>
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
                        <input type="text" name="m_art" value="<?=set_value("m_art",$product['m_art'])?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Средний вес (гр.)
                    </td>
                    <td>
                        <input type="text" name="m_weight" value="<?=set_value("m_weight",$product['m_weight'])?>"/>
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
                        <input type="text" name="f_art"value="<?=set_value("f_art",$product['f_art'])?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Средний вес (гр.)
                    </td>
                    <td>
                        <input type="text" name="f_weight"value="<?=set_value("f_weight",$product['f_weight'])?>"/>
                    </td>
                </tr>

            </table></td>
    </tr>
    <tr>
        <td>
            Новинка (0-99)
        </td>
        <td>
            <input type="text" name="new" value="<?=set_value("new",$product['new'])?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Популярность (0-99)
        </td>
        <td>
            <input type="text" name="fan" value="<?=set_value("fan",$product['fan'])?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Описание
        </td>
        <td>
            <input type="text" size="32" name="description" value="<?=set_value("description",$product['description'])?>"/>
        </td>
    </tr>
    <tr>
        <td>
            Большая картинка
        </td>
        <td>
            <div id="container_big">
                <img height="200px" src="/uploads/products/<?=$product['image_big']?>"/>
                <input type="hidden" name="image_big" value="<?=$product['image_big']?>" />
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
                <img height="100px"src="/uploads/products/<?=$product['image_small']?>"/>
                <input type="hidden" name="image_small" value="<?=$product['image_small']?>" />
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

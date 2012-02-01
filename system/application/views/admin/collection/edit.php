<?=form_open('admin/collection/edit/'.$id.'/');?>
<h1>Переименовать коллекцию</h1>

Имя коллекции <input type="text" name="name" value="<?= set_value('name',(isset($name))?$name:'')?>"/>
<br/>
<?=form_hidden("action","save")?>
<input type="submit" value="Сохранить"/>
<?=form_close()?>
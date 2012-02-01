<?=form_open('/admin/seo')?>

<table >
    <tr>
        <td>
            Title
        </td>
        <td><?=form_error('title')?>
            <input type="text" name="title" value="<?=set_value('title',$seo->title)?>" />
        </td>
    </tr>
    <tr>
        <td>
            Keywords
        </td>
        <td>
            <?=form_error('keywords')?>
            <textarea cols="50" name="keywords"> <?=set_value('keywords',$seo->keywords)?> </textarea>
    </tr>
    <tr>
        <td>
            Description:
        </td>
        <td>
            <?=form_error('description')?>
            <textarea cols="50" name="description"><?=set_value('description',$seo->description)?> </textarea>
        </td>
    </tr>
</table>
<input type="hidden" name="action" value="save">
<input type="submit" value="Save" />
</form>
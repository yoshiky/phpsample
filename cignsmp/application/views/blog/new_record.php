<!DOCTYPE html>
<html>
    <head>
        <mata charset="utf-8" />
        <title>New</title>
    </head>
    <body>
        <h1>新規作成</h1>
        <?php echo form_open('blog/create') ?>
            <?php if (isset($validation_errors)) : ?>
                <div id="validation_errors" style="background-color: red;">
                    <?php echo $validation_errors; ?>
                </div>
            <?php endif; ?>
            <div>
                <label for="title">タイトル</label>
                <input type="text" name="title" value="<?php echo set_value('title', $record['title']); ?>">
            </div>

            <button type="submit">送信する</button>
            <button type="reset">リセット</button>

        <?php form_close() ?>

        <?php echo anchor('blog/index', 'Go to Index'); ?>

    </body>
</html>

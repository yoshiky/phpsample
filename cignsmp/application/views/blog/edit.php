<!DOCTYPE html>
<html>
    <head>
        <mata charset="utf-8" />
        <title>Edit</title>
    </head>
    <body>
        <h1>編集</h1>
        <?php if($record != FALSE) : ?>

            <?php echo form_open('blog/update') ?>
                <?php if (isset($validation_errors)) : ?>
                    <div id="validation_errors" style="background-color: red;">
                        <?php echo $validation_errors; ?>
                    </div>
                <?php endif; ?>

                <input type="hidden" name="id" id="id" value="<?php echo $record['id']; ?>">

                <div>
                    <label for="title">タイトル</label>
                    <input type="text" name="title" value="<?php echo set_value('title', $record['title']); ?>">
                </div>

                <button type="submit">更新する</button>
                <button type="reset">リセット</button>

            <?php form_close() ?>

        <?php else : ?>
            <p>データが存在しません。</p>
        <?php endif; ?>

        <?php echo anchor('blog/index', 'Go to Index'); ?>

    </body>
</html>

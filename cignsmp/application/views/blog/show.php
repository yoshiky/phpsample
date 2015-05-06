<!DOCTYPE html>
<html>
    <head>
        <mata charset="utf-8" />
        <title>Show</title>
    </head>
    <body>
        <?php if($this->session->flashdata('notice')) : ?>
            <div id="notice" style="background-color: lightgreen;">
                <?php echo $this->session->flashdata('notice'); ?>
            </div>
        <?php endif; ?>

        <h1>表示</h1>

        <?php if($record != FALSE): ?>
            <p>
                <b>タイトル:</b>
                <?php echo $record['title']; ?>
            </p>
        <?php else : ?>
            <p>データが存在しません。</p>
        <?php endif; ?>

        <?php echo anchor('blog/index', 'Go to INDEX'); ?>
    </body>
</html>

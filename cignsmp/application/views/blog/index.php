<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>Index</title>
    </head>
    <body>
        <?php if($this->session->flashdata('notice')) : ?>
            <div id="notice" style="background-color: lightgreen;">
                <?php echo $this->session->flashdata('notice'); ?>
            </div>
        <?php endif; ?>

        <a href="<?php echo site_url('blog/new_record');?>">New Record</a>

        <h1>ブログ一覧</h1>
        <?php if ($records) : ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>タイトル</th>
                        <th>作成日</th>
                        <th>更新日</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $row) : ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->created_at; ?></td>
                            <td><?php echo $row->updated_at; ?></td>
                            <td><?php echo anchor('blog/show/'.$row->id, '表示')?></td>
                            <td><?php echo anchor('blog/edit/'.$row->id, '編集')?></td>
                            <td><?php echo anchor('blog/delete/'.$row->id, '削除', array('onClick' => "return confirm('本当に削除しますか？')") )?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>レコードがありません。</p>
        <?php endif; ?>
    </body>
</html>

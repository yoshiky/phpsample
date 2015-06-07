<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Sample</title>
        <meta charset="utf-8">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <script type="text/javascript">
            $(function(){
                // 商品都道府県別送料登録モーダルオープン
                $("#fee_modal").on("click", function() {
                    $('#myModal').empty().modal('show').load("<?php echo base_url();?>ajaxsample/fee");
                });
            });
        </script>
    </head>
    <body>
        <h1>test</h1>
        <div class="form-group">
            <label for="deliv_fee_prefecture">都道府県別</label>
            <a href="javascript:void(0)" id="fee_modal" class="btn btn-primary" >都道府県別送料</a>
        </div>
        <!--モーダルウィンドウ表示-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false"></div>

    </body>
</html>

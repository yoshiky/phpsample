<script type="text/javascript">
    $(function(){
        $('#save_pref_fee').on('click', function(){

            var data = {};
            $('[id^=name]').map(function(item, index){
                var id = $(this).attr('id');
                var value = $(this).val();
                data[id] = value;
            });

            $.ajax({
                type: 'POST',
                url: "<?php echo base_url() ?>ajaxsample/setfee",
                //dataType: 'json', // [memo]返り値は処理しないので不要
                data: data
            }).done(function(data, status, xhr){
                console.log('success!');
            }).fail(function(data, status, xhr){
                console.log('failed...');
            });

        });
    });
</script>


  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <?php for ($i=1;$i<10;$i++) { ?>
            <input type='text' id='name<?php echo $i?>' name='name' class='form-control' />
        <?php }?>
    </div>
  </div>

  <div class="modal-footer">
    <div class="text-center">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="save_pref_fee">保存</button>
        <button type="button" class="btn btn-default" id="clear">クリア</button>
    </div>
  </div>

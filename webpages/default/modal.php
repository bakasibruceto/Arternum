<script type='text/javascript'>
    $(document).ready(function() {
        $('.imagedata').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {
                    id: id
                },
                success: function(response) {
                    $('.modal-body').html(response);
                    $('#empModal').modal('show');
                }
            });
        });
    });
</script>
</div>
<div class="modal pt-5" id="empModal" role="dialog">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content bg-dark">
            <div class="modal-body">
                
                <!-- <button type="button" class="close" data-dismiss="modal"> -->
                    
            </div>
            <!-- <div class="modal-footer"></div> -->
        </div>
    </div>
</div>

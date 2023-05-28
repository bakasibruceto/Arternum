<script type='text/javascript'>
          $(document).ready(function() {
              $('.userinfo').click(function() {
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
      <div class="modal" id="empModal" role="dialog">
          <div class="modal-dialog  modal-xl">
              <div class="modal-content bg-dark">
                  <!-- <div class="modal-header">
                    <h4 class="modal-title">User Info</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div> -->
                  <div class="modal-body">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                  <!-- <div class="modal-footer"></div> -->
              </div>
          </div>
      </div>
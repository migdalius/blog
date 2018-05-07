<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">

            <form class="form-horizontal" role="form">

              <div class="form-group">
                <label class="control-label col-sm-2" for="id">ID:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="fid" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="login">LOGIN:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="logi" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="narzut">Narzut:</label>
                <div class="col-sm-10">
                  <input type="number" step="0.01" class="form-control" id="narzu">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="dodatek">Dodatek:</label>
                <div class="col-sm-10">
                  <input type="number" step="0.01" class="form-control" id="dodate">
                </div>
              </div>

            </form>


            <div class="deleteContent">
              Are you Sure you want to delete <span class="dname"></span> ? <span
                class="hidden did"></span>
            </div>

            <div class="modal-footer">
              <button type="button" class="edit btn actionBtn" data-dismiss="modal">
                <span id="footer_action_button" class='glyphicon'> </span>
              </button>

              <button type="button" class="btn btn-warning" data-dismiss="modal">
                <span class='glyphicon glyphicon-remove'></span> Zamknij
              </button>
            </div>

          </div>
        </div>
      </div>   
    </div>
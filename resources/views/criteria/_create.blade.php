<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{ URL::to('/addCriteria') }}" method="post">
          @csrf 
              <div class="modal-header">
                <h4><i class="bi bi-justify"></i>{{ __(' Create Criteria') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label  data-toggle="tooltip" data-placement="top" title="Note: Not required if not have a criteria just leave blank..">Criteria Name: </label>
            
                <input type="text"  class="form-control" name="crit_name">
                <label data-toggle="tooltip" data-placement="top" title="Note: Still required if not have a criteria..">Objective:</label>
              
                <input type="number" required class="form-control" name="crit_total">
                <input type="hidden" required class="form-control" name="quali_id" value="{{ $quali->id }}">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
        </form>         
      </div>
    </div>
  </div>
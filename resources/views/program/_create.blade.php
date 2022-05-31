<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{ route('program.store') }}" method="post">
          @csrf 
              <div class="modal-header">
              <h4><i class="bi bi-justify"></i>{{ __(' Create Program') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="program">Program Name:</label>
                <input type="text" required class="form-control" name="prgm_name">
                <label for="program">Location:</label>
                <input type="text" required class="form-control"name="prgm_location">
                <label for="program">Date:</label>
                <input type="date" required class="form-control"name="prgm_date">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>         
      </div>
    </div>
  </div>
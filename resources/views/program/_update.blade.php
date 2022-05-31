<div class="modal fade" id="edit_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <form action="{{ route('program.update', $program->id) }}" method="post">
          @csrf  
          @method('PATCH')  
          <div class="modal-header">
            <h4 class="modal-title">Update Program</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <label for="program">Program Name:</label>
            <input type="text" name="prgm_name" class="form-control mb-3" placeholder="{{ $program->prgm_name }}" value="{{ $program->prgm_name }}">
            <label for="program">Location:</label>
            <input type="text" name="prgm_location" class="form-control mb-3" placeholder="{{ $program->prgm_location }}" value="{{ $program->prgm_location }}">
            <label for="program">Date:</label>
            <input type="date" name="prgm_date" class="form-control mb-3" placeholder="{{ $program->prgm_date }}" value="{{ $program->prgm_date }}">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
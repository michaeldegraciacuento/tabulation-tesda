<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{ route('contestant.store') }}" method="post" enctype="multipart/form-data">
          @csrf 
              <div class="modal-header">
            <h4><i class="bi bi-justify"></i>{{ __(' Create Contestant') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="row contestant_row">
                  <div class="col-6">
                    <label for="program">Name:</label>
                    <input type="text" required class="form-control" name="con_name"></div>
                  <div class="col-6">
                    <label for="program">Image:</label>
                    <input type="file" class="form-control" name="con_image" id="image">
                  </div>
                  <div class="col-6">
                    <label for="program">Age:</label>
                    <input type="text" required class="form-control" name="con_age"></div>
                  <div class="col-6">
                    <label for="program">Gender:</label>
                    <input type="text" required class="form-control" name="con_gender">
                  </div>
                </div>
                <div id="newRow"></div>
                <a class="add_contestant_row">
                    <button type="button" id="add_contestant_row"class="btn btn-primary btn-sm mt-2 float-right ">Add</button>
                </a>
                <hr class="mt-5">
               <div class="row">
                   <div class="col-6">
                    <label for="program">Qualification:</label>
                        <select class="form-control" name="quali_id">
                                   @foreach($quali as $q)
                                    <option value="{{$q->id}}">{{$q->quali_name}}</option>
                                   @endforeach
                        </select>
                   </div>
                   <div class="col-6">
                   <label for="program">Institution:</label>
                        <select class="form-control" name="tti_id">
                                   @foreach($tti as $t)
                                    <option value="{{$t->id}}">{{$t->tti_abrv}}</option>
                                   @endforeach     
                        </select>
                   </div>
               </div>

              

              </div>
            
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>         
      </div>
    </div>
  </div>

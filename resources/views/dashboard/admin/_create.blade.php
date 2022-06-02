<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
      <div class="modal-content">
        <form action="{{ route('users.store') }}" method="post">
          @csrf              
          <div class="modal-header">
            <h4 class="modal-title">Create New User</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
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
               <br>
            <select name="role" class="form-control mb-3" id="role_select">
                <option value="">-- Role(Skip if Role is only User) --</option>
                @foreach($roles as $i => $role)
                    <option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
                @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@extends('dashboard.base')

@section('content')
  @include('dashboard.admin._create')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex">
                      <h4><i class="fa fa-align-justify"></i>  {{ __('Users') }}</h4>
                      <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#primaryModal">
                        <i class="cil-plus"></i>
                        Create
                      </button> 
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Roles</th>
                            <th width="5%"></th>
                            <th width="5%"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                            <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                                @php
                                    $roles = null;
                                @endphp
                                @foreach($user->roles as $role)
                                  @php
                                      $roles .= ucwords($role->name).', ';
                                  @endphp
                                @endforeach
                                {{ substr($roles,0,-2) }}
                              </td>
                              {{-- <td>
                                <a href="{{ url('/users/' . $user->id) }}" class="btn btn-block btn-primary"><i class="fa fa-eye"></i></a>
                              </td> --}}
                              <td>
                                <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-block btn-primary"><i class="cil-pencil"></i></a>
                              </td>
                              <td>
                                @if( $you->id !== $user->id )
                                <form action="{{ route('users.destroy', $user->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger"><i class="cil-trash"></i></button>
                                </form>
                                @endif
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('script')
    <script type="text/javascript">
      $('#role_select').change(function(e){
        var value = $(this).val();
        if(value != '')
        {
          $('#qualification').hide();
          $('#qualification').prop('required',false);
          $('#qualification').prop('value','');
        }
        else
        {
          $('#qualification').show();
          $('#qualification').prop('required',true);
        }
      })
    </script>
@endsection


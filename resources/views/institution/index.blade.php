@extends('dashboard.base')

@section('content')
@include('institution._create')


<div class="container-fluid">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Qualification</li>
      </ol>
    </nav>
        <div class="fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex">
                        <h4>
                            <i class="fa fa-align-justify"></i>
                             {{ __('Institution Management') }}</h4>
                            <button class="btn btn-primary ml-auto" type="button" data-toggle="modal" data-target="#exampleModal">
                                <i class="cil-plus"></i>
                                Create
                            </button>          		
                        </div>
                    
                        <div class="card-body">
                           
                            <table class="table table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Abrivation</th>
                                        <th width="9%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($abrv as $abrvs)
                                        <tr>
                                            <td>{{ $loop->iteration ?? '' }}</td>
                                            <td>
                                                <img src="{{asset('public/'.$abrvs->tti_image) }}" width="60" height="50"alt="image"  align="left">
                                            </td>
                                            <td>{{ $abrvs->tti_name ?? '' }}</td>
                                            <td>{{ $abrvs->tti_abrv ?? '' }}</td>
                                            <td style="width: 9%;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="cil-cog"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button type="button" class="dropdown-item btn btn-edit" data-url="{{ route('program.edit',$abrvs->id) }}">
                                                            <i class="cil-pencil"></i>
                                                            &nbsp;Update
                                                        </button>
                                                        <a type="button" href=""class="dropdown-item btn" data-url="">
                                                            <i class="cil-magnifying-glass"></i>
                                                            &nbsp;View Criteria
                                                        </a>
                                                        <form action="{{ route('program.destroy',$abrvs->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button type="button" class="dropdown-item btn btn-danger float-right btn-delete">
                                                                <i class="cil-trash"></i>
                                                                &nbsp;Delete
                                                            </button>
                                                        </form>	   
                                                    </div>
                                                </div>    
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
    <div class="append-program"></div>

@endsection
@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
@section('script')
    <script type="text/javascript">       
        $('.btn-edit').click(function(){
			var div = $('.append-program');
			div.empty();

			var url = $(this).data('url');

			$.ajax({
			    url: url,
			    success:function(data){
			        div.append(data);
			        $('#edit_program').modal('show');
			    }
			});
		});

        $('.btn-delete').click(function(e){
			swal ({
			    title: "Are you sure?",
			      text: "Are you sure you want to delete this program?",
			      icon: "warning",
			      buttons: true,
			      dangerMode: true,
			}).then((result) => {
				if (result) {
					$(this).closest('form').submit();
				}
			})
		});
    </script>
@endsection
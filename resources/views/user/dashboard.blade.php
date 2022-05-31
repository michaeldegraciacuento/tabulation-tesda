@extends('dashboard.base')

@section('content')
	<div class="row">
		<div class="col-9 card">
			<div class="container mb-3 mt-3">
				<div class="d-flex flex-row">
					<input type="text" name="search_name" class="form-control mr-3 border-primary" id="search_name" placeholder="Search here...">
					<select class="form-control border-primary" name="search_qualification" id="search_qualification">
						<option value="" diselect>-- Select Qualification --</option>
						@foreach($quals as $qual)
							<option value="{{ $qual->id }}">{{ $qual->name }} ({{ $qual->code }})</option>
						@endforeach
					</select>
				</div>				
			</div>
			<div class="row" id="supply-div">
				@include('user._supply_table')
			</div>			
		</div>
		<div class="col-sm-3">					
			<table class="table table-responsive-sm table-hover table-bordered">
				<thead>
					<tr>
						<th>List of Qualification</th>				
					</tr>
				</thead>
				<tbody>
					@foreach($quals as $qual)
						<tr>
							<td> 
								<a href="">{{ $qual->name ?? '' }} ({{ $qual->code }})</a>
							</td>					
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$('#search_name').on('keyup',function(){
		    var name = $(this).val();
		    var qualification = $('#search_qualification').val();

		    $.ajax({
		        type : 'GET',
		        url : "{{ route('dashboard.search') }}",
		        data:{search_name:name, search_qualification:qualification},
		        success:function(data){
		            $('#supply-div').empty();
		            $('#supply-div').html(data);
		        }
		    });
		})

		$('#search_qualification').on('change',function(){
		    var qualification = $(this).val();
		    var name = $('#search_name').val();

		    $.ajax({
		        type : 'GET',
		        url : "{{ route('dashboard.search') }}",
		        data:{search_name:name, search_qualification:qualification},
		        success:function(data){
		            $('#supply-div').empty();
		            $('#supply-div').html(data);
		        }
		    });
		})

		$(document).on('click','.btn-add-cart',function(){
		    var user_id = $(this).data('user');
		    console.log(user_id)
		    var supply_id = $(this).data('supply');
		    var url = $(this).data('url');

		    $.ajax({
		        type : 'POST',
		        url : url,
		        data:{user_id:user_id, supply_id:supply_id,"_token": "{{ csrf_token() }}"},
		        success:function(data){
		        	swal ({
		        	    text: 'Supply Added to cart!',
		        	    icon: 'success',
		        	    button: 'OK',
		        	});
		            $('#cart-number').empty();
		            $('#cart-number').html(data);
		        }
		    });
		})
	</script>
@endsection

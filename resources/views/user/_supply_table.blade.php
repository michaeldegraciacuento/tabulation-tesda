@foreach($supplies as $supply)
	<div class="col-sm-4">
		<div class="card shadow-lg">
			<div class="card-body">
				<h5 class="card-title">{{ $supply->name }}</h5>
				<p>Unit:{{ $supply->unit }}</p>
				<p class="card-text"></p>
				<button type="button" class="btn btn-primary btn-add-cart" data-url="{{ route('cart.store') }}" data-supply="{{ $supply->id }}" data-user="{{ auth()->user()->id }}">Add to cart</button>
			</div>
		</div>
	</div>
@endforeach
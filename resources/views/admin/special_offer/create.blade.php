@extends('admin.layouts.app')
@section('title','Add Offer Product')

@push('css')

@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="ibox">
			<div class="ibox-head">
				<div class="ibox-title">
					Add Offer Product
				</div>
			</div>
			<div class="ibox-body">
			<form action="{{ route('admin.offer.store') }}" method="POST">
				@csrf
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label>Product</label>
							<select name="product_id" class="form-control product">
								<option>Select Product</option>
								@foreach($products as $product)
									<option value="{{ $product->id }}">
										{{ $product->name }} -- 
										{{ $product->unit_price }}
									</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label>Discount Price</label>
						<input type="text" name="discount_price" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group" id="date_1">
                            <label class="font-normal">Start Date</label>
                            <div class="input-group date">
                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input name="start_date" class="form-control" type="text" autocomplete="off">
                            </div>
                        </div>
					</div>
					<div class="col-md-3">
						<div class="form-group" id="date_1">
                            <label class="font-normal">End Date</label>
                            <div class="input-group date">
                                <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                <input name="end_date" class="form-control" type="text" autocomplete="off">
                            </div>
                        </div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control">
								<option value="1">Active</option>
								<option value="0">In Active</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group mt-2">
							<label></label>
							<button type="submit" class="btn pointer btn-block btn-primary">Add</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
</div>
@endsection

@push('js')
<script>
	$('.product').select2();
</script>
@endpush

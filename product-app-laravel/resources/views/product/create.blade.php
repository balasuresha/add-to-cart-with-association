@extends('layouts.app')
@section('content')
<?php 
    $categoryTabs = DB::table('categories')->get();
    $pricesTabs = DB::table('prices')->get();
    $taxesTabs = DB::table('tax_rates')->get();
?>
<div class="container">
    <form action="{{url('product')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div><label>Name</label></div>
        <div><input type="text" name="name" class="form-control"></div>
        <div><label>Description</label></div>
        <div><textarea name="description" class="form-control"></textarea></div>
        <div><label>Category</label></div>
        <div>
            <select name="category_id" class="form-control">
                <option value="">Select..</option>
                @foreach($categoryTabs as $categoryTab)
                    <option value="{{ $categoryTab->id }}">{{ $categoryTab->name }}</option>
                @endforeach
            </select>
        </div>
        <div><label>Price</label></div>
        <div>
            <select name="price_id" class="form-control">
                <option value="">Select..</option>
                @foreach($pricesTabs as $pricesTab)
                    <option value="{{ $pricesTab->id }}">{{ $pricesTab->price }}</option>
                @endforeach
            </select>
        </div>
        <div><label>Tax Rate</label></div>
        <div>
            <select name="tax_id[]" class="form-control" multiple>
                @foreach($taxesTabs as $taxesTab)
                    <option value="{{ $taxesTab->id }}">{{ $taxesTab->rate }}</option>
                @endforeach
            </select>
        </div>
        <div><label>Product Image</label></div>
        <div><input type="file" name="product_avatar"></div><br/>
        <input type="submit" class="btn btn-primary text-center" value="Save"/>
    </form>
</div>
@endsection
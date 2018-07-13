@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12" >
            
                @foreach($results as $result)
                <div id="{{ $result['id'] }}">
                    <div class="col-md-3" style="border: 2px solid #000;padding:50px;margin-right: 30px;" >
                        <image src='{{ URL::to('/') }}/images/{{ $result['product_avatar'] }} ' width='50%'/>
                        <p>Name:<span>{{ $result['name'] }}</span></p>
                        <p>Category:<span>{{ $result['categories']['name'] }}</span></p>
                        <p>Price:<span>{{ $result['prices']['price'] }}</span></p>
                        @foreach($result['producthas_taxes'] as $key => $prodTax)
                        <p>Tax {{ $key+1 }}:<span>{{ $prodTax['tax_rate']['rate'] }}</span></p>
                        @endforeach
                        <button class="btn btn-danger add_to_cart" id="{{ $result['id'] }}">Add to Cart</button>
                    </div>  
                </div>
                @endforeach
            
        </div>
    </div>
</div>
<script type="text/javascript">
   $('.add_to_cart').click(function() {
       
      var ItemVal = $(this).attr('id');
      console.log(ItemVal);
      $('div#'+ItemVal).hide().fadeOut('1000');
      $('.cart_count').text(ItemVal);
   });
      
</script>
@endsection



<!--Array
(
    [0] => Array
        (
            [id] => 1
            [name] => Test App
            [description] => Trs
            [category_id] => 1
            [price_id] => 1
            [tax_id] => 1
            [product_avatar] => 1531394460.png
            [created_at] => 2018-07-12 11:21:00
            [updated_at] => 2018-07-12 11:21:00
            [categories] => Array
                (
                    [id] => 1
                    [name] => HouseHold
                    [created_at] => 
                    [updated_at] => 
                )

            [prices] => Array
                (
                    [id] => 1
                    [price] => 100
                    [created_at] => 
                    [updated_at] => 
                )

            [producthas_taxes] => Array
                (
                    [0] => Array
                        (
                            [id] => 1
                            [product_id] => 1
                            [tax_id] => 2
                            [created_at] => 
                            [updated_at] => 
                            [pivot] => Array
                                (
                                    [product_id] => 1
                                    [id] => 1
                                )

                            [tax_rate] => Array
                                (
                                    [id] => 2
                                    [rate] => 18
                                    [created_at] => 
                                    [updated_at] => 
                                )

                        )

                    [1] => Array
                        (
                            [id] => 2
                            [product_id] => 1
                            [tax_id] => 4
                            [created_at] => 
                            [updated_at] => 
                            [pivot] => Array
                                (
                                    [product_id] => 1
                                    [id] => 2
                                )

                            [tax_rate] => Array
                                (
                                    [id] => 4
                                    [rate] => 45
                                    [created_at] => 
                                    [updated_at] => 
                                )

                        )

                )

        )

    [1] => Array
        (
            [id] => 2
            [name] => Apple IPhone
            [description] => Test apple
            [category_id] => 2
            [price_id] => 2
            [tax_id] => 1
            [product_avatar] => 1531400279.png
            [created_at] => 2018-07-12 12:57:59
            [updated_at] => 2018-07-12 12:57:59
            [categories] => Array
                (
                    [id] => 2
                    [name] => Non Household
                    [created_at] => 
                    [updated_at] => 
                )

            [prices] => Array
                (
                    [id] => 2
                    [price] => 150
                    [created_at] => 
                    [updated_at] => 
                )

            [producthas_taxes] => Array
                (
                )

        )

    [2] => Array
        (
            [id] => 3
            [name] => FaceBook APP
            [description] => Test Face
            [category_id] => 1
            [price_id] => 1
            [tax_id] => 1
            [product_avatar] => 1531400343.png
            [created_at] => 2018-07-12 12:59:03
            [updated_at] => 2018-07-12 12:59:03
            [categories] => Array
                (
                    [id] => 1
                    [name] => HouseHold
                    [created_at] => 
                    [updated_at] => 
                )

            [prices] => Array
                (
                    [id] => 1
                    [price] => 100
                    [created_at] => 
                    [updated_at] => 
                )

            [producthas_taxes] => Array
                (
                    [0] => Array
                        (
                            [id] => 3
                            [product_id] => 2
                            [tax_id] => 1
                            [created_at] => 
                            [updated_at] => 
                            [pivot] => Array
                                (
                                    [product_id] => 3
                                    [id] => 3
                                )

                            [tax_rate] => Array
                                (
                                    [id] => 1
                                    [rate] => 13
                                    [created_at] => 
                                    [updated_at] => 
                                )

                        )

                    [1] => Array
                        (
                            [id] => 4
                            [product_id] => 2
                            [tax_id] => 3
                            [created_at] => 
                            [updated_at] => 
                            [pivot] => Array
                                (
                                    [product_id] => 3
                                    [id] => 4
                                )

                            [tax_rate] => Array
                                (
                                    [id] => 3
                                    [rate] => 22
                                    [created_at] => 
                                    [updated_at] => 
                                )

                        )

                    [2] => Array
                        (
                            [id] => 5
                            [product_id] => 2
                            [tax_id] => 4
                            [created_at] => 
                            [updated_at] => 
                            [pivot] => Array
                                (
                                    [product_id] => 3
                                    [id] => 5
                                )

                            [tax_rate] => Array
                                (
                                    [id] => 4
                                    [rate] => 45
                                    [created_at] => 
                                    [updated_at] => 
                                )

                        )

                    [3] => Array
                        (
                            [id] => 6
                            [product_id] => 3
                            [tax_id] => 1
                            [created_at] => 
                            [updated_at] => 
                            [pivot] => Array
                                (
                                    [product_id] => 3
                                    [id] => 6
                                )

                            [tax_rate] => Array
                                (
                                    [id] => 1
                                    [rate] => 13
                                    [created_at] => 
                                    [updated_at] => 
                                )

                        )

                )

        )

)-->
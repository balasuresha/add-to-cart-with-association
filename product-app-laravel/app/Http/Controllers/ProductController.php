<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProducthasTaxes;
use App\ProductTaxesPivot;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Product::with(['categories','prices','producthas_taxes.tax_rate'])->get()->toArray();
        return view('product.index',compact('results'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'product_avatar' => 'required'
        ]);
        
        if($request->hasFile('product_avatar')) {
            $image = $request->file('product_avatar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath,$name);
        }
       
        $saveProd = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'category_id' => $request->get('category_id'),
            'price_id' => $request->get('price_id'),
            'tax_id' => 1,
            'product_avatar' => $name
        ]);
        
        if($saveProd->save()) {
            $productId = $saveProd->id;
            $taxValues = $request->get('tax_id');
                foreach($taxValues as $key => $taxValue) {
                    $data[$key]['product_id'] = $productId;
                    $data[$key]['tax_id'] = $taxValue;
                }
            ProducthasTaxes::insert($data);
            ProductTaxesPivot::insert($data);
        }
        
        
        return redirect('/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

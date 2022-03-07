<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Services\CurrencyConversion;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{


    public function index(Request $request)
    {
        $products = Product::all();
        $priceRange = ['max' => CurrencyConversion::convert(Product::max('price')), 'min' => CurrencyConversion::convert(Product::min('price'))];
        $products = Product::with('attributes')->paginate(12)->withPath('?' . $request->getQueryString());
        $productAttributes = [];
        foreach ($products as $product) {
            array_push($productAttributes, json_decode($product->attributes, true));
        }
        return view('pages.shop.shop', compact('priceRange', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shop.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */



    public function store(ProductCreateRequest $request)
    {


        DB::beginTransaction();
        try {

            $product = new Product();
            $product->fill($request->all());
            $product->save();


            if ($request->has('gallery')) {
                foreach ($request->file('gallery') as $image) {
                    $path = $image->storeAs('products/'. Str::slug($request->name,'-') , time().$image->getClientOriginalName());
                    $product->gallery()->create([

                        'image'=> $path
                    ]);

                }
            }


            DB::commit();
            return redirect()->back()->withSuccess('Product saved');
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withSuccess('Error');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $productRaring = [];
        foreach ($product->comments as $comment) {
            array_push($productRaring, $comment->rating);
        }

        $ratingSummary = $productRaring ? ceil(array_sum($productRaring) / count($productRaring)) : 0;
        return view('pages.shop.single.single', compact('product', 'ratingSummary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }


    public function commentCreate(CommentRequest $request)

    {

        $comment = new Comment();
        $comment->commentable()->associate(Product::findOrFail($request->id));
        $comment->email = $request->message;
        $comment->rating = $request->rating;
        $comment->message = $request->message;
        $comment->name = $request->name;
        $comment->save();
        return redirect()->back()->withSuccess('Comment created');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }


    public function quickView(Request $request): JsonResponse
    {

        $product = Product::where('id', $request->id)->firstOrFail();

        return Response::json($product);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


}

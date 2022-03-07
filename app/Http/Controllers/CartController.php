<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cardItems = \Cart::getContent();

            return view('pages.shop.cart.cart', compact(['cardItems']));

    }


    public function addToCart(Request $request): JsonResponse
    {

        try {
            $quantity = $request->quantity ?: 1;
            $productId = $request->productid;
            $product = Product::find($productId);

            \Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => (int)$quantity,
                'associatedModel' => $product
            ]);


            return Response::json(['cartItems' => \Cart::getContent()->toArray()]);

        } catch (Throwable $e) {

            return Response::json($e);
        }

    }


    public function cardCount(): JsonResponse
    {
        $cardSubTotal = \Cart::getSubTotal();
        $cardItemsCount = \Cart::getTotalQuantity();
        return Response::json(['count' => $cardItemsCount, 'subTotal' => $cardSubTotal]);

    }


    public function removeProductCart(Request $request): JsonResponse
    {


        \Cart::remove($request->id);
        return Response::json(['message' => 'success']);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Services\CurrencyProvider;
use App\Models\Currency;
use Illuminate\Http\Request;
use Throwable;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencyList = Currency::all();
        $apiCurrency= CurrencyProvider::getCurrencyes()['data'];
        return view('admin.currency',compact('currencyList','apiCurrency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:currencies',
            'symbol' => 'required|unique:currencies',

        ]);

        $newCurrency = new Currency();
        $newCurrency->code = $request->code;
        $newCurrency->is_main = false;
        $newCurrency->symbol = $request->symbol;
        $newCurrency->save();
        $this->updateCurrencyValues();
        return redirect()->back()->withSuccess('Currency added');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        //
    }

    public function updateCurrencyValues()
    {
        try {
            $selectedCurrencyList = Currency::where('is_main', false) ;
            foreach ($selectedCurrencyList->get() as $currency) {
                Currency::where('code', $currency['code'])->update([
                    'value' => CurrencyProvider::getCurrencyes()['data'][$currency['code']]
                ]);
            }
            Currency::where('is_main', true)->update(['value'=>1]);
            return redirect()->back()->withSuccess('Currency Updated');
        } catch (Throwable $e) {
            return redirect()->back()->withErrors('Update error or API "Freecurrency error" ');
        }
    }

    public function setMainCurrency($id){
        Currency::query()->update(['is_main'=>0]);
        Currency::find($id)->update(['is_main'=>1,'value'=>1]);
        $this->updateCurrencyValues();
        return redirect()->back()->withSuccess('Currency Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Currency $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Currency::find($id)->delete();
        return redirect()->back()->withSuccess('Currency removed');
    }


    public function changeCurrency($id)
    {
       $currency =   Currency::find($id);
       session(['currency' => $currency->code,'currency_symbol' => $currency->symbol]);
       return redirect()->back();
    }





}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passwords = ['OQhInqaZ', 'MdNBEhFY', 'dQlwYRDP', 'WfqjyXeb', 'mYeRAKcd', 'qYyTGeCJ', 'DNdDUdbf', 'cxyBVpgq', 'zDVtiZWP', 'FnDUvhjA', 'VNaBwYTv', 'dPAlJZHT', 'gxkSuMGA', 'WDVDEoMA', 'ByaKrDNi', 'rrlRuNIV', 'WFMNQtRK', 'gEUCoDPQ', 'BAxVerxt', 'RtDxrSTD', 'HHIbIuZD', 'pEVbovBZ', 'xEpoLgYP', 'NTWOiSDt', 'lDSgVcHm', 'QdKFZYny', 'BvgpJCHq', 'QoTRBjOD', 'hfLNWEAl', 'SncoiAfU', 'qlYhGncs', 'nsIAjIDo', 'sBayBcFX', 'RzabsXWD', 'IeQiuTCj', 'FlADSMeB', 'EoMHdtrQ', 'VwdBDlcH', 'gwOlLEye', 'cOzHoHmw', 'xWtkSxWq', 'svjKdzZS', 'ioBVEmrG', 'dDGBSily', 'KdNdPbWj', 'zPIIfOjo', 'GktRgUbr', 'ZyZlLeFY', 'PyLTrMgb', 'YeQbLzaK', 'MWSudWHj', 'SImyzBDJ', 'CsAEjiWh', 'FVuOrVXA', 'lYxTFfyR', 'EpENWMFy', 'qBnJbDVM', 'mBMKCMDP', 'LxHdkruo', 'YWoNvpEM', 'dJUyjDef', 'BDplOPxT', 'sGIZefWD', 'JnRDXxpt', 'nEUztHBv', 'salGVNnm', 'ZnnHrEgh', 'CxyKlUsD', 'lIeVVPmJ', 'FjusKWDd', 'eNfBubva', 'WKgQTuZA', 'wRAWDfOQ', 'NIBvFrKh', 'PCiWeBdK', 'lUjDQOFl', 'YLbjUQtR', 'IuzLCDdP', 'UTpDsCnN', 'whDJCjLp', 'JXBPYuAo', 'yVJnOLoY', 'dWBAbZJS', 'yvniPmuN', 'DCdeHUNT', 'rUfZSOjD', 'EfRxNlWw', 'eMlNwpgD', 'aQHzHpAJ', 'qIUQnORw', 'dHPvtMox', 'bdtajxLN', 'BzBQGnDR', 'LipyeCtD', 'umQkPDNf', 'budDTYRf', 'iNGrxdXp'];
        $hash_pass = [];
        foreach ($passwords as $pass) {
            echo bcrypt($pass)."<br>";
            //$hash_pass[] = Hash::make($pass);

        }
        //($hash_pass);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

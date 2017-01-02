<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Admin;
use App\Country;
use App\City;
use App\Address;
use App\Company;


use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("welcome");
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $admin = new Admin;

        $admin->forename = Input::get("forename");
        $admin->surname = Input::get("surname");
        $admin->email = Input::get("email");
        $admin->password = Input::get("password");

        /**
         * Automatically insertes the data into the database and updates the attributes create_at and updated_at
         */
        $admin->save();

        return view('employer-account');
    }

    public function store(Request $data)
    {
        $admin = DB::table('admin')->insertGetId([
            'forename' => $data['forename'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $country = DB::table('country')->insertGetId([
            'name' => $data['country'],
        ]);

        $city = DB::table('city')->insertGetId([
            'name' => $data['city'],
            'country_id' => $country, //$country return key-value
        ]);

        $address = DB::table('address')->insertGetId([
            'street' => $data['street'],
            'street_nr' => $data['street_nr'],
            'postcode' => $data['postcode'],
            'city_id' => $city, //$city return key-value
        ]);

        $company = DB::table('company')->insertGetId([
            'name' => $data['company-name'],
            'admin_id' => $admin, //$admin return key-value
            'address_id' => $address, //$address return key-value
        ]);

        /*$admin = new Admin;
        $admin->forename = $data['forename'];
        $admin->surname = $data['surname'];
        $admin->email = $data['email'];
        $admin->password = bcrypt($data['password']);
        $admin_id = $admin->id;
        $admin->save();

        $country = new Country;
        $country->name = $data['country'];
        $country_id = $country->id;
        $country->save();

        $city = new City;
        $city->name = $data['city'];
        $city->country_id = $country_id;
        $city_id = $city->id;
        $city->save();

        $address = new Address;
        $address->street => $data['street'];
        $address->street_nr = $data['street_nr'];
        $address->postcode = $data['postcode'];
        $address->city_id = $city_id;
        $address_id = $address->id;
        $address->save();

        $company = new Company;
        $company->name = $data['company-name'];
        $company->admin_id = $admin_id;
        $company->address_id = $address_id;
        $company->save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

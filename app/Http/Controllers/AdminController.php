<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Response;
use Illuminate\Support\Facades\Input;

use App\Admin;
use App\Country;
use App\City;
use App\Address;
use App\Company;

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
     * insert new Data into database
     *
     * @param Request $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $data)
    {
        $admin = Admin::create(array(
            'forename' => $data['forename'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ));

        // Datensatz nur erstellen, wenn noch nicht vorhanden
        $country = Country::firstOrCreate(array(
            'name' => $data['country']
        ));

        $city = City::firstOrCreate(array(
            'name' => $data['city'],
            'country_id' => $country->id
        ));

        // Adresse wird immer erstellt, falls Company umzieht -> einfacher zu warten
        $address = Address::create(array(
            'street' => $data['street'],
            'street_nr' => $data['street_nr'],
            'postcode' => $data['postcode'],
            'city_id' => $city->id
        ));

        Company::create(array(
            'name' => $data['company-name'],
            'admin_id' => $admin->id,
            'address_id' => $address->id
        ));

    }

    public function store2(Request $data)
    {
        /*$admin = DB::table('admin')->insertGetId([
            'forename' => $data['forename'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Check if country exists in database
        $country = DB::table('country')->where('name', $data['country'])->select();
        // If country not exists in database
        if (!$country) {
            // insert into table country
            $country = DB::table('country')->insertGetId([
                // give attribute a value
                'name' => $data['country'],
            ]);
        }

        $city = DB::table('city')->insertGetId([
            'name' => $data['city'],
            'country_id' => $country, //$country return key-value
        ]);

        $address = DB::table('address')->insertGetId([
            'street' => $data['street'],
            'street_nr' => $data['street_nr'],
            'postcode' => $data['postcode'],
            'city_id' => $city->key, //$city return key-value
        ]);

        DB::table('company')->insertGetId([
            'name' => $data['company-name'],
            'admin_id' => $admin, //$admin return key-value
            'address_id' => $address, //$address return key-value
        ]);

        //$this->setSession();
        //return view('/feature');*/
    }

    public
    function store1(Request $data)
    {
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

    public
    function setSession()
    {
        Session::put('Alex', '1111111111');
        $value = Session::get('Alex');

        //this will end the request-lifecycle
        return Response::json(['result' => 'ok']);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public
    function show(Request $request, $id)
    {
        $value = $request->session()->get('key');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
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
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}

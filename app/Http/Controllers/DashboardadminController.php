<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Dashboardadmin;
use App\Http\Requests\StoreDashboardadminRequest;
use App\Http\Requests\UpdateDashboardadminRequest;

class DashboardadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
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
     * @param  \App\Http\Requests\StoreDashboardadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboardadminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboardadmin  $dashboardadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboardadmin $dashboardadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboardadmin  $dashboardadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboardadmin $dashboardadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDashboardadminRequest  $request
     * @param  \App\Models\Dashboardadmin  $dashboardadmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashboardadminRequest $request, Dashboardadmin $dashboardadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboardadmin  $dashboardadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboardadmin $dashboardadmin)
    {
        //
    }
}

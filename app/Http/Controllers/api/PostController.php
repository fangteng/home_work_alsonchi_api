<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\DateTimeService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  string  $datetimeStart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, DateTimeService $dateTimeService)
    {
        $validator = Validator::make($request->all(), [
            'datetime_start' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            abort(response('Bad Request', 400));
        }

        $timeZone = $request->timezone;
        $checkFormat = date("Y-m-d H:i:s", strtotime($request->datetime_start));

        if ($checkFormat == '1970-01-01 00:00:00') {
            return response()->json([
                "status" => "error",
                "message" => "The datetime_start is not valid.",
                "available" => false
            ]);
        }

        $checkSchedule = $dateTimeService->checkSchedule($request->datetime_start ,$timeZone);

        if ($checkSchedule) {
            return response()->json([
                "status" => "success",
                "message" => "The datetime_start is available.",
                "available" => true
            ]);
        }

        return response()->json([
            "status" => "success",
            "message" => "The datetime_start is not available.",
            "available" => false
        ]);
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

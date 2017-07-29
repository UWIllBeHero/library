<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Anniversary;
use Illuminate\Support\Facades\Response;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function index()
    {
/*        $calendar_events = array();
        $calendar = new Calendar();*/
        $anniversaries = Anniversary::all();
        /*foreach ($anniversaries as $anniversary){
            $anniversary->url = '/admin/calendar/'.$anniversary->id;
        }*/

        $calendar = \Calendar::addEvents($anniversaries)
        ->setOptions([
            'locale'=>'uk',
            'navLinks'=> 'true',
			'defaultDate'=> Carbon::now()->format('Y-m-d'), // can click day/week names to navigate views
			'editable'=> 'true',
			'selectable'=> 'true',
			'eventLimit'=> 'true',
            'events'=> [ 'url'=> '/admin/calendar/api',
                        'error'=> 'function() {
                                    alert("cannot load json");
                                    }'
            ]])
            ->setCallbacks([
            // here you can do you $ajax.post....
            // fullcalndear method is 'eventClick' . When you click on field in full calndear view, you can open a form, save your event in db etc...
                'eventClick' => "function(calEvent, jsEvent, view) {

        alert('Event: ' + calEvent.title);
        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        alert('View: ' + view);

        // change the border color just for fun
        $(this).css('border-color', 'red');

    }"
            ]);
        return view('admin_layouts.ad_min_calendar', compact('calendar'), compact('anniversaries'))
            /*->with('calendar_events', $calendar_events)*/
/*            ->with('calendar', $calendar)*/;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin_layouts.anniversary_create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {   $calendar_event = new Anniversary();
        $calendar_event->preview            = $request->input("preview");
        $calendar_event->anniversary            = $request->input("start");
        $calendar_event->url                    = $request->url();
        $calendar_event->save();
        /*$calendar_event->true       = $request->input("is_all_day");*/
        /*$calendar_event->background_color = $request->input("background_color");*/

        return redirect()->route('calendar.index')->with('message', 'Item created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $calendar_event = Anniversary::findOrFail($id);
        return view('admin_layouts.anniversary_show_one', compact('calendar_event'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $calendar_event = Anniversary::findOrFail($id);
        return view('admin_layouts.ad_min_calendar', compact('calendar_event'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int    $id
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $calendar_event = Anniversary::findOrFail($id);
        $calendar_event->preview            = $request->input("title");
        $calendar_event->created_at            = $request->input("start");
        $calendar_event->updated_at              = $request->input("end");
       /* $calendar_event->is_all_day       = $request->input("is_all_day");*/
       /* $calendar_event->background_color = $request->input("background_color");*/
        $calendar_event->save();
        return redirect()->route('admin_layouts.ad_min_calendar')->with('message', 'Item updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $calendar_event = Anniversary::findOrFail($id);
        $calendar_event->delete();
        return redirect()->route('admin_layouts.ad_min_calendar')->with('message', 'Item deleted successfully.');
    }
}
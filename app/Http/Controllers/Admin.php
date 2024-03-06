<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    Public function Login()
    {
        return view('AdminDash/Login');
    }

     public function loginRequest(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/Admin/Dash');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    Public function Dash()
    {
        return view('AdminDash/Dash');
    }
    Public function AddPlans()
    {
        return view('AdminDash/AddPlans');
    }
    Public function EditPlans()
    {
         // Fetch all services from the database
        $services = Service::paginate(20);
        return view('AdminDash/EditPlans', ['services' => $services]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nameEN' => 'required|string',
            'nameAR' => 'required|string',
            'UserEN' => 'required|string',
            'UserAR' => 'required|string',
            'email' => 'required|email',
            'selectedDates' => 'required|json'
        ]);

        // Check if a service with the same nameEN or nameAR already exists
        $existingService = Service::where('nameEN', $request->nameEN)
                                ->orWhere('nameAR', $request->nameAR)
                                ->first();

        if ($existingService) {
            // Service already exists, return with error message
            return redirect()->back()->with('error', 'This service already exists');
        }

        DB::beginTransaction();

        try {
            // Create the service
            $service = Service::create([
                'nameEN' => $request->nameEN,
                'nameAR' => $request->nameAR,
                'UserEN' => $request->UserEN,
                'UserAR' => $request->UserAR,
                'email' => $request->email,
            ]);

            // Decode the JSON string to get the dates
            $selectedDates = json_decode($request->selectedDates, true);

            // Store each date range as a Time entry
            foreach ($selectedDates as $date) {
                $dateFrom = Carbon::parse($date['start'])->addHour()->format('Y-m-d H:i:s');
                $dateTo = Carbon::parse($date['end'])->addHour()->format('Y-m-d H:i:s');

                Time::create([
                    'service_id' => $service->id,
                    'date_from' => $dateFrom,
                    'date_to' => $dateTo,
                ]);
            }

            DB::commit();

            // Redirect or return success response
            return redirect()->back()->with('success', 'Service saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            // Handle error
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit(Service $service)
    {
        $service->load('times'); // Assuming 'times' is the relation name for the dates associated with the service

        // Convert dates to the appropriate structure for the calendar
        $selectedDates = $service->times->map(function ($time) {
            return ['start' => $time->date_from, 'end' => $time->date_to];
        });
        return view('AdminDash/UpdatePlans', compact('service', 'selectedDates'));
    }

    public function UpService(Request $request, Service $service)
    {
        // Validate the request data
        $validated = $request->validate([
            'nameEN' => 'required|string',
            'UserEN' => 'required|string',
            'email' => 'required|email',
            'nameAR' => 'required|string',
            'UserAR' => 'required|string',
            'selectedDates' => 'required|json', // Ensuring the selected dates are provided as a JSON string
        ]);

        // Update the service details
        $service->update([
            'nameEN' => $validated['nameEN'],
            'UserEN' => $validated['UserEN'],
            'email' => $validated['email'],
            'nameAR' => $validated['nameAR'],
            'UserAR' => $validated['UserAR'],
        ]);

        // Handle the selected dates
        $selectedDates = json_decode($request->selectedDates, true);



        // Assuming you have a method to handle saving these dates
        // This might involve clearing existing date records and creating new ones, for example
        $service->updateDates($selectedDates);

        // Redirect back or to another page with a success message
        return redirect()->route('EditPlans')->with('success', 'Service updated successfully!');
    }

    public function delete(Service $service)
    {
        // Perform any pre-deletion checks or operations here

        // Delete the service
        $service->delete();

        // Optionally, delete related records, like service times, if they should not remain after the service is deleted.
        // $service->times()->delete(); // Uncomment if related times should be deleted.

        // Redirect back or to another page with a success message
        return redirect()->back()->with('success', 'Service deleted successfully!');
    }

    Public function AllReservation()
    {
        $reservations = Reservation::with('service')->paginate(20);
        return view('AdminDash/AllReservation')->with('reservations',$reservations);
    }

}

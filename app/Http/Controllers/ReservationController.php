<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation; // Ensure you have this model
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'First_Name' => 'required|string|max:255',
                'Last_Name' => 'required|string|max:255',
                'Phone' => 'required|string|max:255',
                'service_id' => 'required|integer',
                'start_time' => 'required|date',
                'end_time' => 'required|date',
                'assignee_name' => 'required|string|max:255',
            ]);

            // Convert the start_time and end_time to a MySQL-compatible format
            $startDateTime = new \DateTime($request->start_time);
            $endDateTime = new \DateTime($request->end_time);

            // Format the DateTime objects into strings MySQL can understand
            $formattedStartTime = $startDateTime->format('Y-m-d H:i:s');
            $formattedEndTime = $endDateTime->format('Y-m-d H:i:s');

            // Create a new reservation instance and set its properties
            $reservation = new Reservation();
            $reservation->email = $request->email;
            $reservation->first_name = $request->input('First_Name');
            $reservation->last_name = $request->input('Last_Name');
            $reservation->phone = $request->Phone;
            $reservation->service_id = $request->service_id;
            $reservation->start_time = $formattedStartTime;
            $reservation->end_time = $formattedEndTime;
            $reservation->assignee_name = $request->assignee_name;

            // Save the reservation to the database
            $reservation->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Reservation successfully created.');
        } catch (\Exception $e) {
            // If there's an error, redirect back with an error message
            return redirect()->back()->with('error', 'Error creating reservation: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        // Pass the reservation to your edit view
        return view('AdminDash/EditReservation', compact('reservation'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        // Redirect to a specific route with a success message
        return redirect()->route('your.redirect.route')->with('success', 'Reservation deleted successfully.');
    }


    public function update(Request $request, $id)
    {
        $startDateTime = Carbon::parse($request->start_time)->format('Y-m-d H:i:s');
        $endDateTime = Carbon::parse($request->end_time)->format('Y-m-d H:i:s');

        $reservation = Reservation::findOrFail($id);
        $reservation->first_name = $request->input('nameEN');
        $reservation->last_name = $request->input('UserEN');
        $reservation->email = $request->input('nameAR');
        $reservation->phone = $request->input('UserAR');
        $reservation->start_time = $startDateTime;
        $reservation->end_time = $endDateTime;

        $reservation->save();

        // Redirect back or to another page with a success message
        return redirect()->route('AllReservation')->with('success', 'Reservation updated successfully');
    }

}


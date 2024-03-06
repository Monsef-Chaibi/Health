<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['nameEN', 'nameAR', 'UserEN', 'UserAR', 'email'];

    // Existing times() relationship
    public function times()
    {
        return $this->hasMany(Time::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    /**
     * Update the service times (dates) for this service.
     *
     * @param array $selectedDates Array of dates to be updated.
     * @return void
     */
    public function updateDates(array $selectedDates)
    {
        // First, remove existing date records associated with this service.
        $this->times()->delete();

        // Now, create new date records from the provided $selectedDates array.
        foreach ($selectedDates as $date) {
            $this->times()->create([
                'date_from' => Carbon::parse($date['start'])->addHour()->format('Y-m-d H:i:s'), // Adding 1 hour to start date
                'date_to' => Carbon::parse($date['end'])->addHour()->format('Y-m-d H:i:s'), // Adding 1 hour to end date
                // Add any other necessary fields here.
            ]);
        }
    }
}

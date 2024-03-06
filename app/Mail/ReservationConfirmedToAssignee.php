<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Reservation; // Ensure this is the correct path to your Reservation model

class ReservationConfirmedToAssignee extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $serviceName;

    public function __construct(Reservation $reservation, $serviceName)
    {
        $this->reservation = $reservation;
        $this->serviceName = $serviceName;
    }

    public function build()
    {
        return $this->view('emails.reservation.reservationConfirmedToAssignee')
                    ->with([
                      'reservationInfo' => $this->reservation,
                      'serviceName' =>   $this->serviceName, // Adding service name here
                    ]);
    }
}

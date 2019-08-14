<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as Client;
use App\Room as Room;
use App\Reservation as Reservation;

class ReservationsController extends Controller
{
   public function bookRoom($client_id, $room_id, $date_in, $date_out) {

      $reservation = new Reservation();
      $client_instance = new Client();
      $room_instance = new Room();

      $room = $room_instance->find($room_id);
      $client = $client_instance->find($client_id);
      $reservation->date_in = $date_in;
      $reservation->date_out = $date_out;

      $reservation->room()->associate($room);
      $reservation->client()->associate($client);
      if($room->isRoomBooked($client_id, $date_in, $date_out)){
         abort('405','Trying to book an already booked room');
      }
      $reservation->save();

      return redirect()->route('clients');
    //return view('reservations/bookRoom');
   }
}

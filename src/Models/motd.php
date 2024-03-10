<?php

namespace lexian-droid\Motd\Models;

use Illuminate\Database\Eloquent\Model;

class Motd extends Model
{
    protected $table = 'motds';

    protected $fillable = [
        'message',
        'start_date',
        'end_date',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function get()
    {
        $query = $this->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->orderBy('created_at', 'desc') // Order by created_at in descending order
            ->first(); // Retrieve only the newest message

        if ($query) {
            return $query->message;
        } else {
            return config('motd.default_message');
        }
    }

    public function set($message, $start_date, $end_date)
    {
        // Convert unix timestamps to Carbon instances
        $start_date = \Carbon\Carbon::createFromTimestamp($start_date);
        $end_date = \Carbon\Carbon::createFromTimestamp($end_date);

        $this->create([
            'message' => $message,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);

        return true;
    }
}

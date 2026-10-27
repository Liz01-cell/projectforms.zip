<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task3Controller extends Controller
{
    public function showForm()
    {
        return view('task3');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'title'       => 'required|min:6',
            'room'        => 'required|in:auditory,coworking,cinema',//помещение обязательно и из списка
            'date'        => 'required|date',
            'payment'     => 'required|in:cash,card,transfer',
            'description' => 'required|min:10',
        ]);

        $title       = $validated['title'];
        $room        = $validated['room'];
        $date        = $validated['date'];
        $payment     = $validated['payment'];
        $description = $validated['description'];

        return view('task3_result', [
            'title'       => $title,
            'room'        => $room,
            'date'        => $date,
            'payment'     => $payment,
            'description' => $description,
        ]);
    }
}
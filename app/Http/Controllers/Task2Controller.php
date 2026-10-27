<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task2Controller extends Controller
{
    public function showForm()
    {
        return view('task2');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'room' => 'required|in:auditory,coworking,cinema',
        ]);
        //in:auditory,coworking,cinema — значение должно быть одним из указанных (защита от подделки данных)

        $room = $validated['room'];

        return view('task2_result', [
            'room' => $room,
        ]);
    }
}
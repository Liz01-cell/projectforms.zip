<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    public function showForm()//отображение формы 
    {
        return view('task1');
    }

     public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([//required — поле обязательно для заполнения
            'fio'   => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'required|email',
        ]);

         $fio   = $validated['fio'];
        $phone = $validated['phone'];
        $email = $validated['email'];

        return view('task1_result', [//Возврат страницы с данными
            'fio'   => $fio,
            'phone' => $phone,
            'email' => $email,
        ]);
    }
}

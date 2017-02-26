<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addcontact(Request $request)
    {
        $this->validate($request,
            [
                'nom' => 'required|min:5',
                'mail' => 'required|min:5',
                'message' => 'required|min:5'

            ],
            [
                'nom.required' => 'Titre requis',
                'nom.min' => 'Minimum 5 caractères',
                'mail.required' => 'Contenu requis',
                'mail.min' => 'Minimum 10 caractères',
                'message.required' => 'Titre requis',
                'message.min' => 'Minimum 5 caractères'

            ]);

        $input = $request->input();
        ->fill($input)
        ->save();
        return redirect()->route('/welcome')->with('success', 'Message envoyé');
    }
}

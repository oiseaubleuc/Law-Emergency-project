<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        try {
            ContactMessage::create($validated);

            return redirect()->route('contact.show')
                ->with('success', 'Uw bericht is succesvol verzonden. We nemen zo snel mogelijk contact met u op.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Er is een fout opgetreden bij het verzenden van uw bericht. Probeer het later opnieuw.']);
        }
    }
}


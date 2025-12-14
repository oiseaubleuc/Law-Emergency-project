<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;



class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function readme()
    {
        return view('readme');
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required|string|max:255',
            'voornaam' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string|max:255',
            'beschrijving' => 'required|string',
            'bijlage' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        try {
            $job = new Job();
            $job->naam = $request->input('naam');
            $job->voornaam = $request->input('voornaam');
            $job->username = $request->input('username');
            $job->email = $request->input('email');
            $job->beschrijving = $request->input('beschrijving');
            $job->type = $request->input('type');

            if ($request->hasFile('bijlage')) {
                $job->bijlage = $request->file('bijlage')->store('bijlages', 'public');
            }

            $job->save();

            return redirect('/')->with('success', 'Uw casus is succesvol ingediend.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Er is een fout opgetreden bij het opslaan van uw casus.']);
        }
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job)
    {
        $request->validate([
            'naam' => 'required|string|max:255',
            'voornaam' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string|max:255',
            'beschrijving' => 'required|string',
            'bijlage' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        try {
            $job->naam = $request->input('naam');
            $job->voornaam = $request->input('voornaam');
            $job->username = $request->input('username');
            $job->email = $request->input('email');
            $job->beschrijving = $request->input('beschrijving');
            $job->type = $request->input('type');

            if ($request->hasFile('bijlage')) {
                // Supprimer l'ancien fichier s'il existe
                if ($job->bijlage) {
                    Storage::disk('public')->delete($job->bijlage);
                }
                $job->bijlage = $request->file('bijlage')->store('bijlages', 'public');
            }

            $job->save();

            return redirect()->route('jobs.show', $job)
                ->with('success', 'Casus succesvol bijgewerkt.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Er is een fout opgetreden bij het bijwerken van de casus.']);
        }
    }

    public function destroy(Job $job)
    {
        try {
            // Supprimer le fichier joint s'il existe
            if ($job->bijlage) {
                Storage::disk('public')->delete($job->bijlage);
            }

            $job->delete();

            return redirect()->route('jobs.index')
                ->with('success', 'Casus succesvol verwijderd.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'Er is een fout opgetreden bij het verwijderen van de casus.']);
        }
    }

    public function downloadPDF(Job $job)
    {
        try {
            $pdf = Pdf::loadView('jobs.job-pdf', ['job' => $job]);
            $pdf->setPaper('A4', 'portrait');
            
            return $pdf->download('casus-' . $job->id . '.pdf');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'Er is een fout opgetreden bij het genereren van de PDF.']);
        }
    }
}


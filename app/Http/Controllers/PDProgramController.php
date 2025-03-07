<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PDProgram;
use Barryvdh\DomPDF\Facade\Pdf;
class PDProgramController extends Controller
{
    // Step 1: Provider Profile Form
    public function create()
    {
        return view('provider_profile');
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_owner' => 'required|string|max:255',
            'office_address' => 'required|string',
            'office_tel' => 'required|string',
            'office_email' => 'required|email',
            'program_manager' => 'required|string|max:255',
            'email_address' => 'required|email',
            'mobile_no' => 'required|string',
        ]);

        $request->session()->put('provider_profile', $request->all());

        return redirect()->route('pd_program.program_profile')->with('success', 'Provider Profile saved! Proceed to Program Profile.');

    }

    // Step 2: Program Profile Form
    public function ProgramProfile()
    {
        return view('program_profile');
    }

    public function storeProgramProfile(Request $request)
    {
        $request->validate([
            'pd_title' => 'required|string|max:255',
            'rationale' => 'required|string',
            'program_description' => 'required|string',
            'results_objective' => 'required|string',
            'application_objective' => 'required|string',
            'terminal_objective' => 'required|string',
            'enabling_objectives' => 'required|string',
            'professional_standard' => 'required|string',
            'domain' => 'required|string',
            'strand' => 'required|string',
            'indicator' => 'required|string',
            'participants_profile' => 'required|string',
            'total_participants' => 'required|integer|min:1',
        ]);

        $request->session()->put('program_profile', $request->all());

        return redirect()->route('pd_program.program_design')->with('success', 'Program Profile saved successfully!');
    }

    // Step 3: Program Design Form
    public function ProgramDesign()
    {
        return view('program_design');
    }

    public function storeProgramDesign(Request $request)
    {
        $request->validate([
            'session_no' => 'required|integer|min:1',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'topic' => 'required|string|max:255',
            'session_objective' => 'required|string',
            'methodology' => 'required|string',
            'outputs' => 'required|string',
            'resourcespeaker' => 'required|string|max:255',
        ]);

        $request->session()->put('program_design', $request->all());

        return redirect()->route('pd_program.management_team')->with('success', 'Program Design saved successfully!');
    }

    // Step 4: Management Team Form
    public function ManagementTeam()
    {
        return view('management_team');
    }

    public function storeManagementTeam(Request $request)
    {
        $request->validate([
            'program_manager' => 'required|string|max:255',
            'learning_manager' => 'required|string|max:255',
            'resource_speaker_manager' => 'required|string|max:255',
            'me_coordinator' => 'required|string|max:255',
            'program_manager_signature' => 'required|string|max:255',
            'signature' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $request->session()->put('management_team', $request->all());

        return redirect()->route('pd_program.monitoring_and_evaluation')->with('success', 'Management Team saved successfully!');
    }

    // Step 5: Monitoring & Evaluation Form
    public function MonitorEvaluate()
    {
        return view('monitoring_and_evaluation');
    }

    public function storeMonitorEvaluate(Request $request)
    {
        $request->validate([
            'level4_objective' => 'required|string',
            'level4_methods' => 'required|string',
            'level4_data_sources' => 'required|string',
            'level4_schedule' => 'required|date',
            'level4_responsible' => 'required|string',
            'level4_support' => 'required|string',
            'level4_user' => 'required|string',
            'level3_objective' => 'required|string',
            'level3_methods' => 'required|string',
            'level3_data_sources' => 'required|string',
            'level3_schedule' => 'required|date',
            'level3_responsible' => 'required|string',
            'level3_support' => 'required|string',
            'level3_user' => 'required|string',
            'level2_objective' => 'required|string',
            'level2_methods' => 'required|string',
            'level2_data_sources' => 'required|string',
            'level2_schedule' => 'required|date',
            'level2_responsible' => 'required|string',
            'level2_support' => 'required|string',
            'level2_user' => 'required|string',
            'level1_objective' => 'required|string',
            'level1_methods' => 'required|string',
            'level1_data_sources' => 'required|string',
            'level1_schedule' => 'required|date',
            'level1_responsible' => 'required|string',
            'level1_support' => 'required|string',
            'level1_user' => 'required|string',
            'program_manager' => 'required|string',
            'signature' => 'required|string',
            'date' => 'required|date',
        ]);

        $request->session()->put('monitoring_and_evaluation', $request->all());

        return redirect()->route('pd_program.program_form')->with('success', 'Monitoring & Evaluation saved successfully! Proceed to Preview.');
    }

    // Step 6: Final Preview (Program Form)
    public function ProgramForm()
    {
        $providerProfile = session('provider_profile', []);
        $programProfile = session('program_profile', []);
        $programDesign = session('program_design', []);
        $managementTeam = session('management_team', []);
        $monitorEvaluate = session('monitoring_and_evaluation', []);

        $data = array_merge($providerProfile, $programProfile, $programDesign, $managementTeam, $monitorEvaluate);

        return view('program_form', compact('data'));
    }

    public function ProgramFormstore(Request $request)
    {
        $data = array_merge(
            session('provider_profile', []),
            session('program_profile', []),
            session('program_design', []),
            session('management_team', []),
            session('monitoring_and_evaluation', [])
        );

        // Save data to the database (if needed)
        // PDProgram::create($data);

        // Clear session after storing
        $request->session()->forget([
            'provider_profile', 
            'program_profile', 
            'program_design', 
            'management_team', 
            'monitoring_and_evaluation'
        ]);

        return redirect()->route('pd_program.program_form')->with('success', 'PD Program submitted successfully.');
    }

    public function exportPdf()
{
    $data = array_merge(
        session('provider_profile', []),
        session('program_profile', []),
        session('program_design', []),
        session('management_team', []),
        session('monitoring_and_evaluation', [])
    );

    $pdf = Pdf::loadView('pdf', compact('data'));
    return $pdf->download('PD_Program_Design.pdf');
}

}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Program Design Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</html>

<body>
<div class="container mt-5">
    <div class="card p-4">
    (Enclosure No.4 to DepEd Memorandum No.____s.2023)
    <h2 class="mb-3">Detailed Professional Development Program Design Form</h2>
            <form action="{{ route('pd_program.program_form.store') }}" method="POST">
                @csrf
      <p> INSTRUCTIONS: Provide the details in the designated spaces as required. Indicate N/A if not applicable. DO NOT ABBREVIATE.</p>
        <h6>PROFESSIONAL DEVELOPMENT (PD) pROGRAM PROVIDER PROFILE</h6>
       
        <table class="table table-bordered">
    <tr>
        <th style="background-color: lightblue;">Program Owner</th>
        <td>{{ $data['program_owner'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th style="background-color: lightblue;">Office Address</th>
        <td>{{ $data['office_address'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th style="background-color: lightblue;">Office Tel</th>
        <td>{{ $data['office_tel'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th style="background-color: lightblue;">Office Email</th>
        <td>{{ $data['office_email'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th style="background-color: lightblue;">Email Address</th>
        <td>{{ $data['email_address'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <th style="background-color: lightblue;">Mobile No</th>
        <td>{{ $data['mobile_no'] ?? 'N/A' }}</td>
    </tr>
</table>

            
             
        <h4>PD Program Profile</h4>
        <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Title</strong></td>
            <td>{{ $data['pd_title'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Rationale</strong></td>
            <td>{{ $data['rationale'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Program Description</strong></td>
            <td>{{ $data['program_description'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>

        <h4>Program Objectives</h4>
        <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Results Objective</strong></td>
            <td>{{ $data['results_objective'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Application Objective</strong></td>
            <td>{{ $data['application_objective'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Terminal Objective</strong></td>
            <td>{{ $data['terminal_objective'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Enabling Objectives</strong></td>
            <td>{{ $data['enabling_objectives'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>

        <h4>Professional Standard</h4>
        <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Selected Standard</strong></td>
            <td>{{ $data['professional_standard'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Domain</strong></td>
            <td>{{ $data['domain'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Strand</strong></td>
            <td>{{ $data['strand'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Indicator</strong></td>
            <td>{{ $data['indicator'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>


        <h4>Target Participants</h4>
        <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Profile</strong></td>
            <td>{{ $data['participants_profile'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Total Participants</strong></td>
            <td>{{ $data['total_participants'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>

        <h4>PD Program Design</h4>
        <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Session No</strong></td>
            <td>{{ $data['session_no'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Duration</strong></td>
            <td>{{ $data['start_time'] ?? 'Not set' }} - {{ $data['end_time'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Topic</strong></td>
            <td>{{ $data['topic'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Session Objective</strong></td>
            <td>{{ $data['session_objective'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>

        <h4>PD Program Management Team</h4>
        <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Program Manager</strong></td>
            <td>{{ $data['program_manager'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Learning Manager</strong></td>
            <td>{{ $data['learning_manager'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Resource Speaker</strong></td>
            <td>{{ $data['resource_speaker_manager'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>M&E Coordinator</strong></td>
            <td>{{ $data['me_coordinator'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Documenter</strong></td>
            <td>{{ $data['documenter'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Secretariat</strong></td>
            <td>{{ $data['secretariat'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Welfare Officer</strong></td>
            <td>{{ $data['welfare_officer'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Logistic Officer</strong></td>
            <td>{{ $data['logistics'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Finance Officer</strong></td>
            <td>{{ $data['finance'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>


        <h4>Declaration</h4>
        <p>
                    I hereby declare the information provided in this application is true and correct and there have been no misleading statements, omission of any relevant factors,
                    nor any misinterpretation made.<br><br>
                    I agree that the DepEd-National Educators Academy of the Philippines will be co-owner of all data gathered and the copyright of any publication using these data.<br><br>
                    To be signed by the PD Program Manager.
                </p>
                <table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Program Manager</strong></td>
            <td>{{ $data['program_manager'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Signature</strong></td>
            <td>______________________</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Date</strong></td>
            <td>{{ $data['date'] ?? 'Not set'}}</td>
        </tr>
    </tbody>
</table>

        <h4>Monitoring and Evaluation (M&E) Plan</h4>
        <table class="table table-bordered">
    <thead>
        <tr style="background-color: lightblue;">
            <th>Level</th>
            <th>Objective</th>
            <th>Methods & Tools</th>
            <th>Data Sources</th>
            <th>Schedule</th>
            <th>Person Responsible</th>
            <th>Support Needed</th>
            <th>User of M&E Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Level 4 - Results</strong></td>
            <td>{{ $data['level4_objective'] ?? 'Not set' }}</td>
            <td>{{ $data['level4_methods'] ?? 'Not set' }}</td>
            <td>{{ $data['level4_data_sources'] ?? 'Not set' }}</td>
            <td>{{ $data['level4_schedule'] ?? 'Not set' }}</td>
            <td>{{ $data['level4_responsible'] ?? 'Not set' }}</td>
            <td>{{ $data['level4_support'] ?? 'Not set' }}</td>
            <td>{{ $data['level4_user'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Level 3 - Behavior</strong></td>
            <td>{{ $data['level3_objective'] ?? 'Not set' }}</td>
            <td>{{ $data['level3_methods'] ?? 'Not set' }}</td>
            <td>{{ $data['level3_data_sources'] ?? 'Not set' }}</td>
            <td>{{ $data['level3_schedule'] ?? 'Not set' }}</td>
            <td>{{ $data['level3_responsible'] ?? 'Not set' }}</td>
            <td>{{ $data['level3_support'] ?? 'Not set' }}</td>
            <td>{{ $data['level3_user'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Level 2 - Learning</strong></td>
            <td>{{ $data['level2_objective'] ?? 'Not set' }}</td>
            <td>{{ $data['level2_methods'] ?? 'Not set' }}</td>
            <td>{{ $data['level2_data_sources'] ?? 'Not set' }}</td>
            <td>{{ $data['level2_schedule'] ?? 'Not set' }}</td>
            <td>{{ $data['level2_responsible'] ?? 'Not set' }}</td>
            <td>{{ $data['level2_support'] ?? 'Not set' }}</td>
            <td>{{ $data['level2_user'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Level 1 - Reaction</strong></td>
            <td>{{ $data['level1_objective'] ?? 'Not set' }}</td>
            <td>{{ $data['level1_methods'] ?? 'Not set' }}</td>
            <td>{{ $data['level1_data_sources'] ?? 'Not set' }}</td>
            <td>{{ $data['level1_schedule'] ?? 'Not set' }}</td>
            <td>{{ $data['level1_responsible'] ?? 'Not set' }}</td>
            <td>{{ $data['level1_support'] ?? 'Not set' }}</td>
            <td>{{ $data['level1_user'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>


<h4>Declaration</h4>
<p>
    I hereby declare that the information provided in this application is true and correct. There have been no misleading statements, omission of any relevant facts, nor any misinterpretation made.<br><br>
    I agree that the DepEd-National Educators Academy of the Philippines will be co-owner of all data gathered and the copyright of any publication using these data.<br><br>
    To be signed by the PD Program Manager.
</p>
<table class="table table-bordered">
    <tbody>
        <tr>
            <td style="background-color: lightblue;"><strong>Program Manager</strong></td>
            <td>{{ $data['program_manager'] ?? 'Not set' }}</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Signature</strong></td>
            <td>______________________</td>
        </tr>
        <tr>
            <td style="background-color: lightblue;"><strong>Date</strong></td>
            <td>{{ $data['date'] ?? 'Not set' }}</td>
        </tr>
    </tbody>
</table>

    </div>
</div>
<script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
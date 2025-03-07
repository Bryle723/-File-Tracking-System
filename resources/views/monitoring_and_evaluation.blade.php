<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M&E Plan Form - DepEd DM 044</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .table td, .table th { vertical-align: middle; text-align: center; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3 text-center">Monitoring and Evaluation (M&E) Plan Form</h2>
            <p class="text-center">Following the Kirkpatrick Evaluation Model</p>

            <form action="{{ route('pd_program.monitor_and_evaluate.store') }}" method="POST">
                @csrf

                <div class="table-responsive">
                <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Level of M&E</th>
            <th>Objectives</th>
            <th>Methods & Tools</th>
            <th>Data Sources</th>
            <th>Schedule</th>
            <th>Person Responsible</th>
            <th>Support Needed</th>
            <th>User of M&E Data</th>
        </tr>
    </thead>
    <tbody>
        <!-- Level 4 - Results -->
        <tr>
            <td><strong>Level 4 - Results</strong><br>(Targeted outcomes from training)</td>
            <td><input type="text" class="form-control" name="level4_objective" ></td>
            <td><input type="text" class="form-control" name="level4_methods" ></td>
            <td><input type="text" class="form-control" name="level4_data_sources" ></td>
            <td><input type="date" class="form-control" name="level4_schedule" ></td>
            <td><input type="text" class="form-control" name="level4_responsible" ></td>
            <td><input type="text" class="form-control" name="level4_support" ></td>
            <td><input type="text" class="form-control" name="level4_user" ></td>
        </tr>

        <!-- Level 3 - Behavior -->
        <tr>
            <td><strong>Level 3 - Behavior</strong><br>(Application of learning on the job)</td>
            <td><input type="text" class="form-control" name="level3_objective" ></td>
            <td><input type="text" class="form-control" name="level3_methods" ></td>
            <td><input type="text" class="form-control" name="level3_data_sources" ></td>
            <td><input type="date" class="form-control" name="level3_schedule" ></td>
            <td><input type="text" class="form-control" name="level3_responsible" ></td>
            <td><input type="text" class="form-control" name="level3_support" ></td>
            <td><input type="text" class="form-control" name="level3_user" ></td>
        </tr>

        <!-- Level 2 - Learning -->
        <tr>
            <td><strong>Level 2 - Learning</strong><br>(Acquisition of skills and knowledge)</td>
            <td><input type="text" class="form-control" name="level2_objective" ></td>
            <td><input type="text" class="form-control" name="level2_methods" ></td>
            <td><input type="text" class="form-control" name="level2_data_sources" ></td>
            <td><input type="date" class="form-control" name="level2_schedule" ></td>
            <td><input type="text" class="form-control" name="level2_responsible" ></td>
            <td><input type="text" class="form-control" name="level2_support" ></td>
            <td><input type="text" class="form-control" name="level2_user" ></td>
        </tr>

        <!-- Level 1 - Reaction -->
        <tr>
            <td><strong>Level 1 - Reaction</strong><br>(Participant feedback on training)</td>
            <td><input type="text" class="form-control" name="level1_objective" ></td>
            <td><input type="text" class="form-control" name="level1_methods" ></td>
            <td><input type="text" class="form-control" name="level1_data_sources" ></td>
            <td><input type="date" class="form-control" name="level1_schedule" ></td>
            <td><input type="text" class="form-control" name="level1_responsible" ></td>
            <td><input type="text" class="form-control" name="level1_support" ></td>
            <td><input type="text" class="form-control" name="level1_user" ></td>
        </tr>
    </tbody>
</table>

                </div>

                <!-- Declaration Section -->
                <h4 class="mt-4">Declaration</h4>
                <p>
                    I hereby declare the information provided in this application is true and correct. There have been no misleading statements, omissions of relevant facts, or misinterpretations.
                    <br><br>
                    I agree that the DepEd-National Educators Academy of the Philippines will be the co-owner of all data gathered and hold the copyright for any publication using these data.
                </p>

                <!-- Signature Section -->
                <div class="mb-3">
                    <label for="program_manager" class="form-label"><strong>Program Manager</strong></label>
                    <input type="text" class="form-control" id="program_manager" name="program_manager" >
                </div>
                <div class="mb-3">
                    <label for="signature" class="form-label"><strong>Signature</strong></label>
                    <input type="text" class="form-control" id="signature" name="signature" >
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label"><strong>Date</strong></label>
                    <input type="date" class="form-control" id="date" name="date" >
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

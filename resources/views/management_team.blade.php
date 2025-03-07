<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Program Management Team</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">PD Program Management Team</h2>
            <form action="{{ route('pd_program.management.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="program_manager" style="background-color: lightblue;">Program Manager</label>
                    <input type="text" class="form-control" id="program_manager" name="program_manager" placeholder="Input Program Manager" required >
                </div>

                <div class="form-group">
                    <label for="learning_manager" style="background-color: lightblue;">Learning Manager</label>
                    <input type="text" class="form-control" id="learning_manager" name="learning_manager" placeholder="Input Learning Manager" required>
                </div>

                <div class="form-group">
                    <label for="resource_speaker_manager" style="background-color: lightblue;">Resource Speaker/SME</label>
                    <input type="text" class="form-control" id="resource_speaker_manager" name="resource_speaker_manager" placeholder="Input resource speaker" required>
                </div>

                <div class="form-group">
                    <label for="me_coordinator"style="background-color: lightblue;">M&E Coordinator</label>
                    <input type="text" class="form-control" id="me_coordinator" name="me_coordinator" placeholder="Input Coordinator" required>
                </div>
 <!-- Documenter -->
 <label for="documenter" style="background-color: lightblue;">Documenter:</label>
        <input type="text" class="form-control" id="documenter" name="documenter" placeholder="Input Documenter" required>
        <br><br>

        <!-- Secretariat -->
        <label for="secretariat" style="background-color: lightblue;">Secretariat:</label>
        <input type="text" class="form-control" id="secretariat" name="secretariat" placeholder="Input Secretariat" required>
        <br><br>

        <!-- Welfare Officer -->
        <label for="welfare_officer" style="background-color: lightblue;">Welfare Officer:</label>
        <input type="text" class="form-control" id="welfare_officer" name="welfare_officer" placeholder="Input Welfare Officer" required>
        <br><br>

        <!-- Logistics -->
        <label for="logistics" style="background-color: lightblue;">Logistics:</label>
        <input type="text" class="form-control" id="logistics" name="logistics" placeholder="Input Logistics" required>
        <br><br>

        <!-- Finance -->
        <label for="finance" style="background-color: lightblue;">Finance:</label>
        <input type="text" class="form-control" id="finance" name="finance" placeholder="Input Finance" required>
        <br><br>
                <h4 class="mt-4">Declaration</h4>
                <p>
                    I hereby declare the information provided in this application is true and correct and there have been no misleading statements, omission of any relevant factors,
                    nor any misinterpretation made.<br><br>
                    I agree that the DepEd-National Educators Academy of the Philippines will be co-owner of all data gathered and the copyright of any publication using these data.<br><br>
                    To be signed by the PD Program Manager.
                </p>

                <div class="mb-3">
                    <label for="program_manager_signature" class="form-label" style="background-color: lightblue;">Program Manager</label>
                    <input type="text" class="form-control" id="program_manager_signature" name="program_manager_signature" placeholder="Input Program Manager" required>
                </div>

                <div class="mb-3">
                    <label for="signature" class="form-label" style="background-color: lightblue;">Signature</label>
                    <input type="text" class="form-control" id="signature" name="signature" >
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label" style="background-color: lightblue;">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Input Date" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Management Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Program Management Details</h1>
    <form action="/submit" method="POST" enctype="multipart/form-data">
        <!-- Program Management ID -->
        <label for="program_management_id">Program Management ID:</label>
        <input type="text" id="program_management_id" name="program_management_id" required>
        <br><br>

        <!-- Learning Manager -->
        <label for="learning_manager">Learning Manager:</label>
        <input type="text" id="learning_manager" name="learning_manager">
        <br><br>

        <!-- Resource Speaker -->
        <label for="resource_speaker">Resource Speaker:</label>
        <input type="text" id="resource_speaker" name="resource_speaker">
        <br><br>

        <!-- M&E Coordinator -->
        <label for="me_coordinator">M&E Coordinator:</label>
        <input type="text" id="me_coordinator" name="me_coordinator">
        <br><br>

        <!-- Documenter -->
        <label for="documenter">Documenter:</label>
        <input type="text" id="documenter" name="documenter">
        <br><br>

        <!-- Secretariat -->
        <label for="secretariat">Secretariat:</label>
        <input type="text" id="secretariat" name="secretariat">
        <br><br>

        <!-- Welfare Officer -->
        <label for="welfare_officer">Welfare Officer:</label>
        <input type="text" id="welfare_officer" name="welfare_officer">
        <br><br>

        <!-- Logistics -->
        <label for="logistics">Logistics:</label>
        <input type="text" id="logistics" name="logistics">
        <br><br>

        <!-- Finance -->
        <label for="finance">Finance:</label>
        <input type="text" id="finance" name="finance">
        <br><br>

        <!-- PD Program ID -->
        <label for="pdprogram_id">PD Program ID:</label>
        <input type="text" id="pdprogram_id" name="pdprogram_id" required>
        <br><br>

        <!-- Attachment: PRC License -->
        <label for="prc_license">PRC License Attachment:</label>
        <input type="file" id="prc_license" name="prc_license" accept=".pdf,.jpg,.jpeg,.png" required>
        <br><br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

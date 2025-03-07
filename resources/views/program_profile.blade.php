<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Program Profile</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">Program Profile</h2>
            <form action="{{ route('pd_program.profile.store') }}" method="POST">
                @csrf

                <h4 class="mt-4">PD Program Profile</h4>
                <div class="form-group">
                    <label style="background-color: lightblue;">Title</label>
                    <input type="text" class="form-control" name="pd_title" placeholder="Input Title" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Rationale</label>
                    <textarea class="form-control" name="rationale" rows="5" placeholder="Input Rationale" required></textarea>
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Program Description</label>
                    <textarea class="form-control" name="program_description" rows="4" placeholder="Input Description" required></textarea>
                </div>

                <h4 class="mt-4">Program Objectives</h4>
                <div class="form-group">
                    <label style="background-color: lightblue;">Results Objective</label>
                    <textarea class="form-control" name="results_objective" rows="3" placeholder="Input Results Objective" required></textarea>
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Application Objective</label>
                    <textarea class="form-control" name="application_objective" rows="3" placeholder="Input Application Objectives" required></textarea>
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Terminal Objective</label>
                    <textarea class="form-control" name="terminal_objective" rows="3" placeholder="Input Terminal Objectives" required></textarea>
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Enabling Objectives</label>
                    <textarea class="form-control" name="enabling_objectives" rows="3" placeholder="Input Enabling Objectives" required></textarea>
                </div>

                <h4 class="mt-4">Professional Standard</h4>
                <div class="form-group">
                    <label for="professional_standard" style="background-color: lightblue;">Select Professional Standard</label>
                    <select class="form-control" id="professional_standard" name="professional_standard" >
                        <option value="">-- Select --</option>
                        <option value="PPST">PPST</option>
                        <option value="PPSSH">PPSSH</option>
                        <option value="PPSS">PPSS</option>
                    </select>
                </div>

                <h4 class="mt-4">Target Professional Standard</h4>
                <div class="form-group">
                    <label for="domain" style="background-color: lightblue;">Domain</label>
                    <input type="text" class="form-control" name="domain" placeholder="Input Standard" required>
                    <!--<select class="form-control" id="domain" name="domain" >
                        <option value="">-- Select Domain --</option>
                    </select>-->
                </div>
                <div class="form-group">
                    <label for="strand" style="background-color: lightblue;">Strand</label>
                    <input type="text" class="form-control" name="strand" placeholder="Input Strand" required>
                    <!--<select class="form-control" id="strand" name="strand" >
                        <option value="">-- Select Strand --</option>
                    </select>-->
                </div>
                <div class="form-group">
                    <label for="indicator" style="background-color: lightblue;">Indicator</label>
                    <input type="text" class="form-control" name="indicator" placeholder="Input Indicator" required>
                    <!--<select class="form-control" id="indicator" name="indicator" >
                        <option value="">-- Select Indicator --</option>
                    </select>
                </div>-->

                <h4 class="mt-4">Target Participants</h4>
                <div class="form-group">
                    <label style="background-color: lightblue;">Participants Profile</label>
                    <textarea class="form-control" name="participants_profile" rows="3" placeholder="Input Profile" required></textarea>
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Total Number of Participants</label>
                    <input type="number" class="form-control" name="total_participants" placeholder="Input Number of Participants" required>
                </div>

                <!-- Next Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>

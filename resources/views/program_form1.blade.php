<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Program Design Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">Detailed Professional Development Program Design Form</h2>
            <form action="{{ route('pd_program.program_form.store') }}" method="POST">
                @csrf

                <h4 class="mt-4">Professional Development (PD) Program Provider Profile</h4>
                <div class="form-group">
                    <label>PD Program Owner</label>
                    <input type="text" class="form-control" name="program_owner" required>
                </div>
                <div class="form-group">
                    <label>Complete Office Address</label>
                    <input type="text" class="form-control" name="office_address" required>
                </div>
                <div class="form-group">
                    <label>Office Telephone No.</label>
                    <input type="text" class="form-control" name="office_tel" required>
                </div>
                <div class="form-group">
                    <label>Office Email Address</label>
                    <input type="email" class="form-control" name="office_email" required>
                </div>
                <div class="form-group">
                    <label>PD Program Manager</label>
                    <input type="text" class="form-control" name="program_manager" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email_address" required>
                </div>
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" class="form-control" name="mobile_no" required>
                </div>
                <h4 class="mt-4">PD Program Profile</h4>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="pd_title" required>
                </div>
                <div class="form-group">
                    <label>Rationale</label>
                    <textarea class="form-control" name="rationale" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label>Program Description</label>
                    <textarea class="form-control" name="program_description" rows="4" required></textarea>
                </div>
                
                <h4 class="mt-4">Program Objectives</h4>
                <div class="form-group">
                    <label>Results Objective</label>
                    <textarea class="form-control" name="results_objective" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Application Objective</label>
                    <textarea class="form-control" name="application_objective" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Terminal Objective</label>
                    <textarea class="form-control" name="terminal_objective" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Enabling Objectives</label>
                    <textarea class="form-control" name="enabling_objectives" rows="3" required></textarea>
                </div>
                <h4 class="mt-4">Professional Standard</h4>
                <div class="mb-3">
                    <label for="professional_standard" class="form-label">Select Professional Standard</label>
                    <select class="form-control" id="professional_standard" name="professional_standard" required>
                        <option value="">-- Select --</option>
                        <option value="PPST">PPST</option>
                        <option value="PPSSH">PPSSH</option>
                        <option value="PPSS">PPSS</option>
                    </select>
                </div>

                <h4 class="mt-4">Target Professional Standard</h4>
                <div class="mb-3">
                    <label for="domain" class="form-label">Domain</label>
                    <select class="form-control" id="domain" name="domain" required>
                        <option value="">-- Select Domain --</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="strand" class="form-label">Strand</label>
                    <select class="form-control" id="strand" name="strand" required>
                        <option value="">-- Select Strand --</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="indicator" class="form-label">Indicator</label>
                    <select class="form-control" id="indicator" name="indicator" required>
                        <option value="">-- Select Indicator --</option>
                    </select>
                </div>
                <h4 class="mt-4">Target Participants</h4>
                <div class="form-group">
                    <label>Participants Profile</label>
                    <textarea class="form-control" name="participants_profile" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Total Number of Participants</label>
                    <input type="number" class="form-control" name="total_participants" required>
                </div>

                <h4 class="mt-4">PD Program Design</h4>
                <div class="form-group">
                    <label>Session Number</label>
                    <input type="number" class="form-control" name="session_no" required>
                </div>
                <div class="form-group">
                    <label>Duration (00:00 - 00:00)</label>
                    <input type="text" class="form-control" name="duration" placeholder="e.g., 09:00 - 12:00" required>
                </div>
                <div class="form-group">
                    <label>Topic</label>
                    <input type="text" class="form-control" name="topic" required>
                </div>
                <div class="form-group">
                    <label>Session Objectives</label>
                    <textarea class="form-control" name="session_objective" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Methodology</label>
                    <textarea class="form-control" name="methodology" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Outputs</label>
                    <textarea class="form-control" name="outputs" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Resource Speaker/SME</label>
                    <input type="text" class="form-control" name="resource_speaker" required>
                </div>

                <h4 class="mt-4">PD Program Management Team</h4>
                <div class="form-group">
                    <label>Program Manager</label>
                    <input type="text" class="form-control" name="program_manager" required>
                </div>
                <div class="form-group">
                    <label>Learning Manager</label>
                    <input type="text" class="form-control" name="learning_manager" required>
                </div>
                <div class="form-group">
                    <label>Resource Speaker/SME</label>
                    <input type="text" class="form-control" name="resource_speaker_manager" required>
                </div>
                <div class="form-group">
                    <label>M&E Coordinator</label>
                    <input type="text" class="form-control" name="me_coordinator" required>
                </div>
                <h4 class="mt-4">Declaration</h4>
                <p>
                    I hereby declare the information provided in this application is true and correct and there have base64_encodeno misleading statements, omission of any relevant factors
                    nor any misinterpretation made<br><br>
                    I agree that the DepEd-National Educators Academy of the Philippines will be co-owner of all data gathered and the copyright of any publication using these data.<br><br>
                    To be signed by the PD Program Manager
                </p>
                <div class="mb-3">
                    <label for="signature" class="form-label">Program Manager</label>
                    <input type="text" class="form-control" id="program manager" name="program manager" required>
                </div>
                <div class="mb-3">
                    <label for="signature" class="form-label">Signature</label>
                    <input type="text" class="form-control" id="signature" name="signature" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Preview</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

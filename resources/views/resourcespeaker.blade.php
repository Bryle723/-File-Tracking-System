<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Speaker Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Resource Speaker Information</h1>
        <form action="/submit" method="POST" enctype="multipart/form-data">
            <!-- Professional Development Program -->
            <label for="pd_program">Professional Development Program:</label>
            <input type="text" id="pd_program" name="pd_program" class="form-control" required>
            
            <label for="pd_provider">Professional Development Program Provider:</label>
            <input type="text" id="pd_provider" name="pd_provider" class="form-control" required>
            
            <hr>
            <h3>Personal Information</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
            
            <label for="address">Residence Address:</label>
            <input type="text" id="address" name="address" class="form-control" required>
            
            <label for="landline">Landline No.:</label>
            <input type="text" id="landline" name="landline" class="form-control">
            
            <label for="mobile1">Mobile No. 1:</label>
            <input type="text" id="mobile1" name="mobile1" class="form-control" required>
            
            <label for="mobile2">Mobile No. 2:</label>
            <input type="text" id="mobile2" name="mobile2" class="form-control">
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            
            <label for="business_address">Business Address:</label>
            <input type="text" id="business_address" name="business_address" class="form-control">
            
            <label for="citizenship">Citizenship:</label>
            <input type="text" id="citizenship" name="citizenship" class="form-control" required>
            
            <hr>
            <h3>Track Record</h3>
            <label for="expertise">Areas of Specialization/Expertise:</label>
            <textarea id="expertise" name="expertise" class="form-control"></textarea>
            
            <label for="seminars_conducted">Relevant Seminars/Training Programs Conducted (Last 5 Years):</label>
            <textarea id="seminars_conducted" name="seminars_conducted" class="form-control"></textarea>
            
            <label for="seminars_attended">Relevant Seminars/Training Programs Attended (Last 5 Years):</label>
            <textarea id="seminars_attended" name="seminars_attended" class="form-control"></textarea>
            
            <label for="publications">Relevant Publications, Research, and Conference Papers:</label>
            <textarea id="publications" name="publications" class="form-control"></textarea>
            
            <label for="achievements">Major Achievements, Citations, Recognitions, and Awards:</label>
            <textarea id="achievements" name="achievements" class="form-control"></textarea>
            
            <hr>
            <h3>Education and Employment</h3>
            <label for="education">Educational Background:</label>
            <textarea id="education" name="education" class="form-control"></textarea>
            
            <label for="work_experience">Work Experience (Last 5 Years):</label>
            <textarea id="work_experience" name="work_experience" class="form-control"></textarea>
            
            <hr>
            <h3>Other Relevant Information</h3>
            <label for="eligibility">Eligibility (Professions & Licenses):</label>
            <textarea id="eligibility" name="eligibility" class="form-control"></textarea>
            
            <label for="affiliations">Other Major Affiliations (Professional, Civic, etc.):</label>
            <textarea id="affiliations" name="affiliations" class="form-control"></textarea>
            
            <!-- Attachment: PRC License -->
            <label for="prc_license">PRC License Attachment:</label>
            <input type="file" id="prc_license" name="prc_license" class="form-control-file" accept=".pdf,.jpg,.jpeg,.png" required>
            
            <hr>
            <p>
                I hereby certify that the above information written by me is true and correct to the best of my knowledge and belief.
                I further authorize NEAP and other agencies to investigate the authenticity of all the documents presented.
            </p>
            
            <p>
                I agree to the NEAP Privacy Notice and give my consent to the collection and processing of my personal data in accordance thereto.
            </p>
            
            <label for="signature">Signature Over Printed Name:</label>
            <input type="text" id="signature" name="signature" class="form-control" required>
            
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="form-control" required>
            
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

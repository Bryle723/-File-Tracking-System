<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed Professional Development Program Design Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">PROFESSIONAL DEVELOPMENT(PD) PROGRAM PROVIDER PROFILE</h2>
            <form action="{{ route('pd_program.store') }}" method="POST">
                @csrf

                <h4 class="mt-4">Professional Development (PD) Program Provider Profile</h4>
                <div class="form-group">
                    <label style="background-color: lightblue;">PD Program Owner</label>
                    <input type="text" class="form-control" name="program_owner"  placeholder="Type the complete name" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Complete Office Address</label>
                    <input type="text" class="form-control" name="office_address" placeholder="Type the complete office address" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Office Telephone No.</label>
                    <input type="text" class="form-control" name="office_tel"  placeholder="Type Telephone No" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Office Email Address</label>
                    <input type="email" class="form-control" name="office_email" placeholder="Type office email address" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">PD Program Manager</label>
                    <input type="text" class="form-control" name="program_manager"  placeholder="Type Program Manager" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Email Address</label>
                    <input type="email" class="form-control" name="email_address"  placeholder="Type email address" required >
                </div>
                <div class="form-group">
                    <label style="background-color: lightblue;">Mobile No.</label>
                    <input type="text" class="form-control" name="mobile_no"  placeholder="Mobile No" required >
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

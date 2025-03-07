<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Design Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">PD Program Design</h2>
            <form action="{{ route('pd_program.design.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="session_no" class="form-label" style="background-color: lightblue;">Session No</label>
                    <input type="number" class="form-control" id="session_no" name="session_no"  placeholder="Input Session" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="background-color: lightblue;">Duration</label>
                    <div class="d-flex">
                        <input type="time" class="form-control me-2" id="start_time" name="start_time" >
                        <span class="mx-2">to</span>
                        <input type="time" class="form-control" id="end_time" name="end_time" >
                    </div>
                </div>
                <div class="mb-3">
                    <label for="topic" class="form-label" style="background-color: lightblue;">Topic</label>
                    <input type="text" class="form-control" id="topic" name="topic" placeholder="Input Topic" required>
                </div>
                <div class="mb-3">
                    <label for="session_objective" class="form-label" style="background-color: lightblue;">Session Objective</label>
                    <textarea class="form-control" id="session_objective" name="session_objective" placeholder="Input Session Objective" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="methodology" class="form-label" style="background-color: lightblue;">Methodology</label>
                    <textarea class="form-control" id="methodology" name="methodology" placeholder="Input Methodology" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="outputs" class="form-label" style="background-color: lightblue;">Outputs</label>
                    <textarea class="form-control" id="outputs" name="outputs" placeholder="Input Outputs" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="resourcespeakerID" class="form-label" style="background-color: lightblue;">Resource Speaker</label>
                    <input type="text" class="form-control" id="resourcespeaker" name="resourcespeaker" placeholder="Input Resource Speaker" required>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

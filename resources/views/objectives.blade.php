<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectives Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">Objectives</h2>
            <form>
                <div class="mb-3">
                    <label for="results" class="form-label">Results</label>
                    <input type="text" class="form-control" id="results" name="results" required>
                </div>
                <div class="mb-3">
                    <label for="application" class="form-label">Application</label>
                    <input type="text" class="form-control" id="application" name="application" required>
                </div>
                <div class="mb-3">
                    <label for="terminal" class="form-label">Terminal</label>
                    <input type="text" class="form-control" id="terminal" name="terminal" required>
                </div>
                <div class="mb-3">
                    <label for="enabling" class="form-label">Enabling</label>
                    <input type="text" class="form-control" id="enabling" name="enabling" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
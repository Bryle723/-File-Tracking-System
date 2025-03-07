<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target Domain Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">Target Domain</h2>
            <form>
                <div class="mb-3">
                    <label for="standardsID" class="form-label">Standards ID</label>
                    <input type="text" class="form-control" id="standardsID" name="standardsID" required>
                </div>
                <div class="mb-3">
                    <label for="domain" class="form-label">Domain</label>
                    <input type="text" class="form-control" id="domain" name="domain" required>
                </div>
                <div class="mb-3">
                    <label for="strand" class="form-label">Strand</label>
                    <input type="text" class="form-control" id="strand" name="strand" required>
                </div>
                <div class="mb-3">
                    <label for="indicator" class="form-label">Indicator</label>
                    <input type="text" class="form-control" id="indicator" name="indicator" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
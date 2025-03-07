<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standards Form</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-3">Standards Selection</h2>
            <form>
                <div class="mb-3">
                    <label for="standard_id" class="form-label">Standard</label>
                    <select class="form-select" id="standard_id" name="standard_id" required>
                        <option value="">Select a standard</option>
                        <option value="ppst">PPST</option>
                        <option value="ppsssh">PPSSSH</option>
                        <option value="ppss">PPSS</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <form>
            <div class="form-group">
                <label for="angkaInput">angka:</label>
                <input type="number" class="form-control" id="angkaInput" placeholder="Masukkan angka">
            </div>
            <div class="form-group">
                <label for="dropdownInput">pilihan:</label>
                <select class="form-control" id="dropdownInput">
                    <option value="pilihan1">pilihan 1</option>
                    <option value="pilihan2">pilihan 2</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" id="hitung">hitung</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
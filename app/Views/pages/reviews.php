<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review Submission</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Main container -->
    <div class="container mt-5">

        <h1 class="text-center mb-4">Submit Your Movie Review</h1>

        <!-- Form for submitting movie reviews -->
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="movieName" class="form-label">Movie Name</label>
                <input type="text" class="form-control" id="movieName" placeholder="Enter the movie name" required>
            </div>

            <div class="mb-3">
                <label for="releaseYear" class="form-label">Year of Release</label>
                <input type="number" class="form-control" id="releaseYear" 
                       placeholder="Enter the year of release" 
                       min="1900" max="2025" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <select class="form-select" id="rating" required>
                    <option value="" disabled selected>Select a rating</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </div>
        </form>

    </div>

    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Set the max value dynamically to the current year
        document.getElementById("releaseYear").max = new Date().getFullYear();
    </script>

</body>
</html>

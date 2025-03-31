<div class="container mt-5 gap-2 d-flex flex-column justify-content-end">
    <button type="button" class="btn btn-secondary" style="width: 120px;" onclick="getData()">Refresh</button>

    <h1 class="text-center mb-4">Submit Your Movie Review</h1>

    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">    
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/~2375304/assignment/public/review/create" method="POST">
    <?= csrf_field() ?>
        <div class="mb-3">
            <label for="movieName" class="form-label">Movie Name</label>
            <input type="text" class="form-control" name="movieName" id="movieName" required>
        </div>

        <div class="mb-3">
            <label for="releaseYear" class="form-label">Year of Release</label>
            <input type="date" class="form-control" name="releaseYear" id="releaseYear" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" name="rating" id="rating">
                <option value="" disabled selected>Select a rating</option>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">Submit Review</button>
        </div>
    </form>

    <section id="review-section" class="text-center"></section>
</div>

<script>
    // Set maximum release year to the current year
    document.getElementById("releaseYear").max = new Date().getFullYear();

    function getData() {
        fetch('https://mi-linux.wlv.ac.uk/~2375304/assignment/public/review/get/')
            .then(response => response.json())
            .then(response => {
                const el = document.getElementById("review-section");

                // Clear previous reviews if any
                el.innerHTML = '';

                if (response.length === 0) {
                    el.innerHTML = '<p>No reviews yet.</p>';
                }

                for (let i = 0; i < response.length; i++) {
                    const movieName = response[i].movieName;

                    // Fetch movie details from OMDb API
                    fetch(`https://www.omdbapi.com/?t=${encodeURIComponent(movieName)}&apikey=f9e9b222`)
                        .then(res => res.json())
                        .then(movieData => {
                            const appendElement = `
                                <div class="card mt-5" id="review-item">
                                    <img src="${movieData.Poster}" class="card-img-top" alt="${movieName}">
                                    <div class="card-body">
                                        <h5 class="card-title">${movieData.Title}</h5>
                                        <p class="card-text"><strong>Rating:</strong> ${movieData.imdbRating} / 10</p>
                                        <p class="card-text"><strong>Genre:</strong> ${movieData.Genre}</p>
                                        <p class="card-text"><strong>Plot:</strong> ${movieData.Plot}</p>
                                        <p class="card-text"><strong>Release Year:</strong> ${movieData.Released}</p>
                                        <p class="card-text"><strong>Your Rating:</strong> ${response[i].rating} Stars</p>
                                    </div>
                                </div>
                            `;
                            el.insertAdjacentHTML("beforeend", appendElement);
                        })
                        .catch(err => console.log('Error fetching movie details:', err));
                }
            })
            .catch(err => {
                console.log('Error fetching reviews:', err);
            });
    }
</script>



    <!-- Movie Details Section -->
    <div class="container movie-details">
        <div class="row">
            <!-- Movie Poster -->
            <div class="col-md-4">
                <img src="<?= esc($news['image']) ?>" class="img-fluid" alt="Guardians of the Galaxy Poster">
            </div>

            <!-- Movie Information -->
            <div class="col-md-8">
                <h3><?= esc($news['title']) ?></h3>
                <h4>About the Movie</h4>
                <p><strong>Release Date:</strong> <?= esc($news['body']) ?></p>
                <p><strong>Director:</strong> <?= esc($news['director']) ?></p>
                <p><strong>Genre:</strong> <?= esc($news['genre']) ?></p>
                <p><strong>Runtime:</strong> <?= esc($news['runtime']) ?></p>
                <p><strong>Cast:</strong> <?= esc($news['cast']) ?></p>
                <p><strong>Synopsis:</strong> <?= esc($news['body']) ?></p>

                

               
                <div class="mt-4">
                <button onclick="history.back()" class="btn btn-secondary">Back to Movie List</button>
                </div>
            </div>
        </div>
    </div>


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
                <p><strong>Genre:</strong> Action, Adventure, Comedy, Science Fiction</p>
                <p><strong>Runtime:</strong> 121 minutes</p>
                <p><strong>Cast:</strong> Chris Pratt, Zoe Saldana, Dave Bautista, Vin Diesel, Bradley Cooper</p>
                <p><strong>Synopsis:</strong> <?= esc($news['body']) ?></p>

                <h3>Review Highlights</h3>
                <ul>
                    <li>"A visually stunning space opera with a surprising amount of heart." - Screen Rant</li>
                    <li>"Guardians of the Galaxy is a fun ride, full of humor and unexpected emotional moments." - The Hollywood Reporter</li>
                    <li>"A perfect mix of action, adventure, and quirky comedy." - Collider</li>
                </ul>

               
                <div class="mt-4">
                    <a href="home.php" class="btn btn-secondary">Back to Movie List</a>
                </div>
            </div>
        </div>
    </div>
<?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

        
        <form action="/~2375304/assignment/public/news/success" method="POST">
        <?= csrf_field() ?>

            <div class="mb-3">
                <label for="movieName" class="form-label">Movie Name</label>
                <input type="text" class="form-control" id="movieName" value="<?= set_value('title') ?>" required>
            </div>

            <div class="mb-3">
                <label for="releaseYear" class="form-label">Year of Release</label>
                <input type="date" name="body" class="form-control" id="releaseYear" value="<?= set_value('body')?>" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <select class="form-select" id="rating">
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

    </div>

    
   
 
    <script>
        
        document.getElementById("releaseYear").max = new Date().getFullYear();
    </script>

</body>
</html>

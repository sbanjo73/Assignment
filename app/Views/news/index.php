<h2><?= esc($title) ?></h2>

<p id="ajaxArticle"></p>




<div class="genre-header">
       <h1>Latest Movies</h1>
       <p>These are the latest movies that will keep you wanting more!</p>
</div>

<div class="container my-5">
  <div class="row">

  <?php if ($news_list !== []): ?>

    <?php foreach ($news_list as $news_item): ?>

    <div class="col-sm-12 col-md-4 mb-4">
      <div class="card">
        <img src="<?= esc($news_item['image']) ?>" class="card-img-top" alt="Guardians of the Galaxy Movie Poster">  
        <div class="card-body">
          <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
          <p class="card-text"><?= esc($news_item['body']) ?></p>
          <a href="/~2375304/assignment/public/news/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <?php endforeach ?>

    <?php else: ?>

    <p>No record found</p>

    <?php endif ?>
    
  </div>
</div>















<script>
	function getData(slug) {
		
		 Fetch data
		 fetch('https://mi-linux.wlv.ac.uk/~in9352/ci4/public/ajax/get/' + slug)
			
		     Convert response string to json object
		    .then(response => response.json())
		     .then(response => {

			 Copy one element of response to our HTML paragraph
			document.getElementById("ajaxArticle").innerHTML = response.title + ": " + response.body;
		  })
		  .catch(err => {
			
			 Display errors in console
			console.log(err);
		});
	}
</script>
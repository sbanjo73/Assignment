<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Ajax extends BaseController
{
	public function get($slug = null)
	{
		$model = model(ReviewModel::class);
		$data = $model->getNews($slug);

		print(json_encode($data));
	}
	
}
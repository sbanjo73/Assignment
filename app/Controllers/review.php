<?php
namespace App\Controllers;
use App\Models\CustomerReviewModel;

class ReviewController extends BaseController
{


    public function submitReview()
    {


        return view('templates/header', ['title' => 'Create a news item'])
            . view('pages/create')
            . view('templates/footer');
    }
    
    public function create()
    {
        
        
            $reviewModel = new ReviewModel();
    
            
            $name = $this->request->getPost('movie name');
            $yearofrelease = $this->request->getPost('year of release');
            $rating = $this->request->getPost('rating');
    
            
            if (empty($name) || empty($yearofrelease)) || empty($rating) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'All fields are required']);
            }
    
            
            $data = [
                'name' => $name,
                'year of release' => $yearofrelease
                'rating' => $rating
            ];
    
            if ($reviewModel->insert($data)) {
                return redirect()->to('/reviews.php')->with('success', '🎉 Review added successfully!');
            } else {
                
                return redirect()->to('/reviews.php')->with('error', '❗️ Failed to add review. Try again!');
            }

        }
    

        
            // Get All Reviews - AJAX
    public function getReviews()
        {
            $reviewModel = new ReviewModel();
                
            // Get all reviews ordered by created_at DESC
            $reviews = $reviewModel->orderBy('created_at', 'DESC')->findAll();
        
            // Return JSON response
            return $this->response->setJSON($reviews);
        }
        
          
    


}


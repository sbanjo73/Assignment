<?php
namespace App\Controllers;
use App\Models\ReviewModel;

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
        
        
        helper('form');

            $reviewModel = new ReviewModel();
    
            
            $data = $this->request->getPost(['movieName', 'releaseYear','rating']);

            $name = $this->request->getPost('movieName');
            $yearofrelease = $this->request->getPost('releaseYear');
            $rating = $this->request->getPost('rating');
    
            
            if (empty($name) || empty($yearofrelease) || empty($rating)) {
                return $this->response->setJSON(['status' => 'error', 'message' => $data]);
            }
    
            
            $data = [
                'movieName' => $name,
                'yearOfRelease' => $yearofrelease,
                'rating' => $rating
            ];
    
            if ($reviewModel->insert($data)) {
                return redirect()->to('/news/new')->with('success', '🎉 Review added successfully!');
            } else {
                
                return redirect()->to('/news/new')->with('error', '❗️ Failed to add review. Try again!');
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


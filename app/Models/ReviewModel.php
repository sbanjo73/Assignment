<?php
//include 'config/db.php';

//class Review {
   // public static function getAll() {
        //global $conn;
       // $query = "SELECT * FROM reviews";
       // $result = $conn->query($query);
       // return $result->fetch_all(MYSQLI_ASSOC);
   // }

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'user_review';
    protected $primaryKey = 'id';
    protected $allowedFields = ['movieName', 'yearOfRelease', 'rating'];
       /**
     * @param false|string $slug
     *
     * @return array|null
     */
    public function getReviews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['movieName' => $slug])->first();
    }

    public function addReviews($data)
    {
        return $this->insert($data);
    }
}


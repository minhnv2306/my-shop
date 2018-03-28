<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    /**
     * Get base of list review
     * @param array $param
     * @return $this
     */
    public static function getBaseList($param = array())
    {
        $query = self::select('*')
            ->orderBy('id', 'desc');
        if (isset($param['approved'])) {
            $query = $query->where('approved', $param['approved']);
        }
        return $query;
    }
    public static function getReviews($product_id, $email = null, $approved = 0)
    {
        if (empty($author)) {
            return self::getBaseList()
                ->where([
                    'product_id' => $product_id,
                    'approved' => $approved
                ])
                ->get();
        } else {
            return self::getBaseList()
                ->where([
                    'product_id' => $product_id,
                    'approved' => $approved,
                    'author' => $email
                ])
                ->get();
        }

    }
}

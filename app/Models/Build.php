<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Build extends Model
{
    /**
    * Get the build's products
    *
    * @return Product[]
    */
    public function products() {
      return collect([
        Models\Product::where('id', $this->tow_id)->first(),
        Models\Product::where('id', $this->cpu_id)->first(),
        Models\Product::where('id', $this->gpu_id)->first(),
        Models\Product::where('id', $this->psu_id)->first(),
        Models\Product::where('id', $this->hdd_id)->first(),
        Models\Product::where('id', $this->ssd_id)->first(),
        Models\Product::where('id', $this->ram_id)->first()
      ]);
    }

    /**
    * Get the build's order
    *
    * @return Order;
    */
    public function order() {
        return $this->belongsTo(Models\Order::class);
    }
}

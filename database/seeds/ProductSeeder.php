<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(array(
           array('id'=>1,'stock_id'=>1,'tow_id'=>1,'name'=>'Tower 1',
           'description'=>'The medium option is the Corsair Obsidian mid-tower case. Includes compatible motherboard for your processor.',
           'price'=>23.32, 'salePrice'=>124.32, 'type','ads',timestamps), // url = https://images10.newegg.com/NeweggImage/ProductImageCompressAll1280/11-139-060-01.jpg?w=660&h=500&ex=2
           array('id'=>2,'stock_id'=>2,'tow_id'=>2,'name'=>'Tower 2',
           'description'=>'The large option is the Rosewill Thor V2 full tower case. Includes compatible motherboard for your processor.',
           'price'=>345.32, 'salePrice'=>375.32, 'type','ads',timestamps), // url = https://images10.newegg.com/NeweggImage/ProductImageCompressAll1280/11-147-053-23.jpg?w=660&h=500
           array('id'=>3,'stock_id'=>3,'tow_id'=>3,'name'=>'Tower 3',
           'description'=>'The small option is the Fractal Design Nano S mini-itx case. Includes compatible motherboard for your processor.',
           'price'=>436.32, 'salePrice'=>53457.32, 'type','ads',timestamps), // url = https://images10.newegg.com/NeweggImage/ProductImageCompressAll1280/11-352-062-10.jpg?w=660&h=500&ex=2
           array('id'=>4,'stock_id'=>4,'cpu_id'=>1,'name'=>'CPU 1',
           'description'=>'The high end Intel Xeon E5 series processor, great for graphic design/video editing and rendering models using CAD.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/productimage/19-117-639-02.jpg?ex=2
           array('id'=>5,'stock_id'=>5,'cpu_id'=>2,'name'=>'CPU 2',
           'description'=>'The AMD RYZEN 7 series processor, great for gaming, great for overall use including editing and school and work.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://www.bhphotovideo.com/images/images1000x1000/amd_yd180xbcaewof_ryzen_7_1800x_am4_1322540.jpg
           array('id'=>6,'stock_id'=>6,'cpu_id'=>3,'name'=>'CPU 3',
           'description'=>'The Intel Core i3 series processor, affordable, good for school/work everday use.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/NeweggImage/productimage/2MN-0004-00002-01.jpg?ex=2
           array('id'=>7,'stock_id'=>7,'gpu_id'=>1,'name'=>'GPU 1',
           'description'=>'The GeForce GTX Titan X graphics card is great for graphic design/video editing and rendering models using CAD.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = http://www.evga.com/products/images/gallery/12G-P4-2992-KR_XL_1.jpg
           array('id'=>8,'stock_id'=>8,'gpu_id'=>2,'name'=>'GPU 2',
           'description'=>'The GeForce GTX 1080Ti great for gaming, great for overall use including editing and school and work.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://image.macovi.de/images/product_images/1280/1159483_9__69593-9.jpg
           array('id'=>9,'stock_id'=>9,'gpu_id'=>3,'name'=>'GPU 3',
           'description'=>'The GeForce GT 730 great for overall use, school/office work.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), //url = https://images10.newegg.com/ProductImageCompressAll1280/14-487-051-02.jpg?w=660&h=500&ex=2
           array('id'=>10,'stock_id'=>10,'psu_id'=>1,'name'=>'PSU 1',
           'description'=>'The Corsair AXi Series is their flagship line of power supplies, designed for use in ultra high performance PCs.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = http://www.corsair.com/~/media/corsair/product%20photos/psu/ax-series/ax1200i/large/detail_axi_psu_cutout_a_closed.png
           array('id'=>11,'stock_id'=>11,'psu_id'=>2,'name'=>'PSU 2',
           'description'=>'The Corsair HX and HXi Series power supply units are designed for gaming PCs.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = http://www.corsair.com/~/media/corsair/product%20photos/psu/hxi-series/hx850i/large/hx850i_three_quarter_ac_side.png
           array('id'=>12,'stock_id'=>12,'psu_id'=>3,'name'=>'PSU 3',
           'description'=>'The Corsiar CX Series PC power supplies are an excellent choice for basic system builds and desktop PC computer ',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = http://www.corsair.com/~/media/corsair/product-photo-root/c/cx750_sideview_a.png
           array('id'=>13,'stock_id'=>13,'hdd_id'=>1,'name'=>'HDD 1',
           'description'=>'The Western Digital 5TB black HDD designed for creative professionals, gamers and system builders.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/ProductImageCompressAll1280/22-236-971-V01.jpg?w=660&h=500&ex=2
           array('id'=>14,'stock_id'=>14,'hdd_id'=>2,'name'=>'HDD 2',
           'description'=>'The Western Digital 3TB Red designed for expanding storage options and increased HDD reliability.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // ural = https://images10.newegg.com/ProductImageCompressAll1280/22-236-344-V01.jpg?w=660&h=500&ex=2
           array('id'=>15,'stock_id'=>15,'hdd_id'=>3,'name'=>'HDD 3',
           'description'=>'The Western Digital 1TB VelociRaptor is designed for speed and speed only. Fast access for games and when video editing.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/productimage/22-236-243-06.jpg?ex=2
           array('id'=>16,'stock_id'=>16,'ssd_id'=>1,'name'=>'SSD 1',
           'description'=>'The Intel SSD 750 Series targeted at PC Enthusiasts and Workstation users. PCIe represents the future of the computing storage.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/productimage/20-167-359-02.jpg?ex=2
           array('id'=>17,'stock_id'=>17,'ssd_id'=>2,'name'=>'SSD 2',
           'description'=>'The Samsung 850 EVO offers fast speeds and reliablitly in a full range of capacities up to 4TB.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/productimage/20-147-372-07.jpg?ex=2
           array('id'=>18,'stock_id'=>18,'ssd_id'=>3,'name'=>'SSD 3',
           'description'=>'The Samsung 850 PRO offers the fastest speeds and reliablitly reaching almost peaks of SATA speeds',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/ProductImageCompressAll1280/20-147-361_R01.jpg?w=660&h=500&ex=2
           array('id'=>19,'stock_id'=>19,'ram_id'=>1,'name'=>'RAM 1',
           'description'=>'32GB Corsair VENGEANCE RGB DDR4 specially screened designed for overclocking and reliability good for editind videos and design.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/NeweggImage/ProductImageCompressAll1280/20-236-166-04.jpg?w=660&h=500&ex=2
           array('id'=>20,'stock_id'=>20,'ram_id'=>2,'name'=>'RAM 2',
           'description'=>'16GB GB Corsair VENGEANCE RGB DDR4 good for gaming and school/office work.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/NeweggImage/ProductImageCompressAll1280/20-236-165-V03[1].jpg?w=660&h=500&ex=2
           array('id'=>21,'stock_id'=>21,'ram_id'=>3,'name'=>'RAM 3',
           'description'=>'The affordable Team Elite 4GB DDR4 good for school/office work.',
           'price'=>346.32, 'salePrice'=>35756.32, 'type','ads',timestamps), // url = https://images10.newegg.com/ProductImageCompressAll1280/20-313-515-S01.jpg?w=660&h=500&ex=2
         ));
    }
}

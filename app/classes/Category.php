<?php


namespace App\classes;


class Category
{
    public $categories=[];
    public function __construct()
    {
        $this->categories=[
            0=>[
                'id'=>1,
                'name'=>'সর্বশেষ'
            ],
            1=>[
                'id'=>2,
                'name'=>'বিশেষ সংবাদ'
            ],
            2=>[
                'id'=>3,
                'name'=>'রাজনীতি'
            ],
            3=>[
                'id'=>4,
                'name'=>'অপরাধ'
            ],
            4=>[
                'id'=>5,
                'name'=>'বাংলাদেশ'
            ],
            5=>[
                'id'=>6,
                'name'=>'বিশ্ব'
            ],
            6=>[
                'id'=>7,
                'name'=>'বাণিজ্য'
            ],
            7=>[
                'id'=>8,
                'name'=>'মতামত'
            ],
            8=>[
                'id'=>9,
                'name'=>'খেলা'
            ],
        ];
    }
    public function getAllCategory()
    {
        return $this->categories;
    }
}
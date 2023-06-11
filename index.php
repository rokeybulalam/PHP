<?php

$array = [
   'name' => 'Rokeybul',
   'age' => '23',
   'Address' => [
      'village' => 'Kazlapara',
      'post' => 'sukhanpukur',
      'upazilla' => 'Gabtali',
      'district' => 'Bogura'
   ],
    'mobile_number' => [
      'country_prefix' => '+088',
      'national_number' => '1980164177'
    ]
   ];

   $message  = 'Github connected';
   
   echo "my name is {$array['name']} {$array['age']}";
   echo "i live at {$array['Address']['village']},{$array['Address']['post']}, {$array['Address']['upazilla']},{$array['Address']['district']}";
   echo "my phone nmbr {$array['mobile_number']['country_prefix']}, {$array['mobile_number']['national_number']}";


   echo $message;







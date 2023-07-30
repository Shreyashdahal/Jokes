<?php
 
 //tasks
 // 1. make a list of jokes
 $jokes=[
"I was wondering why the frisbee was getting bigger, than it hit me",
" What’s the difference between an African elephant and an Indian elephant? About 5000 miles.",
"This morning i was wondering where the sun was,but then it dawned on me",
"I finally bought limited edition Thesarus that I have always wanted.When I opened it,all the pages were blank,no words to describe"
 ];
 //2.randomly select one joke from the list
 $index = array_rand($jokes);
 $joke =$jokes[$index];

 //3.convert the joke into json format
 $response = [ 
    "status" => 200,
    "joke" => $joke,
    "id" => $index
 ];
 $jsonResponse = json_encode($response);

 
 //4.Return the output json

 header("Access-control-allow-origin: *");
 echo $jsonResponse;

 // 
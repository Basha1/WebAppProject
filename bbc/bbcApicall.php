<?php
include ('bbcKeys.php');


$string_reddit = file_get_contents("https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=$apiKey");
$json = json_decode($string_reddit, true);  
$jsonLoop = $json['articles'];
foreach ($jsonLoop as $loop){
    $title = $loop['title'];
    $discription = $loop['description'];
    $url = $loop['url'];
    $urlToImage = $loop['urlToImage'];
    $publishDate =$loop['publishedAt'];
    $author = $loop['author'];

   

 
}

/* 
The call to get the image link we are using in the reddit API call would not work in this api call: 
<-----------$div = '<img class="img-fluid imgLink" src="'.$url.'"  alt="">';------------------->



we think bbc are blocking image calls to their website. So we had to go off and research a way around this problem. 
We found a solution to our problem at this link http://stackoverflow.com/questions/724391/saving-image-from-php-url
source: Zuul

we are downloading the image and displaying it from our server insted of using the api to display it
--------------------------------------REMINDER------------------------------------------------------
set bbc/imgs/bbcImg.jpg permishions to 777
*/ 


?>


<?php
$div;
if (isset($_POST['submit']))
  {
  // Execute this code if the submit button is pressed.
  $formvalue = $_POST['input_value'];
   
  }
if($_POST == true) {
$string_reddit = file_get_contents("https://www.reddit.com/r/$formvalue/.json?Count=1");
$json = json_decode($string_reddit, true);  
$jsonLoop = $json['data']['children'];
foreach ($jsonLoop as $loop){
    $title = $loop['data']['title'];
    $url = $loop['data']['url'];
		$num_comments = $loop['data']['num_comments'];
		$ups = $loop['data']['ups'];
		$author = $loop['data']['author'];
		$comment_link = $loop['data']['permalink'];
		$thumbnail = $loop['data']['thumbnail'];
	
	
}
	
	

$headers = get_headers( $url );

$image_exist = implode(',',$headers);
if ($div = strpos($image_exist, 'image') !== false) 
{
	
   
$div = '<img src="'.$url.'" class="img-fluid imgLink" alt="">';

	 
  
}
// will check if the the url is a vimeo link or a youtube link
elseif ($div = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    $video_id = $match[1];
// I used this thread as help  http://stackoverflow.com/questions/2936467/parse-youtube-video-id-using-preg-match for help "' . ${myOb->content} . '"
	$videoScr = "http://www.youtube.com/embed/$video_id";

$div = '<html><iframe class ="youtubeEmbed"  frameborder="0" allowfullscreen src='.$videoScr.'></iframe></'; 
    } 
else 

$div = '<img id="imgLink" src="'.$url.'"  alt="">';
$divEror = '<a class ="failedDisplay"  href='.$url.'>If you are having trouble seeing content please click this link to view the source</a>';
  //Opening it again to continue the else statement 
		
    }//main if to check if user has entered input 
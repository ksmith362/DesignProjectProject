
<!DOCTYPE html>
<html lang="en">
<style>
.footer {
  background-color: #FF1493;
  padding: 10px;
  width: 2000px;
}
</style>

<div class="Footer">
  <a href="Welcome.php"><button> Home </button> </a>
</div>
</style>
<div class="topnav">
  <a href="CollegeHashtag.php">#College</a>
  <a href="MileyCyrusHashtag.php">#MileyCyrus</a>
  <a href="MinecraftHashtag.php">#Minecraft</a>
  
</div>




<?php
$hashtag = "MileyCyrus";
$token = "AAAAAAAAAAAAAAAAAAAAAL0vYgEAAAAAjdROO6n%2BMcoC6tmJqG0bPWO1tfE%3D02UvOP30XBBpnoaRCSInuPjzgvyfV9mfx6GdgcwJrfiahNXoRH";

$ch = curl_init();
$url = "https://api.twitter.com/2/tweets/search/recent?query=" . urlencode($hashtag) . "&tweet.fields=created_at&user.fields=" . urlencode("created_at,username,profile_image_url");
$url .= "&expansions=" . urlencode("author_id");



 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $token"
));


echo "<pre>";
$output = curl_exec($ch);
curl_close($ch);     

$data = json_decode($output);

$tweets = $data->data;
$user_data = $data->includes->users;

			/*
			[id] => 1240385805295681536
            [name] => Radio2 whats-on bot
            [created_at] => 2020-03-18T21:13:32.000Z
            [username] => JBsWhatsOn2
            [profile_image_url] => https://pbs.twimg.com/profile_images/1240637759611691008/ZhoCf_0O_normal.jpg
*/

//loop over the tweets


$users = []; 
foreach ($user_data as $d) {
	$users[$d->id] = $d;
}



foreach ($tweets as $tweet) {

/*
           [created_at] => 2022-02-14T18:36:39.000Z
            [text] => #NowPlaying Thot Shit (Clean) by Megan Thee Stallion https://t.co/eg6acqtluR
            [id] => 1493293122691940358
            [author_id] => 23775205
*/
    echo "<img src='" . $users[$tweet->author_id]->profile_image_url . "' height=50>";
    echo $users[$tweet->author_id]->name . " said ";
	echo $tweet->text . "<br /><br />";



}


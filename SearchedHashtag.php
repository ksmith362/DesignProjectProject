<?php


session_start();



    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

        header('Location: CantDoThat.php');

    }else{

       
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.typekit.net/osn2stl.css">

<style>


meta name="viewport" content="width=device-width, initial-scale=1"
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #e7ddf8;

}

.footer {
  background-color: #cfbaf0;
  padding: 10px;
  width: 100%;

}

.topnav {
  overflow: hidden;
  background-color: #cfbaf0;
  font-family: input-serif,serif;
  font-weight: 400;
  font-style: normal;
        
}

.topnav a {
  float: left;
  display: block;
  color: #534a60;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #faf8fe;
  color: #534a60;
}

.topnav a.active {
  background-color: #BAA5FF;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}


.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  font-family: input-serif,serif;
  font-weight: 400;
  font-style: normal;

}

.topnav .search-container button:hover {
  background: #BAA5FF;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.content {
  background-color: #e7ddf8;
  height: 680px; 
  width: 100%;
  font-family: input-serif,serif;
  font-weight: 400;
  font-style: normal;      
}

</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="Homepage2.php">Home</a>
  <a href="LogoutProcess.php">Logout</a>
  <div class="search-container">
    <form action="SearchedHashtag.php" method="POST">
      <input type="text" placeholder="Search.." name="searchedHashtag">
      <button type="value">Submit</button>
    </form>
  </div>
</div>
<div class = "content"> 
<h2> Showing the 15 most recent tweets with the hashtag: <?php echo $_POST["searchedHashtag"];?></h2> 

<?php
$searchedHashtag = $_POST["searchedHashtag"];
$token = "AAAAAAAAAAAAAAAAAAAAAL0vYgEAAAAAjdROO6n%2BMcoC6tmJqG0bPWO1tfE%3D02UvOP30XBBpnoaRCSInuPjzgvyfV9mfx6GdgcwJrfiahNXoRH";

$ch = curl_init();
$url = "https://api.twitter.com/2/tweets/search/recent?query=" . urlencode($searchedHashtag) . "&tweet.fields=created_at&user.fields=" . urlencode("created_at,username,profile_image_url");
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
    echo $users[$tweet->author_id]->name . "'said'";
	echo $tweet->text . "<br /><br />";
} ?>
<div class="footer">
  <marquee behavior="scroll" direction="right" scrollamount="10"> HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter</marquee>

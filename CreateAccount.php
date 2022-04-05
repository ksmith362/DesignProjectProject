<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://use.typekit.net/osn2stl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {box-sizing: border-box;}
    body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color:#e7ddf8;
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
    .topnav input[type=text] {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: none;
    }
    }
    }
    @media screen and (max-width: 600px) {
    .topnav .search-container {
    float: none;
    }
    
    .topnav input[type=text] {
    border: 1px solid #ccc;
    }
    }
    .content {
    background-color: #e7ddf8;
    height: 600px;
    width: 100%;
    }
    .content button{
    background-color: #FFFFFF;
    font-family: input-serif,serif;
    font-weight: 400;
    font-style: normal;
    }    
    </style>
  </head>
  <body>
    <div class="content">
      <div class="topnav">
        <a href="Login.php">Login</a>
      </div>
      <div class="content">
        <h2>Welcome to HashtagTwitter!</h2>
        <p>You can search any hashtag and find the 15 most recent tweets in the hashtag! Just need to make an account first. So...make an account. Do it. Right now.</p>
        <div class="content">
          <form action="RegisterProcess.php" method="POST">
            Name: <input type="text" name="name" ><br ><br />
            Username: <input  type="text" name="username" ><br ><br />
            Password: <input type= "text" name="password" ><br ><br ><br />
            <button type="value">Create Account</button>
          </form>
          <img src="TwitterLogo.png" alt="Walmart Bird" width="300" height="auto">
        </div>
        <div class="footer">
          <marquee behavior="scroll" direction="right" scrollamount="10"> HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter HashtagTwitter</marquee>
          </marquee>
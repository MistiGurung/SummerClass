<!DOCTYPE html>
<html>
<head>
<title>{{ $title }}</title>
<style>
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
}

.navbar {
    background-color: #2c3e50;
    overflow: hidden;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.navbar li {
    margin-right: 20px;
}

.navbar a {
    color: #ecf0f1;
    font-size: 16px;
    padding: 8px 12px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.navbar a:hover {
    background-color: #34495e;
}

.news-section {
    margin-top: 20px;
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.news-section img {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.news-section h2 {
    margin-bottom: 10px;
}
</style>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('news') }}">News</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
        </ul>
    </div>

<div class="news-section">
        <h2>iOS 26 can freeze your FaceTime video if it detects nudity</h2>
        <p>The developer beta for iOS 26 has been out for a few weeks, and as always,tech sleuths are uncovering features 
            and details that weren't explained during WWDC. Among the latest discoveries stirring up conversation online is 
            a safety and privacy feature for FaceTime that blurs your feed when it detects you in a state of undress. Should 
            FaceTime detect nudity, it will display a message reading "Audio and video are paused because you may be showing 
            something sensitive. If you feel uncomfortable, you should end the call."</P>
        <img src="{{ asset('images/' .$image)}}" alt="Image">       
</div>

</body>
</html>



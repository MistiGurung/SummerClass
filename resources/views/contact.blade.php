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

    <div>
        <h1>Contact Us</h1>
        <p>If you have any questions, feedback, or want to get in touch, please use the information below or send us a message using the form.</p>

        <h3>Our Contact Information</h3>
        <ul >
            <li><strong>Email:</strong> info@example.com</li>
            <li><strong>Phone:</strong> +1 (555) 123-4567</li>
            <li><strong>Address:</strong> 123 Main Street, City, Country</li>
        </ul>
    </div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles go here */
        /* Reset some default margin and padding */
        body, h1, h2, ul, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            height: 5vh; /* Set header height to 5% of viewport height */
        }

        .header-name {
            text-align: left;
        }

        .header-links {
            text-align: right;
        }

        .header-links a {
            text-decoration: none;
            background-color: #0074e4; /* Set the background color for the links */
            color: #fff; /* Set the text color for the links */
            padding: 10px 20px;
            border: 1px solid #0074e4; /* Add a border */
            border-radius: 5px; /* Add rounded corners */
            margin: 0 5px; /* Add spacing between the links */
            transition: background-color 0.3s; /* Add a transition effect */
        }

        .header-links a:hover {
            background-color: #005bb9; /* Change the background color on hover */
        }

        .container {
            display: flex;
        }

        .sidebar {
            background-color: #555; /* Set sidebar background color */
            color: #fff;
            width: 20%;
            padding: 20px;
            height: 75vh; /* Set sidebar height to 75% of viewport height */
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .content {
            background-color: #f0f0f0; /* Set content background color */
            padding: 20px;
            height: 75vh; /* Set content height to 75% of viewport height */
        }

        .article {
            background-color: #fff; /* Set article background color */
            padding: 10px;
            border: 1px solid #ddd;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            height: 5vh; /* Set footer height to 5% of viewport height */
        }

        .add {
            margin: 200px ;
            padding: 20px;
            max-width: 400px;
            background-color: #444;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <div class="header-name">
            <h1>Header - @yield('header')</h1>
        </div>
        <!-- Add navigation links to the right -->
        <div class="header-links">
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/post">Post</a>
            </nav>
        </div>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </aside>
        
        <main class="content">
            @hasSection('name')
            @yield('name')
                @else
              <div class="add">  @include('layouts.no')  </div>
            @endif
        </main>
    </div>
    
    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>

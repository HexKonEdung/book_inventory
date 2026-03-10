<html>
<head>
<title>X-Card System</title>

<style>
nav {
    background: #333;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

nav a {
    color: white;
    text-decoration: none;
    margin-right: 15px;
    font-weight: bold;
}

.container {
    max-width: 1000px;
    margin: auto;
}

.card {
    border:1px solid #ddd;
    padding:15px;
    margin-bottom:10px;
    border-radius:5px;
}
</style>

</head>

<body>

<div class="container">

<nav>
<a href="{{ route('items.index') }}">🗂️ All Cards</a>
<a href="{{ route('items.create') }}">➕ Create New</a>
</nav>

@yield('content')

</div>

</body>
</html>
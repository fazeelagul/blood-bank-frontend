<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body { 
    margin: 0; 
    font-family: Arial, sans-serif; 
} 
header { 
    display: flex; 
    align-items: center; 
    background-color: #d9534f; 
    height: 100px; 
    padding: 0 20px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
} 
#logo { 
    height: 100%; 
    margin-right: 10px; 
} 
img{
    font-size: 90px;
}
header h1 { 
    margin: 0; 
    margin-right: auto; 
    font-size: 34px; 
    color: #800000; 
} 
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex; 
    margin-right: 20px;
}

nav ul li {
    position: relative;
    margin-right: 20px;
    margin-left: 30px; 
}

nav ul li a {
    text-decoration: none;
    padding: 10px 15px;
    display: block;
    background-color: maroon; 
    color: #fff; 
    font-weight: bold;
    font-size: 20px; 
}
nav ul li a:hover { 
    color: white; 
}

/* Dropdown menu hidden by default */
.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    min-width: 180px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    z-index: 1000;
}

.dropdown-menu li a {
    color: maroon;
    background-color: #fff;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.dropdown-menu li a:hover {
    background-color: #fff;
    color:#800000;
}

/* Show dropdown on hover */
.dropdown:hover .dropdown-menu {
    display: block;
}
main { 
    padding: 30px; 
}
p{
    font-size: 20px;
}
.dashboard {
    display: flex; 
    flex-wrap: wrap; 
    justify-content: space-between; 
} 
.blood-box { 
    width: calc(20% - 14px); 
    height: 200px; 
    background-color: #e4e4e4; 
    margin: 40px 10px; 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    justify-content: center; 
    border-radius: 8px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    text-align: center; 
} 
.blood-box h1 { 
    margin: 0; 
    color: #800000; 
    font-size: 26px;
} 
.blood-box .heading { 
    color: #800000; 
    margin: 1px 0; 
    font-size: 24px;
} 
footer {
    background-color: #d9534f;
    color: #800000;
    text-align: center;
    padding: 0.01%;
    font-size: 18px;
    position: fixed;
    width: 100%;
    bottom: 0;
}
    </style>
</head>
<body>
    <header> 
        <img src="/public/images/blood-logo.png" alt="Life Saver Logo" id="logo"> 
        <h1>Life Saver</h1>
        <nav> 
            <ul> 
               <li class="dropdown">
    <a href="#">Donors</a>
    <ul class="dropdown-menu">
        <li><a href="/admin/donors">All Donors</a></li>
        <li><a href="/admin/donations">Donor Requests</a></li>
        <li><a href="/admin/successful-donations">Successful Donations</a></li>
        <li><a href="/admin/unsuccessful-donations">Unsuccessful Donations</a></li>
    </ul>
</li>

<li class="dropdown">
    <a href="#">Patients</a>
    <ul class="dropdown-menu">
        <li><a href="/admin/patients">All Patients</a></li>
        <li><a href="/admin/patient-requests">Patient Requests</a></li>
    </ul>
              </li>
                <li><a href="/">Logout</a></li> 
            </ul> 
        </nav> 
    </header> 
    <main> 
      
<div class="dashboard">
    @foreach($bloodGroups as $group)
        @php
            $stock = $stocks[$group] ?? null;
            $units = $stock ? $stock->available_units : 0;
        @endphp

        <div class="blood-box">
            <h1>{{ $group }}</h1>
            <h2 class="heading">Blood Available</h2>
            <p>Total: {{ $units }} units</p>
        </div>
    @endforeach
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif


    </main>
    <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
    </footer>
</body>
</html>

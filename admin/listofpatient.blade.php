<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function openEditPatient() {
            window.location.href = "/editpatient"; 
        }
    </script>
    <style>
body { 
    margin: 0; 
    font-family: Arial, sans-serif;
    padding: 0;
    box-sizing: border-box;
} 
header { 
    display: flex; 
    align-items: center; 
    background-color: #d9534f; 
    height: 90px; 
    padding: 0 20px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
} 
#logo { 
    height: 100%; 
    margin-right: 10px; 
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
.heading { 
    text-align: center; 
    text-decoration: underline; 
    font-size: 26px; 
    color: #800000; 
} 
main { 
    width: 70%; 
    margin: 0 auto; 
} 
.patient-table { 
    width: 100%; 
    border-collapse: collapse; 
    margin: 20px 0; 
} 
.patient-table th, .patient-table td { 
    border: 1px solid #ddd; 
    padding: 8px; 
    text-align: center; 
} 
.patient-table th { 
    background-color: #f2f2f2; 
    color: #800000; 
} .delete-btn { 
    background-color: #800000; 
    color: white; 
    border: none; 
    padding: 5px 10px; 
    cursor: pointer; 
    border-radius: 3px; 
} 
.edit-btn:hover, .delete-btn:hover { 
    opacity: 0.8; 
}
footer {
    background-color: #d9534f;
    color: #800000;
    text-align: center;
    padding: 0.1%;
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
                <li><a href="/admin/dashboard">Dashboard</a></li>
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
    <br>
        <h1 class="heading">List of all Patients</h1>  
    <main> 
        <table class="patient-table"> 
            <thead> 
                <tr> 
                    <th>S.No</th> 
                    <th>Patient ID</th> 
                    <th>Patient Name</th>
                    <th>Patient Email</th> 
                    <th>Mobile No.</th> 
                </tr> 
            </thead> 
            <tbody>
    @foreach($patients as $index => $patient)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $patient->id }}</td>
        <td>{{ $patient->username }}</td>
        <td>{{ $patient->email }}</td>
        <td>{{ $patient->mobile_no }}</td>
    </tr>
    @endforeach
        </tbody>
            </table> 
        </main>
        <footer>
            <p>&copy;2024 Life Saver. All rights reserved.</p>
        </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
#manage-heading { 
    margin: 2rem 0 1rem; 
    text-align: center; 
    text-decoration: underline;
    color: #800000;  
} 
#donation-table { 
    width: 80%; 
    border-collapse: collapse; 
    margin-bottom: 20rem; 
    margin-left: auto;
    margin-right: auto;
} 
#donation-table th, #donation-table td { 
    border: 1px solid #ccc; 
    padding: 0.5rem; 
    text-align: center; 
} 
#donation-table th { 
    background-color: #f2f2f2;
    color: #800000;  
}
.accept-btn { 
    background-color: #4CAF50; 
    color: white; 
    border: none; 
    padding: 5px 10px; 
    cursor: pointer; 
    display: inline;
    border-radius: 3px; 
} 
.reject-btn { 
    background-color: #800000; 
    color: white; 
    border: none; 
    padding: 5px 10px; 
    cursor: pointer; 
    display: inline;
    border-radius: 3px; 
} 
.accept-btn:hover, .reject-btn:hover { 
    opacity: 0.8; 
}

.alert-danger {
    background-color: #f8d7da;
    color: #842029;
    border: 1px solid #f5c2c7;
    padding: 12px 20px;
    margin: 15px 0;
    border-radius: 6px;
    font-weight: 500;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
    <main> 
    <h2 id="manage-heading">Patient Blood Requests</h2> 

    <table id="donation-table"> 
        <thead>
            <tr> 
                <th>S.No</th> 
                <th>Request ID</th> 
                <th>Patient Name</th> 
                <th>Mobile No</th> 
                <th>Blood Group</th> 
                <th>Units (in ml)</th> 
                <th>Reason</th> 
                <th>Status</th> 
                <th>Action</th> 
            </tr> 
        </thead>

        <tbody> 
           @foreach($requests as $index => $request)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $request->id }}</td>
        <td>{{ $request->patient->username ?? 'N/A' }}</td>
        <td>{{ $request->patient->mobile_no ?? 'N/A' }}</td>
        <td>{{ $request->blood_group }}</td>
        <td>{{ $request->no_units }}</td>
        <td>{{ $request->reason }}</td>
        <td>{{ ucfirst($request->status) }}</td>
        <td>
    @if($request->status === 'pending')
    <!-- Accept Button -->
    
        <form method="POST" action="{{ route('admin.request.accept', $request->id) }}"  style="display:inline;">
            @csrf
            <input type="hidden" name="status" value="accepted">
            <button type="submit" class="accept-btn">Accept</button>
        </form>
        <form method="POST" action="{{ route('patient.updateStatus', $request->id) }}"  style="display:inline;">
            @csrf
            <input type="hidden" name="status" value="rejected">
            <button type="submit" class="reject-btn">Reject</button>
</form>

@else
    <span class="text-muted">Action Taken</span>
@endif

</td>
                </tr> 
            @endforeach
        </tbody> 
    </table> 
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif



</main>


    <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
    </footer> 
</body>
</html>
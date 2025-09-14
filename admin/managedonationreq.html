<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function openScreeningPage() {
            window.location.href = "/screeningA"; 
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
    width: 100%;
    position: fixed;
    top: 0;
}
header h1 {
    display: flex;
    font-size: 34px; 
    color: #800000; 
    justify-content: center;
    align-items: center;
    padding: 30px 0px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    margin-right: 55%;
}
#logo { 
    height: 100%; 
    margin-right: 10px; 
} 
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex; 
    margin-right: 110px;
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
    margin-top: 70px;
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
    border-radius: 3px; 
} 
.reject-btn{ 
    background-color: #800000; 
    color: white; 
    border: none; 
    padding: 5px 10px; 
    cursor: pointer; 
    border-radius: 3px; 
} 
.accept-btn:hover, .reject-btn:hover { 
    opacity: 0.8; 
}
.screen-btn{
    border: none; 
    color: #211a1aff;
    padding: 7px 10px; 
    cursor: pointer; 
    border-radius: 5px; 
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
    <h2 id="manage-heading">Manage Donation Requests</h2> 

    {{-- SweetAlert Import --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- SweetAlert Messages --}}
    @if(session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "Okay"
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "{{ session('error') }}",
                icon: "error",
                confirmButtonText: "Okay"
            });
        </script>
    @endif

    <table id="donation-table"> 
        <thead>
            <tr> 
                <th>S.No</th> 
                <th>Donation ID</th> 
                <th>Donor Name</th> 
                <th>Mobile No</th> 
                <th>Blood Group</th> 
                <th>Units (in ml)</th> 
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Status</th> 
                <th>Screening Report</th> 
                <th>Action</th> 
            </tr> 
        </thead> 
        <tbody>
            @forelse($donations as $donation)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $donation->id }}</td>
                <td>{{ $donation->donor ? $donation->donor->username : 'N/A' }}</td>
                <td>{{ $donation->donor->mobile_no ?? 'N/A' }}</td>
                <td>{{ $donation->blood_group }}</td>
                <td>{{ $donation->no_units }} ml</td>
                <td>{{ $donation->appointment_date ?? 'N/A' }}</td>
                <td>{{ $donation->appointment_time ?? 'N/A' }}</td>

                {{-- Status --}}
                <td>
                    @if($donation->status === 'pending')
                        <span style="color: orange;">Pending</span>
                    @elseif($donation->status === 'accepted')
                        <span style="color: green;">Accepted</span>
                    @elseif($donation->status === 'rejected')
                        <span style="color: red;">Rejected</span>
                    @endif
                </td>

                {{-- Screening --}}
                <td>
                    @if($donation->status === 'accepted')
                     <a href="{{ route('admin.screening.step1', $donation->id) }}" class="btn btn-primary">Screening</a>
                    @else
                        <span>-</span>
                    @endif
                </td>

                {{-- Action --}}
                <td>
                    @if($donation->status === 'pending')
                        <form method="POST" action="{{ route('donation.updateStatus', $donation->id) }}" style="display:inline;">
                            @csrf
                            <input type="hidden" name="status" value="accepted">
                            <button type="submit" class="accept-btn">Accept</button>
                        </form>

                        <form method="POST" action="{{ route('donation.updateStatus', $donation->id) }}" style="display:inline;">
                            @csrf
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" class="reject-btn">Reject</button>
                        </form>
                    @else
                        <span class="text-muted">Action Taken</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11" style="text-align:center;">No donation requests found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</main>

<script>
    function openScreeningPage(donationId) {
        window.location.href = `/admin/screening-report/${donationId}`;
    }
</script>

<footer>
    <p>&copy; 2024 Life Saver. All rights reserved.</p>
</footer> 
</body>
</html>

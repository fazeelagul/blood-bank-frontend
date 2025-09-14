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
    height: 90px; 
    padding: 0 20px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
} 
#logo { 
    height: 100%; 
    margin-right: 10px; 
    margin-left: 20px;
} 
header h1 { 
    margin: 0; 
    margin-right: auto; 
    font-size: 34px; 
    color: #800000; 
} 
nav ul { 
    display: flex; 
    list-style: none; 
    padding: 0; 
    margin: 0; 
    margin-right: 20px;
} 
nav ul li { 
    margin-left: 50px; 
} 
nav ul li a { 
    text-decoration: none; 
    color: #800000; 
    font-weight: bold;
    font-size: 18px; 
} 
nav ul li a:hover { 
    color: white; 
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
.donor-table { 
    width: 100%; 
    border-collapse: collapse; 
    margin: 20px 0; 
} 
.donor-table th, .donor-table td { 
    border: 1px solid #ddd; 
    padding: 8px; 
    text-align: center; 
} 
.donor-table th { 
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
.reject-btn { 
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
        <img src="public/images/blood-logo.png" alt="Life Saver Logo" id="logo"> 
        <h1>Life Saver</h1> 
        <nav> 
    <ul> 
        <li><a href="/dashD">Dashboard</a></li>
        <li><a href="{{ route('donor.form') }}">Donation</a></li>
        <li><a href="/requestD">View Request</a></li>
        <li><a href="/test">Screening</a></li>
        <li><a href="/">Logout</a></li> 
    </ul>  
</nav>
    </header>
    <br> 
<h1 class="heading">Donation Requests</h1>  
<main> 
    <table class="donor-table"> 
    <thead> 
        <tr> 
            <th>S.No</th> 
            <th>Donation ID</th> 
            <th>Donor Name</th>
            <th>Blood Group</th>
            <th>Units (ml)</th> 
            <th>Screening Report</th> {{-- 👈 new column --}}
            <th>Status</th> 
            <th>Action</th> 
        </tr> 
    </thead> 
    <tbody>
        @foreach($requests as $donation) 
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $donation->id }}</td>
            <td>{{ $donation->donor ? $donation->donor->username : 'N/A' }}</td>
            <td>{{ $donation->blood_group }}</td>
            <td>{{ $donation->no_units }} ml</td>

            {{-- Screening Report column --}}
           
            <td>
    @if($donation->status === 'accepted' && $donation->screeningReport)
        <a href="{{ route('donations.screening.show', $donation->id) }}"
           style="background-color:#007bff; color:white; padding:6px 12px; text-decoration:none; border-radius:4px;">
            Screening Report
        </a>
    @else
        <span style="color:gray;">Pending</span>
    @endif
</td>

            <td>{{ ucfirst($donation->status) }}</td>

            <td>
                @if($donation->status === 'pending')
                    <a href="{{ route('requests.edit', $donation->id) }}"
                       style="background-color:#28a745; color:white; padding:6px 12px; text-decoration:none; border-radius:4px; margin-right:8px;">
                        Edit
                    </a>

                    <form action="{{ route('requests.delete', $donation->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                style="background-color:#dc3545; color:white; padding:6px 12px; border:none; border-radius:4px;">
                            Delete
                        </button>
                    </form>
                @else
                    <span style="color:gray;">Action Taken</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</main>

        <footer>
            <p>&copy; 2024 Life Saver. All rights reserved.</p>
        </footer>
</body>
</html>
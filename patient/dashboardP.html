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
main { 
    padding: 20px; 
}
.dashboard {
    display: flex; 
    flex-wrap: wrap; 
    justify-content: space-between; 
} 
.blood-box { 
    width: calc(25% - 20px); 
    height: 250px; 
    background-color: #e4e4e4; 
    margin: 55px 0; 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    justify-content: center; 
    border-radius: 10px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    text-align: center; 
} 
.blood-box h2 { 
    margin: 0; 
    color: #800000;  
} 
.blood-box .heading { 
    color: #000;
    margin: 5px 0; 
    font-size: 18px;
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
        <li><a href="{{ route('patient.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('patient.bloodreq') }}">Request Blood</a></li>
        <li><a href="{{ route('patient.history') }}">View History</a></li>
        <li><a href="/">Logout</a></li> 
    </ul> 
</nav> 

    </header> 

    <main> 
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="dashboard"> 
            <div class="blood-box"> 
                <h2>Blood Needed</h2> 
                <p class="heading">Total: {{ $stats['total_units'] ?? 0 }} ml</p>
            </div> 
            <div class="blood-box"> 
                <h2>Total Requests</h2> 
                <p class="heading">Total: {{ $stats['total_requests'] ?? 0 }}</p>
            </div>
            <div class="blood-box"> 
                <h2>Pending Requests</h2> 
                <p class="heading">Total: {{ $stats['pending'] ?? 0 }}</p>
            </div>
            <div class="blood-box"> 
                <h2>Accepted</h2> 
                <p class="heading">Total: {{ $stats['accepted'] ?? 0 }}</p>
            </div>
            <div class="blood-box"> 
                <h2>Rejected</h2> 
               <p class="heading">Total: {{ $stats['rejected'] ?? 0 }}</p>
            </div>  
        </div>    
    </main>

    <script>
        const token = localStorage.getItem('token');

        axios.get('/api/patient/profile', {
            headers: {
                Authorization: `Bearer ${token}`
            }
        })
        .then(response => {
            console.log("Authenticated Patient:", response.data);
            // You can now display patient info on your dashboard
        })
        .catch(error => {
            console.error("Access denied:", error.response?.data?.message || error);
        });
    </script>

    <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
    </footer>
</body>
</html>
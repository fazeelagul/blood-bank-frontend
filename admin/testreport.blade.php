<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Result Form</title>
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
    display: flex; 
    list-style: none; 
    padding: 0; 
    margin: 0; 
    margin-right: 20px;
} 
nav ul li { 
    margin-left: 30px; 
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
.container {
    max-width: 300px;
    height: 300px;
    margin: auto;
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    margin-top: 5%;
    font-size: 16px;
}
h2 {
    margin-top: 0px;
    text-align: center;
    color: #800000;
    text-decoration: underline;
    font-weight: bold;
}
.form-group {
    margin-bottom: 0px;
    font-size: larger;
    color:#800000;
}
.form-group label {
    display: block;
    margin-bottom: 16px;
}
.form-group input[type="file"] {
    display: block;
    width: 100%;
}
.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 60%;
}
.btn {
    width: 40%;
    height: 40px;
    background: #800000;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
    border: none;
    cursor: pointer;
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    margin-left: 30%;
    margin-top: 64%;
}
footer {
    background-color: #d9534f;
    color: #800000;
    width: 100%;
    text-align: center;
    padding: 0.1%;
    position: fixed;
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
                <li><a href="/admin/donations">Donors</a></li> 
                <li><a href="/admin/patient-requests">Patients</a></li> 
                <li><a href="/admin/donors">Donations</a></li> 
                <li><a href="/admin/patients">Requests</a></li> 
                <li><a href="/admin/successful-donations">Successful Donations</a></li> 
                <li><a href="/admin/unsuccessful-donations">Unsuccessful Donations</a></li> 
                <li><a href="/">Logout</a></li> 
            </ul>
        </nav> 
    </header>
            <div class="container">
    <h2>Test Report</h2>

    <form action="{{ route('admin.screening.step3.save', $donation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="screening_report" class="form-label">Upload Screening Report (PDF, Image, etc):</label>
            <input type="file" name="screening_report" id="screening_report" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Upload Report</button>
    </form>
    @if($report)
    <div class="mb-3">
        <label>Uploaded Report:</label><br>
        <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank" class="btn btn-outline-primary">
            View Report
        </a>
    </div>
@else
    <p>No report uploaded yet.</p>
@endif

</div>

    <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
    </footer>
</body>
</html>
@extends('layouts.app')

@section('title', 'Donation Screening')

@section('content')
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
.container {
    max-width: 600px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    margin-top: 45%;
    margin-right: 38%;
    border-radius: 10px;
    box-shadow: 20px 50px 60px rgba(0,0,0,0.4);
}
    h1 { text-align: center; color: #800000; }
    .btn-back {
        background: #800000;
        color: #fff;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 15px;
    }
    .input-box { margin-bottom: 15px; }
    label { font-weight: bold; }
    input, textarea, select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        background: #800000;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
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
<body>
 <header> 
        <img src="/public/images/blood-logo.png" alt="Life Saver Logo" id="logo"> 
        <h1>Life Saver</h1>
<div class="container">
    <a href="{{ route('admin.donations.index') }}" class="btn-back">← Back to Donations List</a>

    <h1>Screening for Donation #{{ $donation->id }}</h1>
    <p><strong>Donor Name:</strong> <td>{{ $donation->donor ? $donation->donor->username : 'N/A' }}</td></p>
    <p><strong>Blood Group:</strong> {{ $donation->blood_group }}</p>
    
    <hr>

    <form method="POST" action="{{ route('admin.donations.screening.store', $donation->id) }}" enctype="multipart/form-data">
        @csrf
        
        <h3>Screening Details</h3>
        <div class="input-box">
            <label>Hemoglobin Level</label>
            <input type="text" name="hemoglobin" value="{{ old('hemoglobin') }}" required>
        </div>
        
        <div class="input-box">
            <label>Upload Screening Report (PDF, JPG)</label>
            <input type="file" name="report_file">
        </div>

        <hr>
        <div class="input-box">
            <label>Update Status:</label>
           <select name="status" class="form-control" required>
    <option value="accepted">Accepted</option>
</select>

        </div>
        
        <div class="input-box">
            <label>Reason for Rejection (if applicable)</label>
            <textarea name="rejection_reason">{{ old('rejection_reason') }}</textarea>
        </div>

        <button type="submit">Submit Screening Results</button>
    </form>
</div>
@endsection
 <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood bank project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    border: border-box;
    
}
body{
    background-image: url('/public/images/blood-request-01.jpg');
    background-position: 85% 150%;
    background-repeat: no-repeat;
    background-size: 40% 90%;
}
#logo { 
    height: 100%; 
    margin-right: 10px; 
}
header{
    display: flex; 
    align-items: center; 
    background-color: #d9534f; 
    height: 90px; 
    padding: 0 20px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 

}
header h1{
    margin: 0; 
    margin-right: auto; 
    font-size:34px; 
    color: #800000; 
    justify-content: center;
   
}
nav ul{
    display: flex; 
    list-style: none; 
    padding: 0; 
    margin: 0;
    margin-right: 20px;
}
nav li {
    margin-left: 50px; 
}
nav li a{
    text-decoration: none; 
    color: #800000; 
    font-weight: bold;
    font-size: 18px; 
}
nav li a:hover{
   color: white;
}
.container{
    position: relative;
    width: 550px;
    height: 590px;
    background: #fff;
    border-radius: 30px;
    box-shadow:0 0 30px rgba(0,0,0,.5) ;
    margin-left: 380px;
    margin-top: 130px;
    color: #800000;
    font-size: 20px;
}
.container h1{
    font-size: 34px;
    text-align: center;
}
.input-box{
    position:relative;
    margin: 33px 0;
    margin-left: 10px;
}
select{
    width: 100%;
    padding: 13px 30px 13px 20px;
    background: #eee;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 18px;
    color: #333;
    font-weight: 500;
}
.input-box input{
    width: 90%;
    padding: 13px 30px 13px 20px;
    background: #eee;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 18px;
    color: #333;
    font-weight: 500;
    transition: .6s ease-in-out 1.2s, visibility 0s 1s;   
}
.input-box input::placeholder {
    color:#333;
    font-weight: 400;
}
.input-box label{
    color: #333;
display: inline-flex;
    align-items: center;
    gap: 6px; /* space between radio and text */
    margin-right: 15px;
    font-size: 16px;
    align-items: center;
    gap: 10px;
    margin-bottom: 5px;
}

.input-box input[type="radio"] {
    margin: 10px;
}
.btn {
    width: 25%;
    height: 48px;
    background:rgb(121, 14, 14);;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
    border: none;
    font-size: 18px;
    color: #fff;
    position:relative ;
    top: 1.5rem;
    margin-left: 2.2%;
}    
footer{
    background-color: #d9534f;
    color:#800000;
    text-align: center;
    padding: 1%;
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
        <div class="container">
           <form method="POST" action="{{ route('patient.submit.request') }}">
    @csrf

    <h1>Blood Request Form</h1>

    {{-- Blood Group --}}
    <div class="input-box">Blood Group:
        <select name="blood_group" required>
            <option value="">-Select-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
    </div>

    {{-- No of Units --}}
    <div class="input-box">No of Units:
        <input type="number" name="no_units" placeholder="No of units" min="1" required>
    </div>

    {{-- Reason --}}
    <div class="input-box">Reason:<br>
        <label><input type="radio" name="reason" value="Accident">Accident</label><br>
        <label><input type="radio" name="reason" value="Anemia">Anemia</label><br>
        <label><input type="radio" name="reason" value="Blood Disorder">BloodDisorder</label><br>
        <label><input type="radio" name="reason" value="Others">Others</label>
    </div>

    {{-- Submit Button --}}
    <button type="submit" class="btn">Request</button>
    
</form>
        </div>
        <footer>
            <p>&copy;2024 Life Saver. All rights reserved.</p>
        </footer>
        </body>
        </html>
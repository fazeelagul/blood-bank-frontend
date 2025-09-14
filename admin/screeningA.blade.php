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
.container {
    max-width: 550px;
    height: 705px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 9px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    margin-top: 2%;
    font-size: larger;
}
h2 {
    margin-top: 0px;
    text-align: center;
    color: #800000;
}
label {
    font-weight: bold;
    color: #800000;
}
#textbox{
    width: 100%;
    height: 5%;
    padding: 10px 20px 10px 12px;
    background: #eee;
    border-radius: 3px;
    border: none;
    outline: none;
    font-size: 18px;
    color: #333;
}
#textbox::placeholder{
    color: #888;
    font-weight: 500;
}
.input-box{
    position:relative;
    margin: 10px 0;
}
.input-box input{
    width: 100%;
    padding: 10px 20px 10px 12px;
    background: #eee;
    border-radius: 3px;
    border: none;
    outline: none;
    font-size: 18px;
    color: #333;
    font-weight: 500;
}
.input-box input::placeholder {
    color: #888;
    font-weight: 500;
}
.input-box i {
    position: absolute;
    right: 20%;
    top: 0%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #888;
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
.next-button {
    display: inline-block;
    padding: 1rem 3rem;
    background-color: #800000; 
    color: #fff; 
    text-decoration: none; 
    border-radius:10px;
    position: absolute;
    right: 48rem; 
    bottom: 8rem;
    transition: background-color 0.3s; 
    font-size: 18px;
 } 
.next-button:hover {
    background-color:#d9534f;
    color: #800000;
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
        <h2>Donor Screening Report</h2>
        <form method="POST" action="{{ route('admin.screening.step1.save', $donation->id) }}">
    @csrf
            <div class="input-box">
                <label>Donor Name:</label><br>
               <input type="text" name="donor_name" value="{{ $screening->donor_name ?? $donation->donor->username }}" readonly>
            </div>
            <div class="input-box">
                <label>Donor ID:</label><br>
                 <input type="text" name="donor_id" value="{{ $donation->donor->id }}" readonly>
            </div>
             <div class="input-box">
                <label>Blood Group:</label><br>    
               <input type="text" name="blood_group" value="{{ $screening->blood_group ?? $donation->blood_group }}" readonly>
                     </div>
                <div class="input-box">
                    <label>Hemoglobin Level (g/dL):</label><br>
                    <input type="text" name="hemoglobin" value="{{ $screening->hemoglobin ?? '' }}" placeholder="g/dL">
                </div>
                <div class="form-group">
                <label>Infections Diseases:</label><br>
                <input type="checkbox" name="infections[]" value="HIV"
    {{ isset($screening) && in_array('HIV', json_decode($screening->infections ?? '[]')) ? 'checked' : '' }}>HIV

                <br><input type="checkbox" name="infections[]" value="Hepatitis B & C"
                {{ isset($screening) && in_array('Hepatitis B & C', json_decode($screening->infections ?? '[]')) ? 'checked' : '' }}> Hepatitis B & C
                <br><input type="checkbox" name="infections[]" value="syphilis" {{ isset($screening) && in_array('Syphilis', json_decode($screening->infections ?? '[]')) ? 'checked' : '' }}>Syphilis
                <br><input type="checkbox" name="infections[]" value="malaria" {{ isset($screening) && in_array('malaria', json_decode($screening->infections ?? '[]')) ? 'checked' : '' }}> Malaria
                <br><input type="checkbox" name="infections[]" value="none"{{ isset($screening) && in_array('none', json_decode($screening->infections ?? '[]')) ? 'checked' : '' }}>None
                <br><input type="checkbox" name="infections[]" value="others"> Others 
                <input type="text" name="other_infection" id="textbox" placeholder="Enter here">
            </div>
                <div class="input-box">
                    <label>Testing Date:</label><br>
                    <input type="date" name="testing_date" value="{{ $screening->testing_date ?? '' }}">
                </div>
                <a href="/admin/screening/2/step2" class="next-button">Next</a>
            </form>
                </div>
        </div>
     <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
     </footer>
    </body>
</html>
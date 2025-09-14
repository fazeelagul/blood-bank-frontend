<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method For Testing</title>
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
    max-width: 500px;
    height: 550px;
    margin:auto;
    background: white;
    padding: 0px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    margin-top: 6%;
    font-size: larger;
    padding: 10px 20px 10px 12px;
}
h2 {
    top: 0%;
    text-align: center;
    color: #800000;
    text-decoration: underline;
    font-weight: bold;
}
option{
    font-size: 18px;
    color: #800000;
    font-weight: bold;
}
label {
    font-weight:lighter;
}
#textbox{
    width: 90%;
    height: 5%;
    padding: 10px 20px 10px 12px;
    background: #eee;
    border-radius: 8px;
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
    margin: 5px 0;
    color: #800000;
}
.input-box input{
    width: 100%;
    padding: 13px 20px 13px 12px;
    background: #eee;
    border-radius: 8px;
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
.next-button {
    display: inline-block;
    padding: 1rem 3rem;
    background-color: #800000; 
    color: #fff; 
    text-decoration: none; 
    border-radius:10px;
    position: absolute;
    right: 49rem; 
    bottom: 13rem;
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
              <h2>Methods For Testing</h2>
              <form>
                  <option value="hiv">HIV:</option>
                  <div class="radio-buttons">
                    <input type="radio" id="elisa" name="test-methods" value="elisa">
                    <label for="elisa">ELISA</label><br>
                    <input type="radio" id="nat" name="test-methods" value="nat">
                    <label for="nat">NAT</label>
                  </div>
                  <option value="hepatitis-b">Hepatitis B & C:</option>
                  <div class="radio-buttons">
                    <input type="radio" id="hbsag" name="test-methods" value="hbsag">
                    <label for="hbsag">HBsAg Test</label><br>
                    <input type="radio" id="hcvrna" name="test-methods" value="hcvrna">
                    <label for="hcvrna">HCV RNA Test</label><br>
                    <input type="radio" id="nat" name="test-methods" value="nat">
                    <label for="hcvrna">NAT</label>
                  </div>
                  <option value="syphilis">Syphilis:</option>
                  <div class="radio-buttons">
                    <input type="radio" id="non-treponemal" name="test-methods" value="non-treponemal">
                    <label for="non-treponemal">Non-Treponemal Tests(RPR, VDRL)</label><br>
                    <input type="radio" id="treponemal" name="test-methods" value="treponemal">
                    <label for="treponemal">Treponemal Tests(FTA-ABS)</label>
                  </div>
                  <option value="malaria">Malaria:</option>
                  <div class="radio-buttons">
                    <input type="radio" id="microscopy" name="test-methods" value="microscopy">
                    <label for="microscopy"> Microscopy</label><br>
                    <input type="radio" id="rapid diagnostic" name="test-methods" value="rapid diagnostic">
                    <label for="rapid diagnostic">Rapid Diagnostic Tests (RDTs)</label><br>
                    <input type="radio" id="nat" name="test-methods" value="nat">
                    <label for="nat">NAT</label>
                  </div>
                <option value="others">Others:</option>
              <input type="text" id="textbox" placeholder="Enter here">
            <a href="/admin/screening/3/step3" class="next-button">Next</a>
          </form>
        </div>
       <footer>
      <p>&copy; 2024 Life Saver. All rights reserved.</p>
    </footer>
  </body>
</html>
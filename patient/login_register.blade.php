<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<style>
*{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}
header{
    display: flex; 
    align-items: center; 
    background-color: #d9534f; 
    height: 90px; 
    width: 100%;
    padding: 0px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    position: absolute;
    margin-top: 0;
    top: 0;
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
    width: 100%;
    padding: 0px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    position: absolute;
    margin-top: 0;
    top: 0;
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
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height:100vh;
    background: linear-gradient(90deg, #fff,#fff);
    
}
.container{
    position: relative;
    width: 750px;
    height: 600px;
    background: #fff;
    border-radius: 30px;
    box-shadow:0 0 30px rgba(0,0,0,.2) ;
    overflow: hidden;
}
.form-box{
    position: absolute;
    right: 0;
    width: 50%;
    height: 100%;
    background:#fff;
    display: flex;
    align-items: center;
    color: #333;
    text-align: center;
    padding: 40px;
    z-index: 1;
    transition: .6s ease-in-out 1.2s, visibility 0s 1s;
}
.container.active .form-box{
    right: 50%;
}
.form-box.register{
    visibility: hidden;
}
.container.active .form-box.register {
    visibility: visible;
}
form{
    width: 100%;
}
.container h1{
    font-size: 36px;
    margin: -10px 0;
}
.input-box{
    position:relative;
    margin: 30px 0;
}
.input-box input{
    width: 100%;
    padding: 13px 50px 13px 20px;
    background: #eee;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 16px;
    color: #333;
    font-weight: 500;
}
.input-box input::placeholder {
    color: #888;
    font-weight: 400;
}
.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #888;
}
.forgot-link {
    margin: -15px 0 15px;
}
.forgot-link a {
    font-size: 14.5px;
    color: #333;
    text-decoration:none;
}
.btn {
    width: 100%;
    height: 48px;
    background:rgb(121, 14, 14);;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #fff;
    font-weight: 600;
}
.container p{
    font-size: 14.5px;
    margin: 15px 0;
}
.toggle-box {
    position: absolute;
    width: 100%;
    height:100%;
}
.toggle-box::before{
    content: '';
    position: absolute;
    left: -250%;
    width: 300%;
    height: 100%;
    background:rgb(121, 14, 14);;
    border-radius: 150px;
    z-index: 2;
    transition: 1.8s ease-in-out;
}
.container.active .toggle-box::before{
    left:50%;
}
.toggle-panel {
    position: absolute;
    width: 50%;
    height: 100%;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 2;
    transition: .6s ease-in-out;
}
.toggle-panel.toggle-left{
    left: 0;
    transition-delay: 1.2s;
}
.container.active .toggle-panel.toggle-left{
    left: -50%;
    transition-delay:.6s;
}
.toggle-panel.toggle-right{
    right: -50%;
    transition-delay: .6s;
}
.container.active .toggle-panel.toggle-right{
    right: 0;
    transition-delay: 1.2s;
}
.toggle-panel p {
    margin-bottom: 20px;
}
.toggle-panel .btn {
    width: 160px;
    height: 64px;
    background:transparent;
    border: 2px solid #fff;
    box-shadow: none;
}
footer{
    background-color: #d9534f;
    color: #800000;
    text-align: center;
    padding: 1%;
    position: fixed;
    width: 100%;
    bottom: 0;
}

.popup-error {
    position: absolute;
    top: 10px;
    left: 50%;
    width:90%;
    height: 30%;
    transform: translateX(-50%);
    background-color:black;
    color: white;
    text-align: center;
    padding: 12px 20px;
    border-radius: 6px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    z-index: 99;
    animation: slide-down-fade 0.1s ease, fadeOut 5s forwards;
    font-size: 20px;
    font-weight: bold;
}

@keyframes slide-down-fade {
    0% {
        opacity: 0;
        transform: translateX(-50%) translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
}

@keyframes fadeOut {
    0% { opacity: 1; }
    80% { opacity: 1; }
    100% { opacity: 0; visibility: hidden; }
}

.error-alert {
    position: fixed;
    top: 0;
    left: 50%;
    height: 150px;
    width: 30%;
    font-size: large;
    transform: translateX(-50%);
    background-color:rgb(22, 19, 19);
    color: #fff;
    padding: 12px 24px;
    border-radius: 0 0 8px 8px;
    font-weight: bold;
    z-index: 999;
    animation: slideDown 0.3s ease forward;
}


</style>
</head>
<body>
    <header> 
        <img src="public/images/blood-logo.png" alt="Life Saver Logo" id="logo"> 
        <h1>Life Saver</h1> 
        <nav> 
            <ul> 
                <li><a href="/">Home</a></li>
                <li><a href="/admin/login">Admin</a></li>  
                <li><a href="/loginD">Donor</a></li>  
                <li><a href="/loginP">Patient</a></li>  
            </ul> 
        </nav> 
    </header>
   
<div class="container">
    <div class="form-box login">
       <!-- For donor login -->
    @if(session('success'))
    <div class="dropdown-alert success-alert" id="success-alert">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="dropdown-alert error-alert" id="error-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <form method="POST" action="{{ route('patient.login') }}">
@csrf
    <h1>Patient Login</h1>
    <div class="input-box">
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
    <div class="forgot-link">
        <a href="{{ route('patient.forgot.form') }}">Forgot Password?</a>
    </div>
    <button type="submit" class="btn">Login</button>
</form>
    </div>
    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1>Hello,Welcome!</h1>
            <p>Don't have any account?</p>
            <button class="btn register-btn">Register</button>
        </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
     </div>
    <div class="form-box register">
       <form method="POST" action="{{ route('patient.register') }}">

@csrf
    <h1>Patient Registration</h1>
    <div class="input-box">
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                <i class="fa-solid fa-user"></i>
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <i class="fa-solid fa-envelope"></i>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class="fa-solid fa-lock"></i>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <i class="fa-solid fa-lock"></i>
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-box">
    <input type="text" name="mobile_no" placeholder="Mobile No" value="{{ old('mobile_no') }}" required>
    <i class="fa-solid fa-mobile"></i>
    @error('mobile_no')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
    <button type="submit" class="btn">Register</button>
</form>

    </div>
</div><!--end container-->
<script>
    const container=document.querySelector('.container');
const registerBtn=document.querySelector('.register-btn');
const loginBtn=document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
    });

    app.get('/patient', (req, res) => {
        res.send('Patient Page');
    });


setTimeout(() => {
    const alert = document.getElementById('success-alert');
    if (alert) alert.style.display = 'none';
}, 1000); // 👈 This is only 1 second


axios.post('/api/patient/login', {
    username: 'patientUsername',
    password: 'patientPassword'
})
.then(response => {
    const token = response.data.token;
    localStorage.setItem('token', token);
})
.catch(error => {
    console.error('Login failed:', error.response.data.message);
});

axios.get('/api/patient/dashboard', {
    headers: {
        Authorization: `Bearer ${localStorage.getItem('token')}`
    }
})
.then(response => {
    console.log('Dashboard data:', response.data);
})
.catch(error => {
    console.error('Access denied:', error.response.data.message);
});

axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('token')}`;



document.getElementById('loginBtn').addEventListener('click', function () {
    axios.post('/api/login', {
        username: document.getElementById('username').value,
        password: document.getElementById('password').value
    })
    .then(response => {
        const token = response.data.token;

        // ✅ Store token securely
        localStorage.setItem('token', token);

        // ✅ Redirect to dashboard or fetch secure data
        window.location.href = "/dashboardP";
    })
    .catch(error => {
        alert("Login failed: " + error.response.data.message);
    });
});
axios.post('/api/login', { username, password })
  .then(response => {
      const token = response.data.token;
      localStorage.setItem('token', token);
      window.location.href = '/dashboardP'; // ✅ Send user to dashboard
  });
</script>
    <footer>
        <h2>&copy;2024 Life Saver. All rights reserved.</h2>
    </footer>
</body>
</html>
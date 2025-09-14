<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
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
.container {
    position: relative;
    width: 450px;
    height: 370px;
    background: #fff;
    border-radius: 30px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
    margin-left: 40%;
    margin-top: 160px;
    color: #800000;
    font-size: 20px;
}
.input-box {
    position: relative;
    margin: 0px 0;
}
.input-box input {
    width: 86%;
    margin-left:8px;
    padding: 13px 30px 13px 20px;
    background: #eee;
    border-radius: 8px;
    margin-top: 50px;
    border: none;
    outline: none;
    font-size: 18px;
    color: #333;
    font-weight: 500;
    transition: .6s ease-in-out 1.2s, visibility 0s 1s;   
}
.input-box input::placeholder {
    color: #333;
    font-weight: 400;
}
.container h1{
    font-size: 34px;
    text-align: center;
    margin-top: 45%;
}
button {
    width:30%;
    height: 48px;
    background: rgb(121, 14, 14);
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    border: none;
    font-size: 20px;
    color: #fff;
    position: relative;
    top: 4rem;
    margin-left: 60%;
}    
.dropdown-alert {
    position: fixed;
    height: 80px;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    padding: 14px 28px;
    border-radius: 0 0 10px 10px;
    font-weight: bold;
    z-index: 9999;
    animation: slideDown 0.5s ease-in-out forwards;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-width: 300px;
}
.success-alert {
    background-color:black;
    color: #fff;
}

.error-alert {
    background-color: black;
    color: #fff;
}

.close-btn {
    font-size: 20px;
    margin-left: 15px;
    cursor: pointer;
}

@keyframes slideDown {
    0% { top: -60px; opacity: 0; }
    100% { top: 0; opacity: 1; }
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
<body>
<header> 
        <img src="/public/images/blood-logo.png" alt="Life Saver Logo" id="logo"> 
        <h1>Life Saver</h1> 
    </header> 
     <div class="container">
<div class="form-box">
   @if(session('success'))
    <div id="success-alert" class="dropdown-alert success-alert">
        {{ session('success') }}
        <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif

@if($errors->has('email'))
    <div id="email-error-alert" class="dropdown-alert error-alert">
        {{ $errors->first('email') }}
        <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
    <form method="POST" action="{{ route('donor.send.code') }}">
        @csrf
        <h1>Forgot Password</h1><br>
        <div class="input-box">Enter your email:
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <button type="submit" class="btn">Send Reset Link</button>
    </form>
</div>
</div>
<footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
     </footer>
     <script>
    setTimeout(() => {
        const success = document.getElementById('success-alert');
        const error = document.getElementById('email-error-alert');

        if (success) success.style.display = 'none';
        if (error) error.style.display = 'none';
    }, 5000); // visible for 5 seconds
</script>
</body>
</html>

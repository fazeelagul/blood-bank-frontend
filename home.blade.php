<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Saver</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    *{
    margin: 0;
    padding: 0;
    font-family:  Arial, sans-serif;
    box-sizing: border-box;
    border: border-box;
}
body {
    background-color:#fff;
    background-image: url('/public/images/IMG-20250225-WA0008.jpg');
    background-repeat: no-repeat;
    background-size: 100% 90%;
    background-position: center;
    background-attachment: fixed;
    top: 0;
}
header {
    background-color: #d9534f;
    color: #fff;
    padding: 0;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
}
header img {
    max-height: 120px;
}
.container {
    display: flex;
    margin-top: 15%;
    margin-left: 5%;
}
.sidebar {
    background-color: #800000;
    padding: 3.5rem;
    min-width: 300px;
    height: 300px;
    font-size: 23px;
}
.sidebar ul {
    list-style-type: none;
    padding: 0;
}
.sidebar ul li {
    margin-bottom: 1rem;
}
.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: left;
    border-radius:20%;
}
.sidebar ul li a i {
     margin-right: 2rem; 
    }
    .sidebar ul li :hover i {
        color: #800000;
        background-color: #fff;
    }
.details-button {
    display: inline-block;
    padding: 1rem 3rem;
    background-color: #800000; 
    color: #fff; 
    text-decoration: none; 
    border-radius:10px;
    position: absolute;
    right: 2rem; 
    bottom: 8rem;
    transition: background-color 0.3s; 
    font-size: 23px;
 } 
.details-button:hover {
    background-color:#800000;
    color: #fff;
}
h1 {
    color: #800000;
}
.contact-info {
    margin-top: 40%;
    margin-left: 1px;
    font-size: 23px;
    color: black;
}
footer {
    background-color: #d9534f;
    color: #800000;
    text-align: center;
    padding: 1%;
    position: fixed;
    width: 100%;
    bottom: 0;
}
</style>
</head>
  <body>
    <div class="image"></div>
      <header>
        <img src="public/images/blood-logo.png" id="logo">
        <h1>Life Saver</h1>
      </header>
     <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="admin/login"><i class="fas fa-user-shield"></i> Admin</a></li>
                <li><a href="/loginD"><i class="fas fa-user"></i> Donor</a></li>
                <li><a href="/loginP"><i class="fas fa-procedures"></i> Patient</a></li>
            </ul>
           <div class="contact-info">
            <p>Contact us:46372920</p>
            <p>Email:@gailnaknlhhg</p>
           </div>
          <a href="/detail" class="details-button">More Details</a>
        </nav>
      </div>
    </div>
      <footer>
        <p>&copy; 2024 Life Saver. All rights reserved.</p>
      </footer>
  </body>
</html>
@if(session('msg'))
    <script>alert("{{ session('msg') }}");</script>
@endif

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
 /* Reset */
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
/* Main Container */
.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 25px;
    margin-top: 8.5%;
    background: #fff;
    border-radius: 12px;
    box-shadow: 20px 20px 25px rgba(0,0,0,0.5);
    text-align: center;
}

.container h1 {
    font-size: 1.8rem;
    color:#800000;
    margin-bottom: 20px;
    border-bottom: 2px solid #eee;
    padding-bottom: 10px;
}

/* Label */
.container label {
    display: block;
    margin: 15px 0 8px;
    font-weight: bold;
    font-size: 1rem;
    text-align: left;
}

/* Date input */
.container input[type="date"] {
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 1rem;
    margin-bottom: 20px;
    transition: border 0.2s ease;
}
.container input[type="date"]:focus {
    border: 1px solid #800000;
}

/* Slot box */
.slot-box {
    margin: 20px 0;
}

.slot-box h3 {
    margin-bottom: 15px;
    font-size: 1.2rem;
    color: #444;
}

/* Time slot buttons */
.slot-btn {
    background: #f1f1f1;
    border: 1px solid #ddd;
    color: #333;
    padding: 10px 18px;
    margin: 5px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
    transition: all 0.2s ease;
}

.slot-btn:hover {
    background: #800000;
    color: #fff;
    border-color: #e74c3c;
}

.slot-btn.selected {
    background: #800000;
    color: #fff;
    border-color: #c0392b;
}

/* Submit button */
.container button[type="submit"] {
    margin-top: 20px;
    padding: 12px 25px;
    background: #800000;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.2s ease;
}

.container button[type="submit"]:hover {
    background: #c0392b;
}

/* Footer */
footer {
    margin-top: 40px;
    background: #333;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 0.9rem;
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
    </header>
     <div class="container">
    <h1>Book Appointment</h1>

    {{-- Success message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Form --}}
     <form action="{{ route('donor.appointment.book', $donation->id) }}" method="POST">
        @csrf

        <label for="appointment_date_input">Select Date:</label>
        <input type="date" id="appointment_date_input" onchange="document.getElementById('appointment_date').value=this.value" required>

        <div class="slot-box">
            <h3>Select Time:</h3>
            <button type="button" class="slot-btn appointment_time-btn" onclick="selectSlot('appointment_time','09:00 AM', this)">09:00 AM</button>
            <button type="button" class="slot-btn appointment_time-btn" onclick="selectSlot('appointment_time','01:00 PM', this)">01:00 PM</button>
            <button type="button" class="slot-btn appointment_time-btn" onclick="selectSlot('appointment_time','05:00 PM', this)">05:00 PM</button>
        </div>

        {{-- hidden inputs (yeh hi backend ko bheja jaye ga) --}}
        <input type="hidden" name="appointment_date" id="appointment_date" required>
        <input type="hidden" name="appointment_time" id="appointment_time" required>

        <button type="submit">Book Appointment</button>
    </form>
     </div>
    <script>
        function selectSlot(type, value, el) {
            // hidden input fill karo
            document.getElementById(type).value = value;

            // sare buttons ka selected class hatao
            document.querySelectorAll("." + type + "-btn").forEach(btn => {
                btn.classList.remove("selected");
            });

            // clicked button pe class lagao
            el.classList.add("selected");
        }
    </script>
<footer>
            <p>&copy; 2024 Life Saver. All rights reserved.</p>
        </footer>
</body>
</html>
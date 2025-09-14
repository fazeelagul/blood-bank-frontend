<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment</title>
    <style>
        .slot-box { margin: 10px 0; }
        .slot-btn {
            padding: 10px 20px;
            margin: 5px;
            border: 1px solid #333;
            border-radius: 5px;
            cursor: pointer;
            background: #f8f8f8;
        }
        .slot-btn.selected {
            background: #4CAF50;
            color: #fff;
        }
    </style>
    <script>
        function selectSlot(type, value) {
            // hidden input fill karo
            document.getElementById(type).value = value;

            // sare buttons ka selected class hatao
            document.querySelectorAll("." + type + "-btn").forEach(btn => {
                btn.classList.remove("selected");
            });

            // clicked button pe class lagao
            event.target.classList.add("selected");
        }
    </script>
</head>
<body>
    <h1>Book Appointment</h1>

    {{-- Success message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Form --}}
    <form action="{{ route('donor.appointment.save') }}" method="POST">
    @csrf

        <div class="slot-box">
            <h3>Select Date:</h3>
            <button type="button" class="slot-btn appointment_date-btn" onclick="selectSlot('appointment_date','2025-09-01')">1 Sept 2025</button>
            <button type="button" class="slot-btn appointment_date-btn" onclick="selectSlot('appointment_date','2025-09-02')">2 Sept 2025</button>
            <button type="button" class="slot-btn appointment_date-btn" onclick="selectSlot('appointment_date','2025-09-03')">3 Sept 2025</button>
        </div>

        <div class="slot-box">
            <h3>Select Time:</h3>
            <button type="button" class="slot-btn appointment_time-btn" onclick="selectSlot('appointment_time','09:00 AM')">09:00 AM</button>
            <button type="button" class="slot-btn appointment_time-btn" onclick="selectSlot('appointment_time','01:00 PM')">01:00 PM</button>
            <button type="button" class="slot-btn appointment_time-btn" onclick="selectSlot('appointment_time','05:00 PM')">05:00 PM</button>
        </div>

        {{-- hidden inputs --}}
        <input type="hidden" name="appointment_date" id="appointment_date" required>
        <input type="hidden" name="appointment_time" id="appointment_time" required>

        <button type="submit">Book Appointment</button>
    </form>
</body>
</html>

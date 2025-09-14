<form method="POST" action="{{ route('admin.assignAppointment', $donation->id) }}">

    @csrf
    <label>Date:</label>
    <input type="date" name="appointment_date" required>

    <label>Time Slot:</label>
    <select name="appointment_time" required>
        <option value="09:00 AM">09:00 AM</option>
        <option value="09:30 AM">09:30 AM</option>
        <!-- more slots -->
    </select>

    <a href="{{ route('admin.assignForm', $donation->id) }}">Assign Appointment</a>

</form>

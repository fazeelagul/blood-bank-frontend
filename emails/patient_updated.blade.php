<p>Dear {{ $patient->username }},</p>
<p>Your profile has been updated. Here are the changes:</p>

<ul>
@foreach($changes as $field => $change)
    <li><strong>{{ ucfirst($field) }}:</strong> changed from <em>{{ $change['old'] }}</em> to <em>{{ $change['new'] }}</em></li>
@endforeach
</ul>


<p>If you did not request this change, please contact support.</p>

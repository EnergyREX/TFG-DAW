@auth

@php
    $role = auth()->user()->getRole();
@endphp

<nav>
    <ul>
        @if ($role->hasPermission('view_index'))
            <li><a href="/">Index</a></li>
        @endif

        @if ($role->hasPermission('view_appointments'))
        <li><a href="/appointments">Appointments</a></li>
        @endif

        @if ($role->hasPermission('view_inventories'))
        <li><a href="/inventories">Inventories</a></li>
        @endif

        @if ($role->hasPermission('view_medicalrecords'))
        <li><a href="/appointments">Medical Records</a></li>
        @endif

        @if ($role->hasPermission('view_treatments'))
        <li><a href="/treatments">Treatments</a></li>
        @endif

        @if ($role->hasPermission('view_roles'))
        <li><a href="/roles">Roles</a></li>
        @endif
    </ul>
</nav>
@endauth
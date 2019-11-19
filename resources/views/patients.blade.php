@extends('backend')

@section('title')Patienten &ndash;
    @parent
    @endsection

@section('main')
<h1 style="margin: 10px; text-align: center; padding: 20px;">Patients</h1>

<div class="container">
    <div class="row">
        <div class="patient-container">
            <table class="table table-dark table-striped">
                <thead class="thead-light">
                <tr>
                    <th>SVNr</th>
                    <th>Name</th>
                    <th>L-Name</th>
                    <th>Email</th>
                    <th>PLZ</th>
                    <th>City</th>
                </tr>
                </thead>
            @foreach($patients as $patient)
                <tr>
                    <td>{{  $patient->svnr  }}</td>
                    <td>{{  $patient->firstname  }}</td>
                    <td>{{  $patient->lastname  }}</td>
                    <td>{{  $patient->email  }}</td>
                    <td>{{  $patient->plz  }}</td>
                    <td>{{  $patient->city  }}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>

    @endsection

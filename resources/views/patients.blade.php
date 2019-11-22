@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
    <h1 class="patients-h1">Patients</h1>

    <div class="container">
        <div class="row">
            <p class="search-con"><input type="text" name="search" id="search-patient" placeholder="Find patient..." autofocus><i class="fas fa-search-plus"></i></p>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 patient-container">
                <table class="table table-striped table-hover" id="patients-table">
                    <thead>
                    <tr>
                        <th>@sortablelink('svnr')</th>
                        <th>@sortablelink('firstname')</th>
                        <th>@sortablelink('lastname')</th>
                        <th>@sortablelink('email')</th>
                        <th>@sortablelink('plz')</th>
                        <th>@sortablelink('city')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{  $patient->svnr  }}</td>
                            <td>{{  $patient->firstname  }}</td>
                            <td>{{  $patient->lastname  }}</td>
                            <td>{{  $patient->email  }}</td>
                            <td>{{  $patient->plz  }}</td>
                            <td>{{  $patient->city  }}</td>
                            {{--      TODO: Create right link to the single page of Patient with the right ID                      --}}
                            <td><a href="/patient/{id}" type="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tr class="myTable-pagination">
                        <td>{!! $patients->appends(\Request::except('page'))->render() !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

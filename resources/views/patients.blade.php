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
{{--    <script type="text/javascript">
        function findPatient()
        {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search-patient");
            filter = input.value.toUpperCase();
            table = document.getElementById("patients-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++)
            {
                td = tr[i].getElementsByTagName("td");

                if (td)
                {
                    txtValue = td.textContent || td.innerText;

                    if (txtValue.toUpperCase().indexOf(filter) > -1)
                    {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>--}}
@endsection

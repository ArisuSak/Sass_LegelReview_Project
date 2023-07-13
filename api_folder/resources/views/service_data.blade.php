@extends('master.master')
    <!-- Topbar Start -->
    @section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Firm Data</title>
</head>
<body>
    <h1>Firm Data</h1>

    <table>
        <thead>
            <tr>
                <th>Firm Id</th>
                <th>service name</th>
                <th>service detail</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach($services as $item)
            <tr>
            <td>{{ $item->firm_id }}</td>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->service_detail }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@stop
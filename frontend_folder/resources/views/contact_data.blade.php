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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>File</th>
                <th>Information</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $item)
            <tr>
                <td>{{ $item->contact_name }}</td>
                <td>{{ $item->contact_email }}</td>
                <td>{{ $item->contact_subject }}</td>
                <td>{{ $item->contact_message }}</td>
         
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@stop
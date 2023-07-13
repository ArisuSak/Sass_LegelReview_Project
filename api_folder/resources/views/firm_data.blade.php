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
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>File</th>
                <th>Information</th>
            </tr>
        </thead>
        <tbody>
            @foreach($firm as $item)
            <tr>
                <td>{{ $item->firm_name }}</td>
                <td>{{ $item->firm_email }}</td>
                <td>{{ $item->firm_phonenumber }}</td>
                <td>{{ $item->firm_address }}</td>
                <td>
                    @if($item->firm_file)
                        <img src="{{ asset('path/to/your/images/' . $item->firm_file) }}" alt="File Preview" style="max-width: 100px;">
                    @else
                        No file available
                    @endif
                </td>
                <td>{{ $item->firm_information }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@stop
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
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>File</th>
                <th>Information</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lawyer as $item)
            <tr>
                <td>{{ $item->lawyer_firstname }}</td>
                <td>{{ $item->lawyer_lastname }}</td>
                <td>{{ $item->lawyer_email }}</td>
                <td>{{ $item->lawyer_phonenumber }}</td>
                <td>{{ $item->lawyer_address }}</td>
                <td>
                    @if($item->lawyer_file)
                        <img src="{{ asset('path/to/your/images/' . $item->lawyer_file) }}" alt="File Preview" style="max-width: 100px;">
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

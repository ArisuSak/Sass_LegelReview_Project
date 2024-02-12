@extends('master.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Firm Data</title>
</head>
<body>
    <h1>Firm Data</h1>

    <table>
    <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Firm ID</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Name</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Detail</h6>
              </th>
            </tr>
          </thead>
        <tbody>
            @foreach($services as $item)
            <tr>
                <td>{{ $item->firm_id }}</td>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->service_detail }}</td>
                <td class="border-bottom-0">
                <button type="button" class="btn btn-danger m-1">Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@stop

@extends('master.master')
@section('dyncontent')
<style>
 .small-table {
    font-size: 12px;
    max-width: 600px;
  }

  .small-cell {
    padding: 4px 8px;
  }
</style>

<div class="row">
  <div class="col-lg-12">
    <h5 class="card-title fw-semibold mb-4">Firm Data</h5>
    <div class="d-flex justify-content-center">
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle small-table">
          <thead class="text-dark fs-4">
            <tr class="sticky-top">
            <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Ranking</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">ID</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Name</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Phone number</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Address</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">File</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach($rankedFirms as $index => $firm)
    <tr>
    <td class="border-bottom-0 small-cell">
            <h6 class="badge bg-danger rounded-3 fw-semibold admin">{{ $loop->iteration }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $firm->id }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <div class="d-flex align-items-center gap-2">
                <h6 class="badge bg-secondary rounded-3 fw-semibold">{{ $firm->firm_name }}</h6>
            </div>
            <span class="fw-normal">{{ $firm->firm_email }}</span>
            <span class="fw-normal">{{ $firm->firm_phonenumber }}</span>
        </td> 
        <td class="border-bottom-0 small-cell">
            <h6 class="mb-0 fw-normal">{{ $firm->firm_phonenumber }}</h6>
            <span class="fw-normal">{{ $firm->firm_information }}</span>
        </td>
        <td class="border-bottom-0 small-cell">
            <span class="mb-0 fw-normal">{{ $firm->firm_address }}</span>
        </td>
        <td class="border-bottom-0 small-cell">
            <span class="mb-0 fw-normal">{{ $firm->firm_file }}</span>
        </td>
        <td class="border-bottom-0 small-cell">
            <button type="button" class="btn btn-success m-1">
                <a href="/firm/{{ $firm->id }}" class="text-white">Show</a>
            </button>
            @if ($firm->firm_active)
                <form action="{{ route('firm.ban', ['id' => $firm->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to ban this firm?');">
                    @csrf
                    <button type="submit" class="btn btn-warning m-1">Ban</button>
                </form>
            @else
                <form action="{{ route('firm.unban', ['id' => $firm->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to unban this firm?');">
                    @csrf
                    <button type="submit" class="btn btn-success m-1">Unban</button>
                </form>
            @endif
            <form action="{{ route('firm.destroy', ['id' => $firm->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this firm?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger m-1">Delete</button>
            </form>
        </td>
    </tr>
@endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


 <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
        @stop
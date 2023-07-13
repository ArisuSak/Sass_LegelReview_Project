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
    <h5 class="card-title fw-semibold mb-4">Recent Data</h5>
    <div class="d-flex justify-content-center">
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle small-table">
          <thead class="text-dark fs-4">
            <tr class="sticky-top">
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">ID</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Name</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Comment</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Rating</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach($ratings as $item)
    <tr>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $item->id }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-1">{{ $item->user->name }}</h6>
            <td>
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $item->rating)
                        <span class="star">&#9733;</span>
                    @else
                        <span class="star">&#9734;</span>
                    @endif
                @endfor
            </td>
        </td>
        <td class="border-bottom-0 small-cell">
            <p class="mb-0 fw-normal">{{ $item->comment }}</p>
        </td>
        <td class="border-bottom-0 small-cell">
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-secondary rounded-3 fw-semibold">{{ $item->firm_address }}</span>
            </div>
        </td>
        <td class="border-bottom-0 small-cell">
            <button type="button" class="btn btn-success m-1">Show Service</button>
            <form action="{{ route('firm.destroy', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this firm?');">
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
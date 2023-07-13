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
    <h5 class="card-title fw-semibold mb-4">User Data</h5>
    <div class="d-flex justify-content-center">
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle small-table">
          <thead class="text-dark fs-4">
            <tr class="sticky-top">
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">ID</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">User Name</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Email</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Role</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach($users->sortBy(function($user) {
    if ($user->hasRole('super_admin')) {
        return 4; // Assign the highest value to sort Super Admin last
    } elseif ($user->hasRole('admin')) {
        return 3; // Assign a higher value to sort Admin after Super Admin
    } elseif ($user->hasRole('firm_provider')) {
        return 2; // Assign a medium value to sort Firm Providers after Admin
    } else {
        return 1; // Assign the lowest value to sort Users first
    }
}) as $item)
    <tr>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $item->id }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $item->name }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $item->email }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            @if($item->hasRole('super_admin'))
                <h6 class="badge bg-info rounded-3 fw-semibold super-admin">Super Admin</h6>
            @elseif($item->hasRole('admin'))
                <h6 class="badge bg-danger rounded-3 fw-semibold admin">Admin</h6>
            @elseif($item->hasRole('firm_provider'))
                <h6 class="badge bg-secondary rounded-3 fw-semibold firm-provider">Firm Provider</h6>
            @else
                <h6 class="badge bg-success rounded-3 fw-semibold user">User</h6>
            @endif
        </td>
        <td class="border-bottom-0 small-cell">
        @if($item->active)
                <form action="{{ route('user.ban', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to ban this user?');">
                    @csrf
                    <button type="submit" class="btn btn-danger m-1">Ban</button>
                </form>
            @else
                <form action="{{ route('user.unban', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to unban this user?');">
                    @csrf
                    <button type="submit" class="btn btn-success m-1">Unban</button>
                </form>
            @endif
            <!-- <form action="{{ route('user.destroy', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger m-1">Delete</button>
            </form> -->
        </td>
    </tr>
@endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<style>
    .firm-provider {
    background-color: blue;
    /* Add any other styles for the firm provider badge */
}

.admin {
    background-color: orange;
    /* Add any other styles for the admin badge */
}

.user {
    background-color: green;
    /* Add any other styles for the user badge */
}

</style>


 <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
        @stop
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
    <h5 class="card-title fw-semibold mb-4">Contact Data Archive</h5>
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
                <h6 class="fw-semibold mb-0">Email</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Subject</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Message</h6>
              </th>
              <th class="border-bottom-0 small-cell">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
          </thead>
          <tbody>
          @foreach($contact as $contact)
    <tr>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $contact->id }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="badge bg-secondary rounded-3 fw-semibold">{{ $contact->contact_name }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $contact->contact_email }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <h6 class="fw-semibold mb-0">{{ $contact->contact_subject }}</h6>
        </td>
        <td class="border-bottom-0 small-cell">
            <p class="mb-0 fw-normal">{{ $contact->contact_message }}</p>
        </td>
        <td class="border-bottom-0 small-cell">
            @if($contact->contact_read)
                <form action="{{ route('contact.markAsUnread', ['id' => $contact->id]) }}" method="POST" onsubmit="return confirm('Mark this contact as unread?');">
                    @csrf
                    <button type="submit" class="btn btn-warning m-1">Mark as Unread</button>
                </form>
            @else
                <form action="{{ route('contact.markAsRead', ['id' => $contact->id]) }}" method="POST" onsubmit="return confirm('Mark this contact as read?');">
                    @csrf
                    <button type="submit" class="btn btn-success m-1">Mark as Read</button>
                </form>
            @endif
            <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');">
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
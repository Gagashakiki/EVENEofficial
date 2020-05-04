@extends('admin.layouts.admin-main')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="m-0 text-dark">Vendors</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <table id="transactionTable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Transaction Id</th>
            <th>Vendor Name</th>
            <th>Customer Name</th>
            <th>Type</th>
            <th>Theme</th>
            <th>Date</th>
            <th>Note</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($transactions as $transaction)
            <tr>
              <td>#{{ $transaction->id }}</td>
              <td>{{ $transaction->vendorName }}</td>
              <td>{{ $transaction->customerName }}</td>
              <td>{{ $transaction->type }}</td>
              <td>{{ $transaction->theme }}</td>
              <td>{{ date("d F Y", strtotime($transaction->date)) }}</td>
              <td>{{ $transaction->notes }}</td>
              <td>{{ number_format($transaction->amount) }}</td>
              <td>{{ $transaction->status }}</td>
              @if($transaction->status == "Waiting For Payment")
                <td>
                  <form action="{{ "/admin/transactions/".$transaction->id }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Confirm Payment</button>
                  </form>
                </td>
              @else
                <td></td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

  <script>
    $(function () {
      $('#transactionTable').DataTable({});
    });
  </script>
@endsection

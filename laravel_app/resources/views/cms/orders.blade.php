@extends('cms.cms_master')

@section('main_content')
<div id="content-wrapper">

      
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <div class="row">
        <div class="col-12 mb-3 display-3">
          <h1>Site Orders</h1>
          <hr>
        </div>
        
      </div>

          <!-- DataTables Example -->
          <div class="card mb-3 mt-5">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Users Orders</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Order Details</th>
                        <th>Total</th>
                        <th>Date</th>
                      </tr>
                    </thead>
               <tbody>
                 @foreach ($orders as $item)
                 <tr>
                   <td>{{ $item->name }}</td>
                 <td>
                   <ol>
                   @foreach (unserialize($item->data) as $order)
                   <li>{{ $order['name'] }}, Quantity: {{ $order['quantity'] }}, Price: ${{ $order['price'] }}</li>
                   @endforeach
                   </ol>
                 </td>
                 <td>${{ $item->total }}</td>
                 <td>{{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}</td>
                 </tr>
                 @endforeach
               </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy Batella {{ Date('Y') }}</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->

  @endsection
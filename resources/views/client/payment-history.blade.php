<x-custom-layout>

    @section('css')
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css') }}">
        <!-- End Plugin css for this page -->
    @endsection

    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">PAYMENT HISTORY</h4>
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                      <th>INST NO</th>
                      <th>DATE PAID</th>
                      <th>REFERENCE</th>
                      <th>PAYTYPE</th>
                      <th>BUSSTYPE</th>
                      <th>AMOUNT</th>
                      <th>STATUS</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>03/29/2020</td>
                      <td>ECK-A3C85A</td>
                      <td>Paypal</td>
                      <td>Sub-pay</td>
                      <td>50,000</td>
                      <td>
                        <label class="badge badge-inverse-success">Posted</label>
                      </td>
                      <td>
                        <button class="btn btn-outline-primary">View</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>03/29/2021</td>
                      <td>ECK-C23A75</td>
                      <td>Bank Deposit</td>
                      <td>Sub-pay</td>
                      <td>30,000</td>
                      <td>
                        <label class="badge badge-inverse-danger">Unposted</label>
                      </td>
                      <td>
                        <button class="btn btn-outline-primary">View</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

    @section('script')
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- Custom js for this page -->
        <script src="{{ asset('assets/js/shared/data-table.js') }}"></script>
        <!-- End custom js for this page -->
    @endsection

</x-custom-layout>

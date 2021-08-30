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
              {{--  <h4 class="card-title">PAYMENT HISTORY</h4>  --}}
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Country</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->last_name }}, {{ $user->first_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <div class="d-flex align-items-center">
                                <img class="img-xs rounded-circle" src="https://restcountries.eu/data/{{ strtolower($user->permanent_country_code) }}.svg" alt="profile image">
                                <div class="wrapper pl-2">
                                <p class="mb-0 text-gray">{{ $user->permanent_country_code }}</p>
                                </div>
                            </div>
                            </td>
                            <td>
                            <label class="badge badge-inverse-success">Active</label>
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $user) }}" class="btn btn-outline-primary">Modify</a>
                            </td>
                        </tr>
                      @empty
                          <h3>No Data Found!</h3>
                      @endforelse
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

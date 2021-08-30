<x-custom-layout>
    <div class="row">
        <div class="col-md-12 col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body d-flex flex-column">
                <div class="wrapper">
                  <h4>Maynard Magallen</h4>
                  <p class="mb-4">Application Number: {{ auth()->user()->id }}</p>
                  {{--  <p class="mt-4 card-text"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem </p>  --}}
                  {{--  <h2 class="mt-4">Details</h2>  --}}
                  <div class="table-responsive">
                    <table class="table table-stretched">
                      <tbody>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">Payment Terms</p>
                          </td>
                          <td class="">Semi Annual</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">Installment</p>
                          </td>
                          <td class="">$999</td>
                        </tr>
                        <tr>
                          <td>
                            <p class="mb-1 text-dark font-weight-medium">Due Date</p>
                          </td>
                          <td class="">September 24, 2021</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a href="{{ url('payment/option') }}" class="btn btn-rounded btn-primary btn-sm mt-3 mb-4">Pay Bill</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-custom-layout>

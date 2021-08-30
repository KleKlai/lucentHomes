<x-custom-layout>
    <h1>MAKE A PAYMENT</h1>
    <div class="row">
        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Amount Due</h4>
              <div class="shedule-list d-flex align-items-center justify-content-between mb-3">
                <h3>18,530.00</h3>
              </div>
              <h4 class="card-title">Payment Option</h4>
              <div class="event border-bottom py-3">
                <div class="d-flex align-items-center">
                    <a href="{{ route('checkout.create') }}" class="btn btn-primary">
                        Bank Deposit
                    </a>
                </div>
              </div>
              <div class="event border-bottom py-3">
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-primary btn-lg">
                        Money Remittance
                    </button>
                </div>
              </div>
              <div class="event border-bottom py-3">
                <div class="d-flex align-items-center">
                    <a href="{{ route('checkout.create') }}" class="btn btn-primary btn-lg">
                        Online Bank Transfer
                    </a>
                </div>
              </div>
              <div class="event border-bottom py-3">
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-primary btn-lg">
                        Debit/Credit Card
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-lg-8 grid-margin stretch-card">
          <div class="card text-center">
            <div class="card-body">
                <form class="forms-sample text-left">
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control-plaintext" id="exampleInputEmail2" value="Maynard Magallen" readonly></div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Due Date</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control-plaintext" id="exampleInputEmail2" value="07/28/2021" readonly></div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Payment Terms</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control-plaintext" id="exampleInputEmail2" value="Semi Annual" readonly></div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Installment Amount:</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control-plaintext" id="exampleInputEmail2" value="Php 23,823.00" readonly></div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
</x-custom-layout>

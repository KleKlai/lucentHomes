<x-custom-layout>
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bank Details</h4>
          <form class="forms-sample" method="POST" action="{{ route('bank.store') }}">
            @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">Bank Name</label>
              <input type="text" class="form-control" name="bank_name" placeholder="Banco De Oro">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Name</label>
                <input type="text" class="form-control" name="account_name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Number</label>
                <input type="text" class="form-control" name="account_number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Type</label>
                <input type="text" class="form-control" name="account_type">
            </div>
            {{--  <div class="form-check form-check-flat">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status"> Online
                    <i class="input-helper"></i>
                </label>
            </div>  --}}
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a href="{{ route('bank.index') }}" class="btn btn-light">Cancel</a>
          </form>
        </div>
    </div>
</x-custom-layout>

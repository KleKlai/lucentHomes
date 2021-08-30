<x-custom-layout>

    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Bank Details</h4>
          <form class="forms-sample" method="POST" action="{{ route('bank.update', $bank) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
              <label for="exampleInputEmail1">Bank Name</label>
              <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name', $bank->name) }}" placeholder="Banco De Oro">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Name</label>
                <input type="text" class="form-control" name="account_name" value="{{ old('account_name', $bank->account_name) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Number</label>
                <input type="text" class="form-control" name="account_number" value="{{ old('account_number', $bank->account_no) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Account Type</label>
                <input type="text" class="form-control" name="account_type" value="{{ old('account_type', $bank->account_type) }}">
            </div>
            <div class="form-check form-check-flat">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status" {{ ($bank->status == 1) ? 'checked' : '' }}> Online
                    <i class="input-helper"></i>
                </label>
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <a href="{{ route('bank.index') }}" class="btn btn-light">Cancel</a>
            <a href="{{ route('bank.destroy', $bank) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete_bank').submit();">Delete</a>
          </form>
            <form id="delete_bank" method="POST" action="{{ route('bank.destroy', $bank) }}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</x-custom-layout>

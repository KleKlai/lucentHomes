<x-custom-layout>
    <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-stretched">
              <thead>
                <tr>
                  <th>Bank</th>
                  <th>Account Number</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($banks as $bank)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center pb-2">
                                <div class="dot-indicator bg-{{ ($bank->status == 1) ? 'success' : 'danger' }} mr-2"></div>
                                <a href="{{ route('bank.edit', $bank) }}">
                                    <p class="mb-1 text-dark font-weight-medium">{{ $bank->account_name }}</p>
                                </a>
                            </div>
                            <small class="font-weight-medium">{{ $bank->name }} ({{ $bank->bank_code }})</small>
                        </td>
                        <td class="font-weight-medium">{{ $bank->account_no }}</td>
                    </tr>
                @empty
                    <p>No Data</p>
                @endforelse
              </tbody>
            </table>
          </div>
          <a class="d-block mt-3" href="{{ route('bank.create') }}">Add Bank</a>
        </div>
    </div>
</x-custom-layout>

<x-custom-layout>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Payment Instructions</h4>
              <p class="card-description"> Reference No. {{ $checkout->reference_no }} </p>
              <table class="table">
                <tbody>
                  <tr>
                    <td class="font-weight-bold" width="100px">Bank:</td>
                    <td>{{ $checkout->bank->name }} ({{ $checkout->bank->bank_code }})</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Acct No:</td>
                    <td>{{ $checkout->bank->account_no }}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Acct Name:</td>
                    <td>{{ $checkout->bank->account_name }}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Acct Type:</td>
                    <td>{{ $checkout->bank->account_type }}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Amount:</td>
                    <td>PHP 18,294</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Please observe the following rules carefully when making your Over-the-Counter payment. Failure to do so will invalidate your payment.</h4>
                <p class="card-description">
                    <ol>
                        <li>
                            When deposit is completed, click on this link <a href="{{ route('deposit.upload', $checkout) }}">CLICK HERE TO SEND US THE PROOF OF PAYMENT FOR VERIFICATION</a> and fill up the details within the same day to validate.
                            If you do not receive a confirmation email from us in <b>five (5) days</b> after performing this step, contact us immediately.
                            Unvalidated and unclaimed payments exceeding sixty (60) days are forfeited.
                        </li>
                        <li>
                            If you are paying for multiple reference numbers, fill-up a separate deposit slip for each reference number. Do not lump them into a single deposit.
                        </li>
                        <li>
                            Make sure the bank branch you are paying at is on-line at that time to avoid delays in processing.
                        </li>
                        <li>
                            Do not pay prior to getting a reference number from our system for a transaction. Make sure to get a reference number first before paying.
                        </li>
                        <li>
                            Let the teller process this like any regular deposit. Do not give any special instruction like entering your name or reference number into their system as it will delay processing.
                        </li>
                    </ol>

                    <small><b>Note:</b> That some banks may charge a <mark>handling fee</mark> for deposits in their provincial branches.</small>
                </p>
              </div>
            </div>
          </div>
    </div>
</x-custom-layout>

<x-custom-layout>

    <div class="col-12 grid-margin">

        @if ($errors->any())
            <div class="alert alert-fill-danger" role="alert">
                <i class="mdi mdi-alert-circle"></i> Oh snap! Change a few things up and try save again.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
          <div class="card-body">
            {{--  <h4 class="card-title">On-Boarding</h4>  --}}
            <form class="form-sample" action="{{ route('checkout.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Please choose:</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="bank_id">
                                @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->bank_code }} - {{ $bank->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <button type="submit" class="btn btn-secondary btn-fw">
                        <i class="mdi mdi-file-document"></i>Select</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</x-custom-layout>

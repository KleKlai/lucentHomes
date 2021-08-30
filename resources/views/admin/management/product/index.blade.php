<x-custom-layout>
    <div class="row">
        <div class="col-md-4 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product</h4>
                  <form class="forms-sample" method="POST" action="{{ route('product.store') }}">
                      @csrf

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}"> </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" class="form-control" name="price" value="{{ old('price') }}"> </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stretched">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="font-weight-medium">{{ $product->name }}</td>
                                    <td class="font-weight-medium">₱ {{ number_format($product->price, 2, '.', ',') }}</td>
                                    <td>
                                       <a href="{{ route('product.destroy', $product) }}" onclick="event.preventDefault(); document.getElementById('product-destroy-form').submit();">
                                           Delete
                                        </a>
                                    </td>
                                    <form id="product-destroy-form" action="{{ route('product.destroy', $product) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </tr>
                            @empty
                                <p>No Data</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</x-custom-layout>

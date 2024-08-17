<div class="card text-center">
    <div class="card-header">
      View Customer
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $customer->name }}</h5>
      <p class="card-text">{{ $customer->email }}</p>
      <p class="card-text">{{ $customer->phone}}</p>

    </div>
    <div class="card-footer text-body-secondary">
        <a href="/customers" class="btn btn-success btn-sm">Back</a>
    </div>
  </div>

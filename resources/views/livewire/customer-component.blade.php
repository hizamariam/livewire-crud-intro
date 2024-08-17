<div>
    <div class="card">
        <div class="card-header">
        Create Customer
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save" >
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                    <div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                </div>
                <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input wire:model="phone" type="text" class="form-control" id="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="card-footer text-right">
        <a href="/customers" class="btn btn-success btn-sm mt-3">Customer List</a>
    </div>
</div>

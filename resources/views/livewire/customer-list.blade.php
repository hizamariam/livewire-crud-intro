<div>
    <a href="/customers/create" class="btn btn-success btn-sm">Create</a>
    <div>
        <input type="text" wire:model.live.debounce.150ms="search" placeholder="Seach here" class="form-control">
    </div>

    @livewire('flash-message')
<table class="table">
    <thead>
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer )
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" wire:navigate href="/customers/{{ $customer->id }}">View</button>
                    <button class="btn btn-secondary btn-sm" wire:navigate href="/customers/{{ $customer->id }}/edit">Edit</button>
                    <button class="btn btn-danger btn-sm" wire:click="deleteCustomer({{ $customer->id }})" >Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>


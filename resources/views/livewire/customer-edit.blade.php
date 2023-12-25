<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input wire:model.lazy="name" type="text" class="form-control @error('name') is-invalid @enderror"
                id="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input wire:model.lazy="email" type="email" class="form-control @error('email') is-invalid @enderror"
                id="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input wire:model.lazy="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                id="phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

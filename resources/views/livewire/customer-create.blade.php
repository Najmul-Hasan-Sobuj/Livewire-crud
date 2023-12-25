<form wire:submit.prevent="store">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Full Name</label>
        <input wire:model.lazy="name" type="text" class="form-control @error('name') is-invalid @enderror"
            id="exampleInputName">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input wire:model.lazy="email" type="email" class="form-control @error('email') is-invalid @enderror"
            id="exampleInputEmail1">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone Number</label>
        <input wire:model.lazy="phone" type="number" class="form-control @error('phone') is-invalid @enderror"
            id="exampleInputPhone">
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="mb-3">
    <label for="input-{{ $name }}" class="form-label">{{ $label }}</label>
    <input wire:model.lazy="{{ $name }}" type="{{ $type }}"
        class="form-control @error($name) is-invalid @enderror" id="input-{{ $name }}">
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

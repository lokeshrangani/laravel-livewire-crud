<form>
    <input type="hidden" wire:model="category_id">
    <div class="form-group mb-3">
        <label for="categoryName">Title:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="categoryName" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group mb-3">
        <label for="categoryDescription">Description:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="categoryDescription" wire:model="description" placeholder="Enter Description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>
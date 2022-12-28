<div>
    <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <label class="label text-black text-lg">Collage:*</label>
                <select class="form-control @error('collage_id') border border-danger @enderror " wire:model="collage_id">
                    <option label="search" selected>search</option>
                    @foreach(\App\Models\Collage::all() as $collage)
                        <option value="{{$collage->id}}">{{$collage->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label class="label text-black text-lg">Class Num:*</label>
                <input type="text" wire:model="name"  class="form-control mb-1 @error('name') border border-danger @enderror " style="background-color: #eeeeee" placeholder="number">
            </div>
            <div class="col-12">
                <label class="label text-black text-lg">Description:</label>
                <textarea  wire:model="description" class="form-control mb-1" style="background-color: #eeeeee" rows="4" placeholder="description">
                    </textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click="save">Save</button>
    </div>
</div>

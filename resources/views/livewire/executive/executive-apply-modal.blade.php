<div>
    <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <label class="label text-black text-lg">Cost of maintenance:*</label>
                <input type="text" wire:model="amount"  class="form-control mb-1 @error('amount') border border-danger @enderror " style="background-color: #eeeeee" placeholder="number">

            </div>
            <div class="col-12">
                <label class="label text-black text-lg">Maintenance period in days:*</label>
                <input type="text" wire:model="day_amount"  class="form-control mb-1 @error('day_amount') border border-danger @enderror " style="background-color: #eeeeee" placeholder="number">
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click="save">Save</button>
    </div>
</div>

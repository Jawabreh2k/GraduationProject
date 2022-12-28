<div>
    @push('modals')
        <!-- Modal -->
        <div class="modal fade" id="ShowAddCollageModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Collage</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    @livewire('admin.collage.admin-collage-add')

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ShowUpdateCollageModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Collage</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    @livewire('admin.collage.admin-collage-update')

                </div>
            </div>
        </div>
    @endpush
    <div class="card-header">
        <h4 class="card-title">Collage List</h4>
        <a href="add-library.html" class="btn btn-primary" data-toggle="modal" wire:click="ShowAddCollageModal">+ Add new</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-responsive-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Process</th>

                </tr>
                </thead>
                <tbody>
                @foreach($collages as $key => $row)
                    <tr>
                        <th>{{$key + 1}}</th>
                        <td><span class="badge badge-primary">{{$row->name}}</span></td>
                        <td>{{$row->description}}</td>
                        <td>
                            <a wire:click="ShowUpdateCollageModal({{$row->id}})" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                            <a wire:click="showDeleteModal({{$row->id}})" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <div wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
             class="modal fade bd-example-modal-sm" id="showDeleteModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Collage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>

                    <div class="modal-body">
                        <span class="text-danger">Are You Sure Want To Delete Collage?</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close
                        </button>
                        <button type="button" wire:click="delete"
                                class="btn btn-primary">Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
@push('js')
    <script>
        window.Livewire.on('ShowAddCollageModal', () => {
            $('#ShowAddCollageModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('hideSaveModal', () => {
            $('#ShowAddCollageModal').modal('hide');
        });
    </script>
    <script>
        window.Livewire.on('showDeleteModal', () => {
            $('#showDeleteModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('hideDeleteModal', () => {
            $('#showDeleteModal').modal('hide');
        });
    </script>
    <script>
        window.Livewire.on('ShowUpdateCollageModal', () => {
            $('#ShowUpdateCollageModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('HideUpdateCollageModal', () => {
            $('#ShowUpdateCollageModal').modal('hide');
        });
    </script>

@endpush

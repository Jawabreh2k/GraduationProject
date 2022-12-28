<div>
    @push('modals')
        <!-- Modal -->
        <div class="modal fade" id="ShowAddIssueModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Issue Type</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    @livewire('admin.issue-type.admin-issue-type-add')

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ShowUpdateIssueModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Issue Type</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    @livewire('admin.issue-type.admin-issue-type-update')

                </div>
            </div>
        </div>
    @endpush
    <div class="card-header">
        <h4 class="card-title">Issue Type List</h4>
        <a class="btn btn-primary" data-toggle="modal" wire:click="ShowAddIssueModal">+ Add new</a>
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
                @foreach($issueType as $key => $issue)
                    <tr>
                        <th>{{$key + 1}}</th>
                        <td><span class="badge badge-primary">{{$issue->name}}</span></td>
                        <td>{{$issue->description}}</td>
                        <td>
                            <a wire:click="ShowUpdateIssueModal({{$issue->id}})" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                            <a wire:click="showDeleteModal({{$issue->id}})" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
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
                    <h5 class="modal-title">Delete Issue</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <div class="modal-body">
                    <span class="text-danger">Are You Sure Want To Delete Issue?</span>
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
        window.Livewire.on('ShowAddIssueModal', () => {
            $('#ShowAddIssueModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('hideAddIssueModal', () => {
            $('#ShowAddIssueModal').modal('hide');
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
        window.Livewire.on('ShowUpdateIssueModal', () => {
            $('#ShowUpdateIssueModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('hideUpdateIssueModal', () => {
            $('#ShowUpdateIssueModal').modal('hide');
        });
    </script>

@endpush

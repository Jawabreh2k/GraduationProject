<div>
    @push('modals')
        <!-- Modal -->
        <div class="modal fade" id="ShowUpdateSpecialtyModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Student</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    {{--                    @livewire()--}}

                </div>
            </div>
        </div>
    @endpush
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Students List</h4>
                    <input class="form-control col-3" style="background-color:#f5f5f5" placeholder="search" type="search">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Student Id</th>
                                <th>Collage</th>
                                <th>Process</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $key => $student)
                                <tr>
                                    <th>{{$key + 1}}</th>
                                    <td>{{$student->name}}</td>
                                    <td><span class="badge badge-warning">{{$student->student_number}}</span></td>
                                    <td><span class="badge badge-primary">{{$student->Collage->name}}</span></td>
                                    <td>

                                        <a wire:click="showDeleteModal({{$student->id}})" class="btn btn-sm btn-danger"><i
                                                class="la la-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
         class="modal fade bd-example-modal-sm" id="showDeleteModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <div class="modal-body">
                    <span class="text-danger">Are You Sure Want To Delete Student?</span>
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
        window.Livewire.on('ShowAddSpecialtyModal', () => {
            $('#ShowAddSpecialtyModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('hideAddSpecialtyModal', () => {
            $('#ShowAddSpecialtyModal').modal('hide');
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
        window.Livewire.on('ShowUpdateSpecialtyModal', () => {
            $('#ShowUpdateSpecialtyModal').modal('show');
        });
    </script>
    <script>
        window.Livewire.on('hideUpdateSpecialtyModal', () => {
            $('#ShowUpdateSpecialtyModal').modal('hide');
        });
    </script>

@endpush

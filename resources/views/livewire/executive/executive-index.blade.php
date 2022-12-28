<div>
    @push('modals')
        <!-- Modal -->
        <div class="modal fade" id="showApplyModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Apply</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    @livewire('executive.executive-apply-modal')

                </div>
            </div>
        </div>

    @endpush
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Assign Task</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table header-border table-hover verticle-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Task</th>
                                        <th scope="col">Collage</th>
                                        <th scope="col">ClassRoom</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Tasks as $key => $task)
                                        <tr>
                                            <th>{{$key + 1}}</th>
                                            <td>{{$task->name}}</td>
                                            <td>{{$task->Collage->name}}</td>
                                            <td>{{$task->ClassRoom->name}}</td>
                                            <td>{{$task->description}}</td>
                                            <td wire:click="downloadFile({{$task->id}})" style="cursor: pointer"><i
                                                    class="la la-file-image-o la-2x"></i></td>
                                            @if(count($task->executives) == 0)
                                                <td>
                                                    <select wire:change="apply({{$task->id}})"
                                                            class="form-select form-control">
                                                        <option value="1">New</option>
                                                        <option value="2">Apply</option>
                                                    </select>
                                                </td>
                                            @elseif($task->executive_id == null)
                                                <td class="badge-primary">Apply Before</td>
                                            @elseif($task->executive_id == auth('executive')->user()->id)
                                                <td class="badge-success">Approved Start Fix</td>
                                            @else
                                                <td class="badge-danger">Rejected</td>
                                            @endif


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            window.Livewire.on('showApplyModal', () => {
                $('#showApplyModal').modal('show');
            });
        </script>
        <script>
            window.Livewire.on('hideApplyModal', () => {
                $('#showApplyModal').modal('hide');
            });
        </script>
    @endpush
</div>

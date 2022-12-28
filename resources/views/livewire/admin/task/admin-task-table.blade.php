<div>
    <div class="card-header">
        <h4 class="card-title">Task List</h4>
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
                @foreach($Task as $key => $task)
                    <tr>
                        <th>{{$key + 1}}</th>
                        <td><a href="{{route('admin.task.details',$task->id)}}">{{$task->name}}</a></td>
                        <td>{{$task->Collage->name}}</td>
                        <td>{{$task->ClassRoom->name}}</td>
                        <td>{{$task->description}}</td>
                        <td  wire:click="downloadFile({{$task->id}})"  style="cursor: pointer"><i class="la la-file-image-o la-2x"></i></td>
                        <td>
                            <select wire:model="Task.{{$key}}.status" wire:change="changeStatus" class="form-select form-control">
                                <option label="choose one">choose one</option>
                                <option value="1">New</option>
                                <option value="2">Rejected</option>
                                <option value="0">Approved</option>
                            </select>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@push('js')


@endpush

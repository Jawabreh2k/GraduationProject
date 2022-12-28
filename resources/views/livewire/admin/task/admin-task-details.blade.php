<div>

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
                                        <th scope="col">Company</th>
                                        <th scope="col">Task</th>
                                        <th scope="col">Cost</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Task as $key => $task)
                                        <tr>
                                            <th>{{$key + 1}}</th>
                                            <td>{{$task->executive->name}}</td>
                                            <td>{{$task->task->name}}</td>
                                            <td>{{$task->amount}} JD</td>
                                            <td>{{$task->day_amount}} H</td>
                                            @if($task->task->executive_id == null)
                                                <td>
                                                    <button wire:click="save({{$task->executive_id}})" class="btn btn-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                        </svg>
                                                    </button>

                                                </td>
                                            @else
                                                @if($task->task->executive_id == $task->executive->id)
                                                    <td>
                                                        <p>Approved</p>
                                                    </td>
                                                @else
                                                    <td>
                                                        <p>Rejected</p>
                                                    </td>
                                                @endif

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

</div>

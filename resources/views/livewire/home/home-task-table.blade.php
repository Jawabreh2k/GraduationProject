<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Task</p>
                                    <h3 class="text-white">{{$tasks->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{$tasks->count()}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-warning">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-building"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Study</p>
                                    <h3 class="text-white">{{$tasks->where('status',2)->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{$tasks->where('status',2)->count()}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-question"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Approved</p>
                                    <h3 class="text-white">{{$tasks->where('status',0)->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{$tasks->where('status',0)->count()}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-danger">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-dollar"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Rejected</p>
                                    <h3 class="text-white">{{$tasks->where('status',3)->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{$tasks->where('status',3)->count()}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <th scope="col">Assigned Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Progress</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $key => $task)
                                        <tr>
                                            <th>{{$key +1}}</th>
                                            <td>{{$task->name}}</td>
                                            <td>{{$task->created_at}}</td>
                                            @if($task->status == 0)
                                                <td><span class="badge badge-rounded badge-primary">Approved</span></td>
                                            @elseif($task->status == 1)
                                                <td><span class="badge badge-rounded badge-primary">NEW</span></td>
                                            @elseif($task->status == 2)
                                                <td><span class="badge badge-rounded badge-warning">UnderStudy</span></td>
                                            @else
                                                <td><span class="badge badge-rounded badge-danger">Rejected</span></td>
                                            @endif

                                            @if($task->status == 0)
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%;" role="progressbar">
                                                        </div>
                                                    </div>
                                                </td>

                                            @elseif($task->status == 1)
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 10%;" role="progressbar">
                                                        </div>
                                                    </div>
                                                </td>
                                            @elseif($task->status == 2)
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 50%;" role="progressbar">
                                                        </div>
                                                    </div>
                                                </td>
                                            @else
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%;" role="progressbar">
                                                        </div>
                                                    </div>
                                                </td>
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

<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-4 col-xxl-4 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Students</p>
                                    <h3 class="text-white">{{\App\Models\Student::all()->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{\App\Models\Student::all()->count()}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-sm-6">
                    <div class="widget-stat card bg-warning">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-building"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Company</p>
                                    <h3 class="text-white">{{\App\Models\Executive::all()->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{\App\Models\Executive::all()->count()}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-question"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Tasks</p>
                                    <h3 class="text-white">{{\App\Models\Task::all()->count()}}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: {{\App\Models\Task::all()->count()}}%"></div>
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
                                        <th scope="col">Student</th>
                                        <th scope="col">Collage</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\Models\Task::all() as $key => $task)
                                        <tr>
                                            <th>{{$key + 1}}</th>
                                            <td>{{$task->name}}</td>
                                            <td>{{$task->students->name}}</td>
                                            <td>{{$task->Collage->name}}</td>
                                            @if($task->status == 0)
                                                <td><span class="badge badge-rounded badge-primary">Approved</span></td>
                                            @elseif($task->status == 2)
                                                <td><span class="badge badge-rounded badge-danger">Rejected</span></td>
                                            @else
                                                <td><span class="badge badge-rounded badge-warning">New</span></td>
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

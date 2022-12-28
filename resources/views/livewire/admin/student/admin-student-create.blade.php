<div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Create Student</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Specialties</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="label" style="font-size: 0.9rem">Student Name</label>
                                    <input wire:model="name" type="text" class="form-control">
                                    @error('name')
                                    <div class="badge-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="label" style="font-size: 0.9rem">Student Id</label>
                                    <input wire:model="student_number" type="number" class="form-control">
                                    @error('student_number')
                                    <div class="badge-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="label" style="font-size: 0.9rem">Collage</label>
                                    <select wire:model="collage_id" class="form-select form-control">
                                        <option label="search"></option>
                                        @forelse($collages as $collage)
                                            <option value="{{$collage->id}}">{{$collage->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('collage_id')
                                    <div class="badge-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="label" style="font-size: 0.9rem">Specialty</label>
                                    <select wire:model="specialty_id" class="form-select form-control">
                                        <option label="search"></option>
                                        @forelse($specialties as $specialty)
                                            <option value="{{$specialty->id}}">{{$specialty->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('specialty_id')
                                    <div class="badge-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12">
                                    <label class="label" style="font-size: 0.9rem">Password</label>
                                    <input wire:model="password" type="password" class="form-control">
                                    @error('password')
                                    <div class="badge-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex;justify-content: center">
                            <button wire:click="save" class="btn btn-primary col-4">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

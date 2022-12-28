<div>

    <div class="row m-3" style="position: relative">
        <div class="container col-lg-6 col-md-12 p-5 rounded" style="position: absolute;background-color: #359756;width: 50%; @if($Student->status ?? 0 > 0)
height: 100%; bottom: 0rem; @else height:40%; bottom: 15rem; @endif right: 0;">
            @if($Student->status ?? 0 > 0)
            <h2 class="u-custom-font u-font-montserrat u-text u-text-palette-2-base u-text-1 text-white"> Thank you. Your request has been received. A new request will be allowed after the previous request is completed.<br>
                </h2>
                <a href="{{route('home.task.table')}}" class="btn text-white" style="background-color: #282727">
                    <span class="u-icon u-icon-1"></span>&nbsp;To do List
                    <i class="fas fa-arrow-right p-2"></i>
                </a>
            @endif
        </div>
            @if(isset($Student->status))
        @if($Student->status == 0)
        <div class="form-group  rounded col-lg-6 p-3" style="z-index: 999">
                <div class="form-group mb-3">
                    <label class="label">Issue Name:</label>
                    <input placeholder="Issue Name" class="form-control @error('name') is-invalid @else is-valid @enderror" type="text" wire:model="name" style="background-color: #eeeeee" required>
                    @error('name')
                    <div class="invalid-feedback">
                        This Field is Required!
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="label">Collage:</label>
                    <select class="form-select @error('collage_id') is-invalid @else is-valid @enderror" wire:model="collage_id" style="background-color: #eeeeee">
                        <option label="choose"></option>
                        @foreach($collages as $collage)
                            <option value="{{$collage->id}}">{{$collage->name}}</option>
                        @endforeach
                    </select>
                    @error('collage_id')
                    <div class="invalid-feedback">
                        This Field is Required!
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="label">ClassRoom:</label>
                    <select class="form-select @error('classroom_id') is-invalid @else is-valid @enderror " wire:model="classroom_id" style="background-color: #eeeeee">
                        <option label="choose"></option>
                        @foreach($classRooms as $room)
                            <option value="{{$room->id}}">{{$room->name}}</option>
                        @endforeach
                    </select>
                    @error('classroom_id')
                    <div class="invalid-feedback">
                        This Field is Required!
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="label">Issue Type:</label>
                    <select class="form-select @error('issue_type_id') is-invalid @else is-valid @enderror " wire:model="issue_type_id" style="background-color: #eeeeee">
                        <option label="choose"></option>
                        @foreach($issue_types as $issue)
                            <option value="{{$issue->id}}">{{$issue->name}}</option>
                        @endforeach
                    </select>
                    @error('issue_type_id')
                    <div class="invalid-feedback">
                        This Field is Required!
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="label">Image:</label>
                    <input  class="form-control @error('image') is-invalid @else is-valid @enderror" type="file" wire:model="image" required>
                    @error('image')
                    <div class="invalid-feedback">
                        This Field is Required!
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="label">Issue Description:</label>
                    <textarea wire:model="description" placeholder="description" class="form-control @error('description') is-invalid @else is-valid @enderror" rows="5" style="background-color: #eeeeee">
                    </textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        This Field is Required!
                    </div>
                    @enderror
                </div>

                <div class="btn-submit d-flex justify-content-center">
                    <button wire:click="save" class="btn col-lg-6 text-white" style="background-color:#359756 ">Send Issue</button>
                </div>

            </div>
        @endif
            @else
                <div class="form-group  rounded col-lg-6 p-3" style="z-index: 999">
                    <div class="form-group mb-3">
                        <label class="label">Issue Name:</label>
                        <input placeholder="Issue Name" class="form-control @error('name') is-invalid @else is-valid @enderror" type="text" wire:model="name" style="background-color: #eeeeee" required>
                        @error('name')
                        <div class="invalid-feedback">
                            This Field is Required!
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="label">Collage:</label>
                        <select class="form-select @error('collage_id') is-invalid @else is-valid @enderror" wire:model="collage_id" style="background-color: #eeeeee">
                            <option label="choose"></option>
                            @foreach($collages as $collage)
                                <option value="{{$collage->id}}">{{$collage->name}}</option>
                            @endforeach
                        </select>
                        @error('collage_id')
                        <div class="invalid-feedback">
                            This Field is Required!
                        </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="label">ClassRoom:</label>
                        <select class="form-select @error('classroom_id') is-invalid @else is-valid @enderror " wire:model="classroom_id" style="background-color: #eeeeee">
                            <option label="choose"></option>
                            @foreach($classRooms as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                            @endforeach
                        </select>
                        @error('classroom_id')
                        <div class="invalid-feedback">
                            This Field is Required!
                        </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="label">Issue Type:</label>
                        <select class="form-select @error('issue_type_id') is-invalid @else is-valid @enderror " wire:model="issue_type_id" style="background-color: #eeeeee">
                            <option label="choose"></option>
                            @foreach($issue_types as $issue)
                                <option value="{{$issue->id}}">{{$issue->name}}</option>
                            @endforeach
                        </select>
                        @error('issue_type_id')
                        <div class="invalid-feedback">
                            This Field is Required!
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="label">Image:</label>
                        <input  class="form-control @error('image') is-invalid @else is-valid @enderror" type="file" wire:model="image" required>
                        @error('image')
                        <div class="invalid-feedback">
                            This Field is Required!
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="label">Issue Description:</label>
                        <textarea wire:model="description" placeholder="description" class="form-control @error('description') is-invalid @else is-valid @enderror" rows="5" style="background-color: #eeeeee">
                    </textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            This Field is Required!
                        </div>
                        @enderror
                    </div>

                    <div class="btn-submit d-flex justify-content-center">
                        <button wire:click="save" class="btn col-lg-6 text-white" style="background-color:#359756 ">Send Issue</button>
                    </div>

                </div>
            @endif
        <div class="col-lg-6 col-md-12" style="z-index: 999">
            <img class="u-expanded-width u-image u-image-contain u-image-default u-image-1"
                 src="{{\Illuminate\Support\Facades\URL::asset('images/xcxcxcxc-min.png')}}" alt="" data-image-width="1200"
                 data-image-height="1100">
        </div>
    </div>

</div>

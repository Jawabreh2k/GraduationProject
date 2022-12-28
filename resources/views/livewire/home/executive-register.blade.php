<div>
    @push('css')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Poppins:wght@500&display=swap');

            * {
                font-family: 'Kdam Thmor Pro', sans-serif;
                font-family: 'Poppins', sans-serif;
            }

            .svg-section {
                width: 100%;
                height: 100vh;
                background-color: #f1f1f1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .svg {
                position: absolute;
                top: 0;
            }

            .card {
                width: 50%;
                top: 100px;
                z-index: 999;
            }

            .form-group {
                position: relative;
            }

            .icon {
                position: absolute;
                top: 2.7rem;
                right: 1.5rem;
                color: #359756;
            }

        </style>
    @endpush
    <section class="svg-section">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#359756" fill-opacity="1"
                  d="M0,128L60,149.3C120,171,240,213,360,208C480,203,600,149,720,112C840,75,960,53,1080,64C1200,75,1320,117,1380,138.7L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
        <div class="card" style="margin-bottom: 100px">
            <div class="card-header text-center border-0">
                <h2>Register Now</h2>
            </div>
            <div class="row card-body ">
                <div class="form-group mb-3">
                    <i class="fas fa-building icon"></i>
                    <label class="label mb-2">Name:</label>
                    <input wire:model="name" class="form-control border-0" type="text"
                           style="background-color: #e5e5e5">
                    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <i class="fas fa-at icon"></i>
                    <label class="label mb-2">Email:</label>
                    <input wire:model="email" class="form-control border-0" type="email"
                           style="background-color: #e5e5e5">
                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="form-group mb-3">
                    <i class="fas fa-phone icon"></i>
                    <label class="label mb-2">Phone:</label>
                    <input wire:model="phone" class="form-control border-0" type="tel"
                           style="background-color: #e5e5e5">
                    @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror

                </div>

                <div class="form-group mb-3">
                    <i class="fas fa-map-marker-alt icon"></i>
                    <label class="label mb-2">Location:</label>
                    <input wire:model="location" class="form-control border-0" type="text"
                           style="background-color: #e5e5e5">
                    @error('location') <span class="error text-danger">{{ $message }}</span> @enderror

                </div>

                <div class="form-group mb-3">
                    <label class="label mb-2">Company Type:</label>
                    <select wire:model="issue_type_id" class="form-control form-select border-0" type="text"
                            style="background-color: #e5e5e5">
                        <option label="select one"></option>
                        @foreach(\App\Models\IssueType::all() as $issue)
                            <option value="{{$issue->id}}">{{$issue->name}}</option>
                        @endforeach
                    </select>
                    @error('issue_type_id') <span class="error text-danger">{{ $message }}</span> @enderror

                </div>


                <div class="form-group mb-3">
                    <i class="fas fa-lock icon"></i>
                    <label class="label mb-2">Password:</label>
                    <input wire:model="password" class="form-control border-0" type="password"
                           style="background-color: #e5e5e5">
                    @error('password') <span class="error text-danger">{{ $message }}</span> @enderror

                </div>
                <p>I have Account <a href="{{route('executive.login')}}">Login</a> </p>
                <center>
                    <button wire:click="save" type="button" class="btn btn-success col-lg-6">Register</button>
                </center>
            </div>
        </div>
    </section>
    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#359756" fill-opacity="1"
                  d="M0,32L40,53.3C80,75,160,117,240,122.7C320,128,400,96,480,117.3C560,139,640,213,720,218.7C800,224,880,160,960,138.7C1040,117,1120,139,1200,133.3C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </footer>
</div>

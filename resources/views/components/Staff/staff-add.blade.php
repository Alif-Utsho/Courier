<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
        <h3 class="border-bottom pb-2 mb-4">New Staff</h3>
        <form action="{{route('staff.add')}}" method="POST" class="row">
            {{csrf_field()}}
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control py-3" id="exampleFormControlInput1" value="{{old('name')}}" >
                @error('name')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control py-3" id="exampleFormControlInput1" value="{{old('phone')}}" >
                @error('phone')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control py-3" id="exampleFormControlInput1" value="{{old('email')}}" >
                @error('email')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control py-3" id="exampleFormControlInput1" value="{{old('password')}}" >
                @error('password')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Branch</label>
                <select class="form-select form-select-sm py-3" aria-label=".form-select-sm example" name="branch">
                    <option selected disabled>Select a Branch</option>
                    @foreach($branches as $branch)
                        <option value="{{$branch->id}}">{{$branch->name}} - {{$branch->street}}</option>
                    @endforeach
                </select>
                @error('branch')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <input type="hidden" name="type" value="staff">
            <div class="mt-3">
                <a href="/" class="btn btn-secondary col-2">Cancel</a>
                <input type="submit" class="btn btn-primary mx-2 col-2" value="Submit">
            </div>
        </form>
</div>
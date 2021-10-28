<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
        <h3 class="border-bottom pb-2 mb-4">New Branch</h3>
        <form action="{{route('branch.add')}}" method="POST" class="row">
            {{csrf_field()}}
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Branch Name</label>
                <input type="text" name="name" class="form-control py-3" id="exampleFormControlInput1" value="{{old('name')}}" >
                @error('name')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                <input type="text" name="contact" class="form-control py-3" id="exampleFormControlInput1" value="{{old('contact')}}" >
                @error('contact')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">City</label>
                <select class="form-select form-select-sm py-3" aria-label=".form-select-sm example" name="city">
                    <option selected disabled>Select a City</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                </select>
                @error('city')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Street</label>
                <input type="text" name="street" class="form-control py-3" id="exampleFormControlInput1" value="{{old('street')}}" >
                @error('street')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Zip/Postal Code</label>
                <input type="text" name="zip" class="form-control py-3" id="exampleFormControlInput1" value="{{old('zip')}}" >
                @error('zip')
                    <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                @enderror
            </div>
            <div class="mt-3">
                <a href="/" class="btn btn-secondary col-2">Cancel</a>
                <input type="submit" class="btn btn-primary mx-2 col-2" value="Submit">
            </div>
        </form>
</div>
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <div class="modal fade" id="exampleModal{{$branch->id}}update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="p-5 border-warning rounded" style="border-left-style: solid; border-left-width: 5px;">

                    <h3 class="border-bottom pb-2 mb-4">Branch Update</h3>
                    <form action="{{route('branch.update')}}" method="post" class="row">
                        {{csrf_field()}}
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Branch Name</label>
                            <input type="text" required name="name" class="form-control py-3" id="exampleFormControlInput1" value="{{$branch->name}}" >
                            @error('name')
                                <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                            <input type="text" required name="contact" class="form-control py-3" id="exampleFormControlInput1" value="{{$branch->contact}}" >
                            @error('contact')
                                <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">City</label>
                            <select class="form-select form-select-sm py-3" required aria-label=".form-select-sm example" name="city">
                                <option selected disabled>Select a city</option>
                                <option value="Dhaka" {{$branch->city==='Dhaka' ? 'selected' : ''}}>Dhaka</option>
                                <option value="Chittagong" {{$branch->city==='Chittagong' ? 'selected' : ''}}>Chittagong</option>
                                <option value="Rajshahi" {{$branch->city==='Rajshahi' ? 'selected' : ''}}>Rajshahi</option>
                                <option value="Khulna" {{$branch->city==='Khulna' ? 'selected' : ''}}>Khulna</option>
                                <option value="Barishal" {{$branch->city==='Barishal' ? 'selected' : ''}}>Barishal</option>
                                <option value="Sylhet" {{$branch->city==='Sylhet' ? 'selected' : ''}}>Sylhet</option>
                                <option value="Rangpur" {{$branch->city==='Rangpur' ? 'selected' : ''}}>Rangpur</option>
                            </select>
                            @error('city')
                                <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Street</label>
                            <input type="text" required name="street" class="form-control py-3" id="exampleFormControlInput1" value="{{$branch->street}}" >
                            @error('street')
                                <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Zip/Postal Code</label>
                            <input type="text" required name="zip" class="form-control py-3" id="exampleFormControlInput1" value="{{$branch->zip}}" >
                            @error('zip')
                                <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input type="hidden" value="{{$branch->id}}" name="id">
                            <button type="button" class="btn btn-secondary col-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <input type="submit" class="btn btn-primary mx-2 col-2" value="Update">
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
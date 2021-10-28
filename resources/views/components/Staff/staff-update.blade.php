<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <div class="modal fade" id="exampleModal{{$staff->id}}update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="p-5 border-warning rounded" style="border-left-style: solid; border-left-width: 5px;">
                    <h3 class="border-bottom pb-2 mb-4">Update Staff's Info</h3>
                    <form action="{{route('staff.update')}}" method="POST" class="row">
                        {{csrf_field()}}
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control py-3" id="exampleFormControlInput1" value="{{$staff->user->name}}" >
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control py-3" id="exampleFormControlInput1" value="{{$staff->user->phone}}" >
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control py-3" id="exampleFormControlInput1" value="{{$staff->user->email}}" >
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Branch</label>
                            <select class="form-select form-select-sm py-3" aria-label=".form-select-sm example" name="branch">
                                <option selected disabled>Select a Branch</option>
                                @foreach($branches as $branch)
                                    <option value="{{$branch->id}}" {{$branch->id===$staff->branch->id ? 'selected' : ''}}>{{$branch->name}} - {{$branch->street}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="type" value="staff">
                        <input type="hidden" name="id" value="{{$staff->id}}">
                        <div class="mt-3">
                            <button type="button" class="btn btn-secondary col-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <input type="submit" class="btn btn-primary mx-2 col-2" value="Submit">
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
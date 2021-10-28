<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

        <div class="border-bottom pb-2 mb-4 d-flex">
            <h3>Staff List</h3>
            <a href="{{route('admin.get', ['page'=>'newstaff'])}}" class="ms-auto btn btn-primary my-auto btn-sm">Add New</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Branch Address</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($staff as $s)
                     <tr>
                        <th scope="row">{{$s->id}}</th>
                        <td>{{$s->user->name}}</td>
                        <td>{{$s->user->phone}}</td>
                        <td>{{$s->user->email}}</td>
                        <td>{{$s->branch->name}}</td>
                        <td>{{$s->branch->street}}</td>
                        <td class="d-flex">
                            <button class="bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal{{$s->id}}update" data-bs-whatever="@getbootstrap"><i class="fas fa-edit text-primary"></i></button>
                            <x-StaffUpdate staff="{{$s->id}}"/>

                            <button class="bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal{{$s->id}}delete"><i class="fas fa-trash text-danger"></i></button>
                            <x-StaffDelete staff="{{$s->id}}"/>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
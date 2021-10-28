<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
        <div class="border-bottom pb-2 mb-4 d-flex">
            <h3>Branch List</h3>
            <a href="{{route('admin.get', ['page'=>'addbranch'])}}" class="ms-auto btn btn-primary my-auto btn-sm">Add New</a>
        </div>

        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">City</th>
                    <th scope="col">Street</th>
                    <th scope="col">Zip Code</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach($branch as $b)
                     <tr>
                        <th scope="row">{{$b->id}}</th>
                        <td>{{$b->name}}</td>
                        <td>{{$b->contact}}</td>
                        <td>{{$b->city}}</td>
                        <td>{{$b->street}}</td>
                        <td>{{$b->zip}}</td>
                        <td class="d-flex">
                            <button class="bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal{{$b->id}}update" data-bs-whatever="@getbootstrap"><i class="fas fa-edit text-primary"></i></button>
                            <x-BranchUpdate branch="{{$b->id}}"/>

                            <button class="bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal{{$b->id}}delete"><i class="fas fa-trash text-danger"></i></button>
                            <x-BranchDelete branch="{{$b->id}}"/>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
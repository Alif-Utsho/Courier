<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

    <div class="modal fade" id="exampleModal{{$staff->id}}delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-danger rounded" style="border-left-style: solid; border-left-width: 4px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deleting Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to kick out <b>{{$staff->user->name}}</b>??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{route('staff.delete')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$staff->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
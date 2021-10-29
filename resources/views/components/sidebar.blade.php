<a href="/" class="d-flex align-items-center mb-3 p-2 link-dark text-decoration-none border-bottom">
    <span class="fs-5 fw-bold btn col-12 text-white">
        <i class="fab fa-asymmetrik"></i> 
        Easy Alpha
    </span>
</a>
<ul class="list-unstyled ps-0 ms-4">
    <li class="mb-1">
        <a class="btn align-items-center rounded text-white" href="{{route('admin.get')}}">
            <i class="fas fa-tachometer-alt"></i> &nbsp;
            Dashboard
        </a>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed text-white " data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        <i class="fas fa-building"></i> &nbsp;    
        Branch
        </button>
        <div class="collapse ms-5" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="{{route('admin.get', ['page'=>'addbranch'])}}" class="link-dark rounded text-white">Add new</a></li>
                <li><a href="{{route('admin.get', ['page'=>'branch'])}}" class="link-dark rounded text-white">List</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed text-white" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        <i class="fas fa-users"></i> &nbsp;
        Branch Staff
        </button>
        <div class="collapse ms-5" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="{{route('admin.get', ['page'=>'newstaff'])}}" class="link-dark rounded text-white">Add new</a></li>
                <li><a href="{{route('admin.get', ['page'=>'stafflist'])}}" class="link-dark rounded text-white">List</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed text-white " data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        <i class="fas fa-boxes"></i> &nbsp;
        Parcels
        </button>
        <div class="collapse ms-5" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="#" class="link-dark rounded text-white"> - Add New</a></li>
                <li><a href="#" class="link-dark rounded text-white"> - Picked-up</a></li>
                <li><a href="#" class="link-dark rounded text-white"> - Shipped</a></li>
                <li><a href="#" class="link-dark rounded text-white"> - In-Transit</a></li>
                <li><a href="#" class="link-dark rounded text-white"> - Arrived</a></li>
                <li><a href="#" class="link-dark rounded text-white"> - Delivered</a></li>
                <li><a href="#" class="link-dark rounded text-white"> - Unsuccessfull Delivery Attempt</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn align-items-center rounded text-white">
            <i class="fas fa-search"></i> &nbsp;
            Track Parcel
        </button>
    </li>
    <li class="mb-1">
        <button class="btn align-items-center rounded text-white">
            <i class="fas fa-file-alt"></i> &nbsp;
            Reports
        </button>
    </li>
    <li class="border-top my-3"></li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed text-white " data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
        <i class="fas fa-user-alt"></i> &nbsp;
        Account
        </button>
        <div class="collapse ms-5" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="#" class="link-dark rounded text-white">New...</a></li>
                <li><a href="#" class="link-dark rounded text-white">Profile</a></li>
                <li><a href="#" class="link-dark rounded text-white">Settings</a></li>
                <li><a href="{{route('sign.out')}}" class="link-dark rounded text-white">Sign out</a></li>
            </ul>
        </div>
    </li>
</ul>
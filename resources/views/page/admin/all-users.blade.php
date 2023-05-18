@extends("layouts.admin-layout")

@section("content")
<div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Users</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Users Information</li>
                </ol>
            </nav>
        </div>
    </div>
        {{-- Start table --}}
        <form class="searchbar" style="margin-bottom: 10px;">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                <ion-icon name="search-sharp"></ion-icon>
            </div>
            <input id="searchUser" class="form-control" type="text" placeholder="Search for anything">
        </form>
        <div class="card radius-10 w-100">
            <div class="card-body">
            <div class="d-flex align-items-center">
                <h6 class="mb-0">User List</h6>
                <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                    class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
            </div>
            <div class="table-responsive mt-2">
                <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                    <th>#ID</th>
                    <th>Product</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    @foreach ($userDetails as $user)
                        <tr>
                        <td>#{{$user->id}}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/11.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">{{$user->fName}} {{$user->lName}}</h6>
                            </div>
                            </div>
                        </td>
                        <td>Apr 8, 2021</td>
                        <td>{{$user->created_at->format('d-m-Y')}}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="" data-bs-original-title="View detail" aria-label="Views">
                                <ion-icon name="eye-sharp"></ion-icon>
                            </a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="" data-bs-original-title="Edit info" aria-label="Edit">
                                <ion-icon name="pencil-sharp"></ion-icon>
                            </a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="" data-bs-original-title="Delete" aria-label="Delete">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </a>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection

@section("my-scripts")
    <script src="{{asset("assets/js/my-scripts/all-user-search.js")}}"></script>
@endsection

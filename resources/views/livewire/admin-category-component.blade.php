<div>
                    <!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Services Categories</h2>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
    <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="d-flex justify-content-center m-4">
                            <div class="col-md-6"><h4>All Services Categories</h4></div>
                            <div class="col-md-4" style="margin-left: auto;"><a href="{{ route('admin.addcategory') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Category</a></div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td><img src="{{ asset('assets/img/category') }}/{{ $category->image }}" width="60" height="60" alt="{{ $category->name }}"></td>
                                        <td>{{ $category->name }}</td>
                                        <td><div style="min-width: 350px; max-width: 500px">{{ str_limit(strip_tags($category->description),200,'...')  }}</div></td>
                                        <td>
                                            <a href="{{ route('admin.editcategory', ['category_slug'=> $category->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this category') || event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{ $category->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $categories->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

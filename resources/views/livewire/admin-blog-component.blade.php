<div>
     <!-- Start Page Title Area -->
     <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <h2>Blogs</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="d-flex justify-content-center m-4">
                            <div class="col-md-6"><h4>All Blogs</h4></div>
                            <div class="col-md-4" style="margin-left: auto;"><a href="{{ route('admin.addblog') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Blog</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td><img src="{{ asset('assets/img/blog-image') }}/{{ $blog->image }}" width="60" height="60" alt="{{ $blog->name }}"></td>
                                        <td>{{ $blog->name }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editblog', ['blog_slug'=> $blog->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this Blog') || event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $blog->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $blogs->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

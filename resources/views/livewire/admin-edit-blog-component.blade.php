<div>
                                 <!-- Banner Start -->
  <section id="banner-section" class="">
    <div class="overlay">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mb-10">
                    <h1 class="text-light">Edit Blog</h1>
                </div>
                <div class="col-md-12">
                    <ul class="d-flex justify-content-center">
                        <li><a href="/">Home</a></li>
                        <li><a class=""> - </a></li>
                        <li><a class="active" href="#!">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;"
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Blog
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.blogs') }}" style="color: whitesmoke"  class="btn btn-success pull-right"> All Blogs</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal"  wire:submit.prevent="updateBlog">
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Name</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Slug</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Blog Image</label>
                                <div class="col-md-8">
                                    <input type="file"  class="input-file" wire:model="newImage">
                                    @if($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">

                                    @else
                                        <img src="{{ asset('images/blogs') }}/{{ $image }}" width="120" alt="">

                                    @endif
                                    {{-- @error('newImage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable">Description</label>
                                <div class="col-md-8" wire:ignore>
                                    <textarea name="" id="description"  placeholder="Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable"></label>
                                <div class="col-md-8">
                                    <Button type="submit" class="btn btn-primary">Update</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var data = $('#description').val();
                        @this.set('description',data );
                    });
                }
            });
        });
    </script>
@endpush

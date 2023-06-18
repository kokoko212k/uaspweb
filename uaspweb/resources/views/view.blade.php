@extends('layouts.app')

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="category-heading">
                    <h4 class="mb-0">{!! $post->name !!}</h4>
                </div>
                    <div class="card card-shadow mt-4">
                        <div class="card-body post-description">
                                {!! $post-description !!}
                            </div>
                        </div>

                        <div class="commentar-area mt-04">
                            <div class="card body-body">
                                <h6 class="card-title">Leave a comment</h6>
                                <form action=""method="POST">
                                    <textarea name="comment_body" class="form_control"rows="3"required></textarea>
                                    <button type="submit" class = "btn btn-primary mt-3">Submit</button>
                                </form>                               
                        </div>

                        <div class="card card-body shadow-sm mt-3">
                            <div class="detail-area">
                                <h6 class="user-name mb-1">
                                    Anonym
                                    <small class="ms-3 text-primary">
                                </h6>
                                <p class="user-comment mb-1">
                                    First
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="btn btn-primary btn-sm me-2">Edit</a>
                            <a href="" class="btn btn-primary btn-sm me-2">Delete</a>
                        </div>
                    <div>
                </div>          

                        <div>
                            kolom komentar
                        </div>   
                    </div>
                    <div>
                        <div class = "col-md-04">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

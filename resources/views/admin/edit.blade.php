@extends('layouts.app')

@section('admin_content')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea',
          menubar: false,
          language: 'ar'
        });
      </script>

    <div class="card-header">تعديل مقالة</div>

    <div class="card-body">
    <form class="form-horizontal" action="{{url('/admin/update/'.$article->id)}}" method="post">
        {{ csrf_field() }}    
        <input type="hidden" name="_method" value="PUT"/>
        <div class="form-group">
        <input class="form-control" type="text" name="title" placeholder="العنوان هنا" value="{{$article->title}}">
        </div>
        <div class="form-group">
                <textarea name="body" id="mytextarea">{{$article->body}}</textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="تعديل"/>
            </div>
        </form>
    </div>
@endsection

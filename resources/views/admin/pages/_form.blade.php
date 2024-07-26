<div class="card-body custom-ekeditor">
    <div class="mb-3">
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $page->title ?? "" }}" class="form-control input-default ">
        @error('title')
            <span class="text-red">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ $page->slug ?? "" }}"  class="form-control input-default ">
        @error('slug')
            <span class="text-red">{{ $message }}</span>
        @enderror
    </div>
    <textarea id="ckeditor" name="content"  >{{ $page->content ?? "" }}</textarea>
    @error('content')
        <span class="text-red">{{ $message }}</span>
    @enderror
</div>
<div style="display: flex;justify-content: space-between;margin:30px 30px">
    <a href="{{ route('pages.index') }}" class="btn btn-primary" type="submit">Bekor qilish</a>
    <button class="btn btn-success" type="submit">Yuborish</button>
</div>
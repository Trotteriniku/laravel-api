@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project Create</h1>
        <p>section content</p>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required minlength="3" maxlength="200" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30"
                    rows="10">
    {{ old('body') }}
    </textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="link">Link</label>
                <input type="url" class="form-control @error('link') is-invalid @enderror" name="link" id="link"
                    value="{{ old('link') }}">
                @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="link">Type</label>
                <select class="form-control @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option
                            value="{{ $type->id }} {{ old('type_id', $type->type_id) == 'type_id' ? 'selected' : '' }}">
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
                @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="form-group">
                    <h6>Select technologies</h6>
                    @foreach ($technologies as $technology)
                        <div class="form-check @error('technologies') is-invalid @enderror">
                            <input type="checkbox" class="form-check-input" name="technologies[]"
                                value="{{ $technology->id }}"
                                {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach
                    @error('technologies')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="d-flex gap-3 ">
                <div class="mb-3">
                    <label for="preview">Preview</label>
                    <input type="file" class="form-control @error('preview') is-invalid @enderror" name="preview"
                        id="preview" value="{{ old('preview') }}">
                    @error('preview')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200" alt="">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>

        </form>
    </section>
@endsection

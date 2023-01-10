<div class="card mb-5">
    <div class="card-header bg-transparent">
        <h3 class="card-title"> {{ $language }} Post Content</h3>
    </div>

    <div class="card-body">

        <div class="form-group row">
            <label for="slug-source-{{ $locale }}" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" name="{{ $locale }}[title]" value="{{ old("$locale.title") }}" class="form-control @error("$locale.title") is-invalid @enderror" id="slug-source-{{ $locale }}" required placeholder="Enter site title">
                @error("$locale.title")
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="slug-target-{{ $locale }}" class="col-sm-2 col-form-label">Slug</label>
            <div class="col-sm-9">
                <input type="text" name="{{ $locale }}[slug]" value="{{ old("$locale.slug") }}" class="form-control @error("$locale.slug") is-invalid @enderror" id="slug-target-{{ $locale }}" required placeholder="Enter site slug">
                @error("$locale.slug")
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="inputDescription3" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-9">
                <textarea id="inputDescription3" name="{{ $locale }}[description]" class="editor-{{ $locale }} @error("$locale.description") is-invalid @enderror" style="height: 500px; border: 1px solid #eee">{{ old("$locale.description") }}</textarea>
                @error("$locale.description")
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    </div>
</div>


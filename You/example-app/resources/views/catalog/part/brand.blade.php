<div class="col-md-6 mb-4">
    <div class="card">
        <div class="card-header">
            <h3>{{ $brand->name }}</h3>
        </div>
        <div class="card-body p-0">
            <img src="{{Storage::url($brand->image)}}" alt="" class="img-fluid">
        </div>
        <div class="card-footer">
            <a href="{{ route('catalog.brand', ['slug' => $brand->slug]) }}"
               class="btn btn-dark">Перейти в раздел</a>
        </div>
    </div>
</div>


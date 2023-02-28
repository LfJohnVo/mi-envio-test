<div class="card">
    @include('livewire.create-product')
    <div class="card-body pb-2">
        <h5 class="card-title pb-2">Productos</h5>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-outline p-8 d-inline" wire:ignore>
                    <input type="text" id="form12" class="form-control" wire:model="searchTerm" />
                    <label class="form-label" for="form12">Buscar ... </label>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-outline p-8 d-inline">
                    <select class="form-select form-select-sm" aria-label="Precio minimo" wire:model="minPrice">
                        <option value="" selected>Precio minimo</option>
                        @foreach ($montos as $item)
                            <option value="{{ $item->precio }}">$ {{ $item->precio }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-outline p-8 d-inline">
                    <select class="form-select form-select-sm" aria-label="Precio maximo" wire:model="maxPrice">
                        <option value="" selected>Precio maximo</option>
                        @foreach ($montos as $item)
                            <option value="{{ $item->precio }}">$ {{ $item->precio }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="btn btn-sm btn-info" data-mdb-toggle="modal" data-mdb-target="#createDataModal">
                    <i class="fa fa-plus"></i> Agregar producto
                </div>
            </div>
        </div>
        <div class="progress-bar" wire:loading>
            <div class="progress-bar-value"></div>
        </div>
        <br>
        <table class="table align-middle mb-0 pb-2 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://png.pngtree.com/png-vector/20190115/ourmid/pngtree-vector-package-icon-png-image_319707.jpg"
                                    alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $item->nombre }}</p>
                                    <p class="text-muted mb-0">Identificador: {{ $item->id }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $item->descripcion }}</p>
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">$ {{ $item->precio }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $this->productos->links() }}
    </div>
</div>

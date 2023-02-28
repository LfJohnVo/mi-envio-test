<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" tabindex="-1" aria-labelledby="createDataModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">

                            <input type="text" id="nombre" wire:model.lazy="nombre" class="form-control" />
                            <label class="form-label" for="nombre">Nombre</label>

                        @error('nombre')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">

                            <input type="number" id="precio" wire:model.lazy="precio" class="form-control" />
                            <label class="form-label" for="precio">Precio</label>

                        @error('precio')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">

                            <textarea class="form-control" id="descripcion" wire:model.lazy="descripcion" rows="4"></textarea>
                            <label class="form-label" for="descripcion">Descripción</label>

                        @error('descripcion')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('closeModal', event => {
        $('#createDataModal').modal('hide');
    })
</script>

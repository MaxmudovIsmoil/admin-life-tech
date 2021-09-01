<div class="modal fade" id="edit{{ $c->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="edit-model-Lavel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-model-Lavel">{{ 'Harajat turini tahrirlash' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('cost.update',[$c->id]) }}" class="js_cost_modal_form form-group">
                @csrf
                {{ method_field('PUT') }}

                <div class="modal-body text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name{{ $c->id }}">Nomi</label>
                            <input type="text" name="name" id="name{{ $c->id }}" class="form-control" value="{{ $c->name }}" >
                            <div class="valid-feedback text-danger name_error">Ma'lumotni kiriting!</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-3 pb-0">
                    <input type="submit" value="Saqlash" class="js_add_modal_btn_save btn btn-success btn-square">
                    <button type="button" class="btn btn-secondary btn-square" data-dismiss="modal">Bekor qilish</button>
                </div>
            </form>
        </div>
    </div>
</div>

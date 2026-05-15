<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
    <main>
        <form id="aboutForm" method="POST" class="mt-4" action="{{ route('admin.disponibility.create') }}">
            @csrf
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label>Descrição</label>
                    <textarea class="form-control" required
                        name="description">{{ $disponibility?->description ?? '' }}</textarea>
                </div>
            </div>

            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label>Badges</label>
                    <input type="text" class="form-control" required name="badges"
                        value="{{ $disponibility?->badges ?? '' }}">
                </div>
            </div>

            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label>Link</label>
                    <input type="text" class="form-control" required name="link"
                        value="{{ $disponibility?->link ?? '' }}">
                </div>
            </div>
            <div class="form-row mr-3 ml-3 mt-3">
                <button class="btn btn-primary ml-auto" type="button" data-toggle="modal"
                    data-target="#exampleModal">Concluído</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Salvar alterações</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Você tem certeza que deseja salvar estas alterações?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="confirmSubmit">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <script>
        document.getElementById('confirmSubmit').addEventListener('click', function () {
            document.getElementById('aboutForm').submit();
        });
    </script>
</x-layouts::gest>
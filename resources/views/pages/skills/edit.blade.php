<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
    <main>
        <h1>Habilidades - Editar</h1>
        <form id="aboutForm" class="mt-4" method="POST" action="{{route('admin.skills.update', ['id' => $skill->id])}}">
            @csrf
            @method('PUT')
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" value="{{ $skill->name }}" required name="name">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="percentage">Porcentagem</label>
                    <input type="number" class="form-control" value="{{ $skill->percentage }}" required
                        name="percentage">
                </div>
                <label for="type">Tipo</label>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option disabled>Selecione</option>
                    <option value="frontend" @if ($skill->type === "frontend") selected @endif>Frontend
                    </option>
                    <option value="ferramentas" @if ($skill->type === "ferramentas") selected @endif>
                        Ferramentas</option>
                    <option value="frameworks" @if ($skill->type === "frameworks") selected @endif>Frameworks
                    </option>
                </select>
            </div>
            </div>
            <div class="w-full d-flex justify-content-end mr-3 ml-3">
                <button type="button" class="btn btn-primary mb-4 mt-3 btn-warning" data-toggle="modal"
                    data-target="#exampleModal" href="#">Editar</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Salvar edições</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Você tem certeza que deseja salvar estas edições?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary btn-warning" id="confirmSubmit">Salvar</button>
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
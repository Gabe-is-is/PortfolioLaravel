<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
    <main>
        <h1>Habilidades - Criar</h1>
        <form id="aboutForm" class="mt-4" method="POST" action="{{ route('admin.skills.store') }}">
            @csrf
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" required name="name">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="percentage">Porcentagem</label>
                    <input type="number" class="form-control" required name="percentage">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="type">Tipo</label>
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option selected disabled>Selecione</option>
                        <option value="frontend">Frontend</option>
                        <option value="ferramentas">Ferramentas</option>
                        <option value="frameworks">Frameworks</option>
                    </select>
                </div>
            </div>
            <div class="w-full d-flex justify-content-end mr-3 ml-3">
                <button type="button" class="btn btn-primary mb-4 text-light" href="#" data-toggle="modal"
                    data-target="#exampleModal">Criar</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Criar Habilidade</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Você tem certeza que deseja criar esta Habilidade?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="confirmSubmit">Criar</button>
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
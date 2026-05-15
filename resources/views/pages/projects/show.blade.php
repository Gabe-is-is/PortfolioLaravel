<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
    <main>
        <h1>Projetos - Editar</h1>
        <form class="mt-4">
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" value="{{ $project->name }}" readonly required name="name">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="description">Descrição</label>
                    <input type="text" class="form-control" value="{{ $project->description }}" readonly required name="description">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="link_demo">Link Demo</label>
                    <input type="text" class="form-control" value="{{ $project->link_demo }}" readonly required name="link_demo">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="link_code">Link Código</label>
                    <input type="text" class="form-control" value="{{ $project->link_code }}" readonly required
                        name="link_code">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="alt">Alt</label>
                    <input type="text" class="form-control" value="{{ $project->images->first()->alt }}" readonly required name="alt">
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="imageble">Imagem</label>
                    <input type="file" class="form-control" value="" required name="imageble" disabled>
                </div>
            </div>
            <div class="w-full d-flex justify-content-end mr-3 ml-3">
                <a class="btn btn-primary mb-4 text-light" href="{{ route('admin.projects.index') }}">Voltar</a>
            </div>
        </form>
    </main>
</x-layouts::gest>
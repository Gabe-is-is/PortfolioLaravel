<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
    <main>
        <h1>Habilidades - Editar</h1>
        <form class="mt-4">
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" value="{{ $skill->name }}" required name="name" disabled>
                </div>
            </div>
            <div class="form-row ml-3 mr-3">
                <div class="col-md-12 mb-3">
                    <label for="percentage">Porcentagem</label>
                    <input type="number" class="form-control" value="{{ $skill->percentage }}" required
                        name="percentage" disabled>
                </div>
                <label for="type">Tipo</label>
                <select class="form-select" aria-label="Default select example" name="type" disabled>
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

            <div class="w-full d-flex justify-content-end mr-3 mt-3 ml-3">
                <a type="submit" class="btn btn-primary mb-4 text-light" href="{{ route('admin.skills.index') }}">Voltar</a>
            </div>
        </form>
    </main>
</x-layouts::gest>
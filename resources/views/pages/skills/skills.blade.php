<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
    <main class="mt-4 ml-3 mr-3 mb-4">
        <div class="w-full d-flex justify-content-end">
            <a class="btn btn-primary mb-4 text-light" href="{{ route('admin.skills.create') }}">
                Criar Nova Habilidade
            </a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Porcentagem</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <th scope="row">
                            #{{ $skill->id }}
                        </th>
                        <td>
                            {{ $skill->name }}
                        </td>
                        <td>
                            {{ $skill->percentage }}%
                        </td>
                        <td>
                            {{ $skill->type }}
                        </td>
                        <td>
                            <div class="d-flex flex-nowrap gap-2">
                                <a href="{{ route('admin.skills.show', ['id' => $skill->id]) }}">
                                    <button class="btn btn-primary">
                                        Visualizar
                                    </button>
                                </a>
                                <a href="{{ route('admin.skills.edit', ['id' => $skill->id]) }}">
                                    <button class="btn btn-warning">
                                        Editar
                                    </button>
                                </a>
                                <form action="{{ route('admin.skills.destroy', ['id' => $skill->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal{{ $skill->id }}">
                                        Deletar
                                    </button>
                                    <div class="modal fade" id="deleteModal{{ $skill->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        Confirmar exclusão
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">
                                                            &times;
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Você tem certeza que deseja deletar esta Habilidade?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        Cancelar
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        Confirmar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-layouts::gest>
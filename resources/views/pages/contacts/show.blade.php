<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.dashboard>
    </x-compo.admin.dashboard>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>
<main>
    <main>
    <h1>Visualização de Mensagens de Contato</h1>
    <form class="mt-4">
        <div class="form-row ml-3 mr-3">
            <div class="col-md-12 mb-3">
                <label for="nome">nome</label>
                 <input type="text" class="form-control" required readonly name="nome" value="{{ $contactsShow->name }}">
            </div>
        </div>
        <div class="form-row ml-3 mr-3">
            <div class="col-md-12 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" required readonly name="email" value="{{ $contactsShow->email }}">
            </div>
        </div>
        <div class="form-row ml-3 mr-3">
            <div class="col-md-12 mb-3">
                <label for="assunto">assunto</label>
                <input type="text" class="form-control" required readonly name="assunto" value="{{ $contactsShow->subject }}">
            </div>
        </div>
        <div class="form-row ml-3 mr-3">
            <div class="col-md-12 mb-3">
                <label for="mensagem">mensagem</label>
                <input type="text" class="form-control" required readonly name="mensagem" value ="{{ $contactsShow->message }}">
            </div>
        </div>
    </form>
</main>
</x-layouts::gest>
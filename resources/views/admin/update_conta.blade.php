<form  name="contaUpdate" action="{{ route('admin.profileUpdate') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Usuário</label>
        <input type="text" class="form-control" id="name"
               name="name" value="{{ auth()->user()->name }}">
        @if($errors->has('name'))
            <span class="badge badge-danger space-error-bg">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
        @if($errors->has('email'))
            <span class="badge badge-danger space-error-bg">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua nova senha">
        @if($errors->has('password'))
            <span class="badge badge-danger space-error-bg">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
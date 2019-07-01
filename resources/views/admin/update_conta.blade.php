<form  name="contaUpdate" action="{{ route('admin.profileUpdate') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Nome usuário</label>

        <div class="col-md-8">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                   name="name" value="{{ auth()->user()->name }}" autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <span class="badge badge-danger space-error-bg">{{ $errors->first('name') }}</span>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

        <div class="col-md-8">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ auth()->user()->email }}">

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <span class="badge badge-danger space-error-bg">{{ $errors->first('email') }}</span>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

        <div class="col-md-8">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                   name="password">

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                     <span class="badge badge-danger space-error-bg">{{ $errors->first('password') }}</span>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Repete Senha</label>

        <div class="col-md-8">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
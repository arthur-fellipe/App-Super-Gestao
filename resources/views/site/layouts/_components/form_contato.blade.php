<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    @if($errors->has('telefone'))
        {{ $errors->first('telefone') }}
    @endif
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    @if($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    @if($errors->has('motivo_contato'))
        {{ $errors->first('motivo_contato') }}
    @endif
    <br>
    <textarea name="mensagem" value="{{ old('mensagem') }}" placeholder="Preencha aqui a sua mensagem" class="{{ $classe }}"></textarea>
    @if($errors->has('mensagem'))
        {{ $errors->first('mensagem') }}
    @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
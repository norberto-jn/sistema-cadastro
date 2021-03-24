@extends('layout/layout')
@section('conteudo')
    <div class="col-md-8 offset-md-2">
        <form method="POST" action="Cadastrar">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="nome" placeholder="Nome" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Telefone</label>
                <input type="text" class="form-control" id="telefone"  name="telefone" placeholder="9 9999-9999" onkeyup="mascaraTelefone()" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Senha</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="senha" placeholder="12345678Abc" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Data de Nascimento</label>
                <div class="form-row">
                    <div class="col-sm-4">
                        <select id="dia" class="form-control" name="dia" required>
                            {{--  faz ciclo para retorna todos os dias  --}}
                            @for($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select id="mes" class="form-control" name="mes" required>
                            {{--  faz ciclo para retorna todos os meses  --}}
                            @for($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select id="ano" class="form-control" name="ano" required>
                            {{--  Retorna os ultimos 100 anos   --}}
                            @for($i = date('Y'); $i >= date('Y')-100; $i--)
                                <option value="{{ $i }}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-success" value="Cadastrar" onclick="return validacaoFormulario()">
        </form>
        <br><br>

        {{--  retorna o link para ediçao  --}}
        @if(isset($link))
            <script>
                alert("Registro feito com sucesso")
            </script>
            <div class="alert alert-success" role="alert">
                <a href="{{ $link }}">http://SistemaCadastro.test/Editar_id={{ $dadoBD->id_cliente}}</a>
            </div>
        @endif
    </div>
@stop

@extends('layout/layout')
@section('conteudo')
    @foreach($clienteBD as $cliente)
        @if($cliente->id_cliente==$id)
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="Atualizar">
                    @csrf
                    <input type="text" value={{ $cliente->id_cliente}} name="id" style="display:none;">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name="nome" value="{{ $cliente->nome_cliente }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="{{ $cliente->email_cliente }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone</label>
                        <input type="text" class="form-control" id="telefone"  name="telefone" placeholder="9 9999-9999" value="{{$cliente->telefone_cliente}}" onkeyup="mascaraTelefone()" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Senha</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="senha" value="{{ substr($cliente->senha_cliente,0,10)}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data de Nascimento</label>
                        <div class="form-row">
                            <div class="col-md-4">
                                <select id="dia" class="form-control" name="dia" required>
                                    @for($i = 1; $i <= 31; $i++)
                                        {{--  confere o valor buscado no banco e seleciona  --}}
                                        @if($i==substr($cliente->data_nasc_cliente,8,2))
                                            <option selected>{{ $i }}</option>
                                        @else
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select id="mes" class="form-control" name="mes" required>
                                    @for($i = 1; $i <= 12; $i++)
                                        {{--  confere o valor buscado no banco e seleciona  --}}
                                        @if($i==substr($cliente->data_nasc_cliente,5,2))
                                            <option selected>{{ $i }}</option>
                                        @else
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select id="ano" class="form-control" name="ano" required>
                                    @for($i = date('Y'); $i >= date('Y')-100; $i--)
                                        {{--  confere o valor buscado no banco e seleciona  --}}
                                        @if($i==substr($cliente->data_nasc_cliente,0,4))
                                            <option selected>{{ $i }}</option>
                                        @else
                                            <option value="{{ $i }}">{{$i}}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Salvar" onclick="return validacaoFormulario()">
                </form>
            </div>
        @endif
    @endforeach
@stop

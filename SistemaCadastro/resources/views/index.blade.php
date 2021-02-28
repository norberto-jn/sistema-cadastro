@extends("layout/layout")
@section("conteudo")
    <?php
        //a variavel (cliente) recebe os dados da consulta do banco de dados
        $cliente=$dados;
    ?>
    {{--  Tabela de aprentaçao de Clientes  --}}
    <table class="table tabelaUsuarios">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Senha</th>
                <th scope="col" colspan="2">Nascimento</th>
            </tr>
        </thead>
        <tbody>
            {{--  Retorna todos os clientes Registrados no banco  --}}
            @foreach($cliente as $cliente)
                <tr>
                    <th scope="row">{{ $cliente->id_cliente }}</th>
                    <td>{{ $cliente->nome_cliente }}</td>
                    <td>{{ $cliente->email_cliente }}</td>
                    <td>{{ $cliente->telefone_cliente }}</td>
                    <td>{{ substr($cliente->senha_cliente,0,7) }}</td>
                    <td>
                        {{--  formata a  data de EUA para Brasil  --}}
                        {{
                             substr($cliente->data_nasc_cliente,8,2)."/".
                             substr($cliente->data_nasc_cliente,5,2)."/".
                             substr($cliente->data_nasc_cliente,0,4)
                        }}
                    </td>
                    <td><a type="button" class="btn btn-primary" href="Editar_id={{$cliente->id_cliente}}">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

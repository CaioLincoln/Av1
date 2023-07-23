@extends('layouts.cabecalho')

@section('title', 'carro')

@section('content')

    @if (session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

    <script>
        $(document).ready(function() {
            $(".delete-btn").on("click", function() {
                if (confirm("Tem certeza que deseja deletar este registro?")) {
                    $("#deleteForm").submit();
                }
            });
        });
    </script>
    
    <div class="container">
        <div id="cria-carro" class="mt-4">
            <h2>Adicionar novo Carro</h2>
            <form action="/carro" method="POST">
                <div class="form-row">
                    @csrf

                    <div class="form-group col-md-6">
                        <label for="placa">Placa:</label>
                        <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="modelo">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cor">Cor:</label>
                        <select class="form-control" name="cor" id="cor">
                            <option value="Branco" selected>Branco</option>
                            <option value="Preto">Preto</option>
                            <option value="Prata">Prata</option>
                            <option value="Cinza">Cinza</option>
                            <option value="Vermelho">Vermelho</option>
                            <option value="Azul">Azul</option>
                            <option value="Verde">Verde</option>
                            <option value="Bege">Bege</option>
                            <option value="Marrom">Marrom</option>
                            <option value="Amarelo">Amarelo</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="valor">Valor:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">R$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Quantia" id="valor" name="valor"
                                placeholder="1.000">
                            <div class="input-group-append">
                                <span class="input-group-text">,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-primary" value="Adicionar carro">
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-4">
            <form id="busca-carro" class="col-md-6 offset-md-3" action="">
                <input type="text" id="busca" name="busca" class="form-control" placeholder="Buscar carro">
            </form>
        </div>
    </div>

    <table class="container-lg">
        @foreach ($carros as $carro)
            <tr>
                <td class=".col-md-2">
                    {{ $carro->placa }}
                </td>
                <td class="col-md-2">
                    {{ $carro->modelo }}
                </td>
                <td class="col-md-2">
                    {{ $carro->cor }}
                </td>
                <td class="col-md-2">
                    R${{ $carro->valor }}
                </td>
                <td class=".col-md-2">
                    <a href="/carroEdit/{{ $carro->id }}" class="btn btn-primary edit-btn">
                        <ion-icon name="create-outline"></ion-icon> Editar
                    </a>
                </td>
                <td class=".col-md-2">
                    <form action="/carro/{{ $carro->id }}" method="POST" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon> Deletar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection

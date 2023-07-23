@extends('layouts.cabecalho')

@section('title', 'carro')

@section('content')

    <form action="/carroUpdate/{{ $carro->id }}" method="POST">
        {!! csrf_field() !!}
        {{ method_field('PUT') }}
        <script>
            var corCarro = "{{ $carro->cor }}";
    
            var selectCor = document.getElementById("cor");
            for (var i = 0; i < selectCor.options.length; i++) {
                if (selectCor.options[i].value === corCarro) {
                    selectCor.selectedIndex = i;
                    break;
                }
            }
        </script>
        <div class="form-group col-md-6">
            <label for="placa">Placa:</label>
            <input type="text" class="form-control" id="placa" name="placa" value="{{ $carro->placa }}">
        </div>

        <div class="form-group col-md-6">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $carro->modelo }}">
        </div>

        <div class="form-group col-md-6">
            <label for="cor">Cor:</label>
            <select class="form-control" name="cor" id="cor">
                <option value="Branco">Branco</option>
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
                    value="{{ $carro->valor }}">
                <div class="input-group-append">
                    <span class="input-group-text">,00</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection

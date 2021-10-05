@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <h3>Deletar Equipamento</h3>
    <form action={{route('motor.destroy', ['motor' => $mtr->id])}} method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <div>
            <h3>Deletar Motor:</h3>
        </div>
        <table>
        <tr>
                <td><label for="nome">Tag:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="tag" name="tag" value="{{$mtr->tag}}" disabled></td>
        </tr>
        <tr>
                <td><label for="potencia">Potência:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="potencia" name="potencial" value="{{ $mtr->potencia }}" disabled></td>
        </tr> 
        <tr>
                <td><label for="polos">Núm. Pólos:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="polos" name="polos" value="{{$mtr->polos}}" disabled></td>
        </tr>
        <tr>
                <td><label for="carcaça">Carcaça:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="carcaça" name="carcaça" value="{{$mtr->carcaça}}" disabled></td>
        </tr>
        <tr>
                <td><label for="fabricante">Fabricante:</label></td>
                <td><input style="width: 300px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="fabricante" name="fabricante" value="{{$mtr->fabricante}}" disabled></td>
        </tr>


    </table>
    <br>
    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do motor?</div>
    <div class="form-group">
      <input type="submit" name="delete_mtr" value="Deletar Motor">
      <input type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection
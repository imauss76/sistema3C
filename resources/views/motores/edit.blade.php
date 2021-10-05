@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">

    <br>
    <form action={{route('motor.update', ['motor' => $mtr])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <table>
           
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$mtr->id}}>
        
        <div>
        <h3>Editar Motor:</h3>
        </div>
        <div>
            <label for="tag">Tag:</label>
            <input type="text" id="tag" name="tag" value="{{$mtr->tag}}">
        </div>

       

        </table>
        <br>
      
            <div class="form-group">
                <input type="submit" name="save_mtr" value="Atualizar motor">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection
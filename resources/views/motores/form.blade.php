<form action={{route('motor.store')}} method="post">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <table>

        <tr>
            <td><label for="tag"><strong>Tag:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="tag" name="tag" placeholder="Digite a Tag."></td>   
        </tr>

        <tr>
            <td><label for="potencia"><strong>Potência (CV):</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="potencia" name="potencia" placeholder="Digite a Potência do motor (CV)."></td>
                
        </tr>

        <tr>
            <td><label for="polos"><strong>Núm. Pólos:</strong></label>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="polos" name="polos" placeholder="Digite o núm. de pólos.">
        </tr>

        <tr>
            <td><label for="carcaça"><strong>Carcaça:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="carcaça" name="carcaça" placeholder="Digite a carcaça."></td>
        </tr>

        <tr>
            <td><label for="fabricante"><strong>Fabricante:</strong></label></td>
            <td><input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 2px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="fabricante" name="fabricante" placeholder="digite o fabricante."></td>
        </tr>

    </table>    

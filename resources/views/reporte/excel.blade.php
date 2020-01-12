<table>
    <thead>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>{{ number_format($reporte->sum('kg'),0,",",".") }} Kg</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <thead style="background-color: red !important;">
    <tr>
        <th>Talonario</th>
        <th>Nro. Talonario</th>
        <th>Operador</th>
        <th>Maquina</th>
        <th>Razón Social</th>
        <th>Campo</th>
        <th>Frutas</th>
        <th>Variedad</th>
        <th>Bandeja</th>
        <th>Cantidad Bandejas</th>
        <th>Kilogramos</th>
        <th>Cantidad Combustible</th>
        <th>Hectareas</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reporte as $r)
        <tr>
            <td>{{ strtoupper($r->user->talonario->nombre) }}</td>
            <td>{{ strtoupper($r->nro_talonario ? $r->nro_talonario : 'N/T' ) }}</td>
            <td>{{ strtoupper($r->user->nombre) }}</td>
            <td>{{ strtoupper($r->faena->maquina->nombre) }}</td>
            <td>{{ strtoupper($r->faena->productor->r_social) }}</td>
            <td>{{ strtoupper($r->faena->campo->nombre_campo) }}</td>
            <td>{{ strtoupper($r->frutas->nombre_fruta) }}</td>
            <td>{{ strtoupper($r->variedad->nombre_variedad) }}</td>
            <td>{{ strtoupper($r->bandeja->nombre ? $r->bandeja->nombre : 'N/T' ) }}</td>
            <td>{{ strtoupper($r->cantidad_bandeja) }}</td>
            <td>{{ number_format($r->kg,0,",",".") }} Kg</td>
            <td>{{ $r->cantidad_combustible }}</td>
            <td>{{ $r->hectareas }}</td>
        </tr>
    @endforeach
    </tbody>
    
</table>
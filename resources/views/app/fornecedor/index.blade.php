<h3>fornecedor</h3>

{{--fica o comentario--}}

{{-- @dd($fornecedores); --}}
{{--
@if(count($fornecedores) > 0 && count($fornecedores)< 10)
    <h3>Exite informaçoes no array</h3>
@elseif(count($fornecedores)>10)
    <h3>varios fornecedores</h3>
@else
    <h3>nao tem nada aqui arrombado </h3>
@endif --}}


{{-- operador @unless === negação --}}

<p>fornecedor: {{ $fornecedores[0]['nome']}}</p>
<p>Status: {{ $fornecedores[0]['status']}}</p>

{{-- @if($fornecedores[0]['status'] === 'N')
    fornecedor inativo
@endif --}}

{{-- @unless($fornecedores[0]['status'] === 'S')
    fornecedor falso
@endunless --}}

{{-- @isset === retorna true estiver definida --}}



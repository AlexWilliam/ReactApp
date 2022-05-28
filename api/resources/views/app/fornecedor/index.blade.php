<h3>Fornecedor</h3>
{{-- Isto é um comentário do blade
    Este comentário será descartado pelo interpretador --}}

@php
    // sintaxe padrao
    /*if(true){

    }elseif(!true){

    }else{
        
    }*/
@endphp

{{-- ISSET --}}
@isset($fornecedores)
{{-- Sintaxe do blade para if/elseif/else --}}
@if(count($fornecedores)>0 && count($fornecedores)<10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores)>10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif

{{-- Unless é o contrario do if/else --}}
{{-- Unless executa se o retorno for false --}}
{{--@for($a=0;isset($fornecedores[$a]);$a++)
    Fornecedor = {{$fornecedores[$a]["Nome"]}}
    <br />
    Status = {{$fornecedores[$a]["Status"]}}
    <br />
    CNPJ = {{$fornecedores[$a]["CNPJ"] ?? "CNPJ não preenchido"}}
    <br />
    Telefone = ({{$fornecedores[$a]["DDD"] ?? ""}}) {{$fornecedores[$a]["Telefone"] ?? ""}}
    <br />
    Cidade = 
    @switch($fornecedores[$a]["DDD"])
        @case("51")
            São Paulo/SP
            @break
        @case("84")
            Rio de Janeiro/RJ
            @break
        @case("87")
            Porto Alegre/RS
            @break
        @default
            Estado não informado
    @endswitch
    <br />
    <hr />
@endfor--}}
{{--@php $a = 0 @endphp
@while(isset($fornecedores[$a]))
    Fornecedor = {{$fornecedores[$a]["Nome"]}}
    <br />
    Status = {{$fornecedores[$a]["Status"]}}
    <br />
    CNPJ = {{$fornecedores[$a]["CNPJ"] ?? "CNPJ não preenchido"}}
    <br />
    Telefone = ({{$fornecedores[$a]["DDD"] ?? ""}}) {{$fornecedores[$a]["Telefone"] ?? ""}}
    <br />
    Cidade = 
    @switch($fornecedores[$a]["DDD"])
        @case("51")
            São Paulo/SP
            @break
        @case("84")
            Rio de Janeiro/RJ
            @break
        @case("87")
            Porto Alegre/RS
            @break
        @default
            Estado não informado
    @endswitch
    <br />
    <hr />
    @php $a++ @endphp
@endwhile--}}
@foreach($fornecedores as $indice => $fornecedor)
    Fornecedor = {{$fornecedor["Nome"]}}
    <br />
    Status = {{$fornecedor["Status"]}}
    <br />
    CNPJ = {{$fornecedor["CNPJ"] ?? "CNPJ não preenchido"}}
    <br />
    Telefone = ({{$fornecedor["DDD"] ?? ""}}) {{$fornecedor["Telefone"] ?? ""}}
    <br />
    Cidade = 
    @switch($fornecedor["DDD"])
        @case("51")
            São Paulo/SP
            @break
        @case("84")
            Rio de Janeiro/RJ
            @break
        @case("87")
            Porto Alegre/RS
            @break
        @default
            Estado não informado
    @endswitch
    <br />
    <hr />
@endforeach

{{--@isset($fornecedores[0]["CNPJ"])
    CNPJ = {{$fornecedores[0]["CNPJ"]}}
    @empty($fornecedores[0]["CNPJ"])
        VAZIO
    @endempty
<br />
@endisset
{{-- Sintaxe IF --}}
@if($fornecedores[0]["Status"]=="S")
    {{--Fornecedor Ativo --}}
@endif

{{-- Sintaxe UNLESS --}}
@unless($fornecedores[0]["Status"]=="S")
    {{--Fornecedor Inativo--}}
@endunless

{{-- Exibir arrays no front --}}
@dd($fornecedores)

@endisset

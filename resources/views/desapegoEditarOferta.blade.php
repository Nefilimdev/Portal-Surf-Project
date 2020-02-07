@extends('layouts.templateSurf')

@section('titulo')
    Desapego - Cadastro de Oferta
@endsection

@section('conteudo')


        <section class="desapegoCadastro container">

           
        @if(isset($ofertas))
            <!-- formulario de cadastro de oferta -->
            <form action="{{route('ofertaDesapego.update', $ofertas->id)}}" method="POST" class="shadow-lg p-4 formDesapego"enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            
            @if(session('erro'))
                <div class="alert alert-danger">
                    {{session('erro')}}
                </div>
            @endif
           

                <h1 class="mt-2 text-center" id="ofertaCadastroTopo">Editar Oferta</h1>
                <br>

            <div class="col-12">
                <br>
                <p><b>Dados da oferta</b></p>

                    <div class="form-group mt-3">
                        <label for="text">Descrição do produto:</label>
                        <input type="text" class="form-control" id="ofertaDescr" name="descriptionProduct" placeholder="Ex. Prancha com pouco uso">
                    </div>
                    <div class="form-group mt-3">
                    <label for="text">Preço do produto:</label>
                        <input type="number" class="form-control" name="priceProduct" placeholder="Não precisa de virgula" />
                    </div>
                    <br>

                    <p><b>Local de retirada do produto</b></p>
                    <div class="form-inline mt-3">
                        <div style="margin-right:24px;">
                            <label for="text" class="mr-3">Estado:</label>
                            <input type="text" class="form-control" id="ofertaEstado" name="withdrawalState" placeholder="Ex. SP">
                        </div>
                        <div style="margin-right:25px;">
                            <label for="text" class="ml-3 mr-3">Cidade:</label>
                            <input type="text" class="form-control" id="ofertaCidade" name="withdrawalCity" placeholder="Ex. São Vicente">
                        </div>
                        <div class=>
                            <label for="text" class="ml-3 mr-3">Bairro/ Região:</label>
                            <input type="text" class="form-control" id="ofertaBairro" name="withdrawalNeighborhood" placeholder="Ex. Parque City">
                        </div>
                        <div class=>
                            <label for="text" class="ml-3 mr-3">Telefone:</label>
                            <input type="text" class="form-control" id="ofertaBairro" name="phone" placeholder="Colocar DDD na frente">
                        </div>
                    </div>
                    <br><br>

                
                    <p><b>Fotos do produto</b></p>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" placeholder="Imagem do Produto" />
                    </div>
                    <br><br>

                    <!-- botoes -->
                    <input type="submit" value="Atualizar" class="btn encontreBotao">
                    <a href="desapegoOfertasUsuario" class="btn btn-danger">Cancelar</a>

                </form>
           
            @elseif(isset($result))
            
            <div class="row">
            <div class="col-md-12">
                @if(isset($result))
                <!-- pergunta se a variavel acima existe -->
                    @if($result)
                    <!-- pergunta se a variavel eh verdadeira -->
                        <h1>Atualização realizada com sucesso.</h1>
                        @else
                        <h1>Erro na atualização.</h1>
                    @endif
                @endif
            @endif
            </div>
        </div>
        </section>

        <!-- botao topo -->
        <div class="container text-center mt-5 mb-5">
            <a href="#ofertaCadastroTopo" class="btn encontreBotao">Topo</a>
        </div>

   

@endsection
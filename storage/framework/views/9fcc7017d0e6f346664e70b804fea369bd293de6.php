<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>

        <!-- Favicon -->
        <link href="<?php echo e(URL::asset('img/favicon.ico')); ?>" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo e(URL::asset('js/ajax.js')); ?>"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" 
                   title="Página Inicial" style="margin-top: -3px">
                    <img src="<?php echo e(URL::asset('img/logo.png')); ?>"></a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Panel</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="#">Usuários</a></li>                                               
                            <li><a href="<?php echo e(route('product.index')); ?>">Produtos</a></li>                                               
                            <li><a href="#">Computadores</a></li>
                            <li><a href="#">Administradores</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-th"></span> 
                            <span id="underline">Utilitários</span>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li>
                                <a href="#">Backup BD</a>
                            </li>                             
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li class="dropdown">
                        <a href="#" style="text-decoration: none">
                            <img src="<?php echo e(URL::asset('img/rafael.png')); ?>" 
                                 class="img-circle" width="26" height="26" 
                                 style="margin-top: -3px"> 
                            <span id="underline">Rafael Calearo</span> 
                        </a>                      
                    </li>
                    <li><a href="#" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav>        
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Produto</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="<?php echo e(route('product.index')); ?>">Produtos</a></li>                  
                            <li class="active">Alteração</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
                    <br> 
                    <form method="post" 
                          action="<?php echo e(route('product.update', $product->id)); ?>" 
                          enctype="multipart/form-data">
                        <?php echo method_field('put'); ?>

                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" 
                                       class="form-control" 
                                       value="<?php echo e($product->name or old('name')); ?>"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="text" 
                                       accept=".gif,.jpg,.png"
                                       class="form-control"
                                       data-toggle="tooltip" 
                                       data-placement="top"
                                       title="Usar arquivo com dimensões 300x300 
                                       - JPG, GIF, PNG"
                                       value="<?php echo e($product->imagem or old('imagem')); ?>">
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <input type="text" name="description" 
                                       class="form-control" 
                                       value="<?php echo e($product->description or old('description')); ?>"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quantity">Quantidade</label>
                                <input type="number" name="quantity" 
                                       class="form-control" 
                                       value="<?php echo e($product->quantity or old('quantity')); ?>"
                                       required>
                            </div>    
                        </div>                 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Preço</label>
                                <input type="text" name="price"                               
                                       class="form-control"
                                       value="<?php echo e($product->price or old('price')); ?>"
                                       required>
                            </div>
                        </div>                       
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\wamp64\www\primeiroProjeto\resources\views/alter-produto.blade.php ENDPATH**/ ?>
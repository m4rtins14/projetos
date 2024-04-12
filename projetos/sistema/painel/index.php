<?php 
@session_start();
require_once('../conexao.php');
if(@$_SESSION['nome'] == ""){	
	echo '<script>window.location="../index.php"</script>';
	exit();
}

require_once("cabecalho.php");
?>

<form id="form-config">
<div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nome Site</label>
			<input name="nome" type="text" class="form-control" placeholder="Nome do Site" value="<?php echo $nome_sistema ?>" required>
		</div>
	</div>
    <div class="row">
    <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">ID</label>
                <input name="id" type="text" class="form-control" placeholder="ID" value="<?php echo $id ?>" required>
            </div>
        </div>
    <div class="row">
        <div class="col-mds-4">
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $email_sistema ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput4" class="form-label">Senha</label>
			<input name="senha" type="text" class="form-control" placeholder="Senha" value="<?php echo $senha ?>" required>
		</div>
	</div>
    <div class="row">
    <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">Telefone</label>
                <input name="telefone" type="number" class="form-control" placeholder="Telefone" value="<?php echo $telefone_sistema ?>" required>
            </div>
        </div>
    <div class="row">
        <div class="col-mds-4">
            <div class="mb-3">
                <label for="exampleFormControlInput6" class="form-label">Endereço</label>
                <input name="endereço" type="text" class="form-control" placeholder="Endereço" value="<?php echo $endereco_sistema ?>" required>
            </div>
        </div>
    </div>

    <div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput7" class="form-label">Logo</label>
			<input name="Logo" type="imagem" class="form-control" placeholder="Logo" value="<?php echo $logo ?>" required>
		</div>
	</div>
    <div class="row">
    <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput8" class="form-label">Icone</label>
                <input name="icone" type="img" class="form-control" placeholder="ID" value="<?php echo $id ?>" required>
            </div>
        </div>
    <div class="row">
        <div class="col-mds-4">
            <div class="mb-3">
                <label for="exampleFormControlInput9" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $email_sistema ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput4" class="form-label">Senha</label>
			<input name="senha" type="text" class="form-control" placeholder="Senha" value="<?php echo $senha ?>" required>
		</div>
	</div>
    <div class="row">
    <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">Telefone</label>
                <input name="telefone" type="number" class="form-control" placeholder="Telefone" value="<?php echo $telefone_sistema ?>" required>
            </div>
        </div>
    <div class="row">
        <div class="col-mds-4">
            <div class="mb-3">
                <label for="exampleFormControlInput6" class="form-label">Endereço</label>
                <input name="endereço" type="text" class="form-control" placeholder="Endereço" value="<?php echo $endereco_sistema ?>" required>
            </div>
        </div>
    </div>

    <script type="text/javascript">
	

$("#form-config").submit(function () {
	$('#mensagem').text('...Carregando!')

    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: "scripts/salvar-config.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {                        
            	location.reload();
            	$('#mensagem').addClass('text-success')
            	$('#mensagem').text(mensagem)
            } else {
                $('#mensagem').addClass('text-danger')
                $('#mensagem').text(mensagem)
            }


        },

        cache: false,
        contentType: false,
        processData: false,

    });

});


</script>
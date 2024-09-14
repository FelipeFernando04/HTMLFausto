<?php
$title = 'Contato';
include 'includes/header.php';
?>

<main>
        <div>
            <tituloContato>
                <h1 id="clique_exercicio">Contato</h1>
            </tituloContato>
            <textoContato>
                <p>Fale com a nossa empresa</p>
            </textoContato>
            <div>
                <form action="" method="get" id="form_exercicio">
                    <div>
                        <label for="form_nome">Digite seu nome</label>
                        <input type="text" id="form_nome" name="nome">
                    </div>
                    <div>
                        <label for="form_email">Digite seu e-mail</label>
                        <input type="text" id="form_email" name="email">
                    </div>
                    <div>
                        <label for="form_mensagem">Digite sua mensagem</label>
                        <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                    </div>
                    <button type="submit" id="botao">Enviar um recadinho</button>
                    
                </form>
</main>

<?php include 'includes/footer.php'; ?>
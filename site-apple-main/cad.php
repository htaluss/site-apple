<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $email = $_GET["email"];
            $telefone = $_GET["tel"];

            echo "Olá <b>". $nome . "</b>,<br>";
            echo "Email: <b>" . $email . "</b><br>";
            echo "Número de telefone: <b>" . $telefone . "</b><br><br>"; 

            echo "Seja muito bem-vindo(a) à nossa comunidade de entusiastas da Apple!
                    <br><br>
                Estamos entusiasmados em tê-lo(a) conosco para compartilhar as últimas novidades, dicas exclusivas e eventos especiais sobre o mundo da Apple. <br>
                Aqui, você ficará por dentro de tudo que envolve tecnologia, inovação e entretenimento que só a Apple pode oferecer.
                    <br><br>
                Ao se inscrever em nossas novidades de recreação, você pode esperar receber:
                    <br>
                <ul>
                    <li>Lançamentos Exclusivos: Fique por dentro dos novos produtos e serviços Apple antes de todo mundo.</li>
                    <li>Dicas e Truques: Aproveite ao máximo seus dispositivos Apple com nossas dicas e tutoriais.
                    <li>Eventos e Promoções: Participe de eventos especiais e aproveite promoções exclusivas para nossos assinantes.
                    <li>Notícias e Atualizações: Receba as últimas notícias e atualizações sobre o ecossistema Apple.
                </ul>
                Não se esqueça de seguir-nos nas redes sociais e ficar atento aos nossos emails para não perder nenhuma novidade!
                    <br>
                Obrigado por se juntar a nós. Estamos ansiosos para compartilhar essa jornada tecnológica com você.
                    <br><br>
                Atenciosamente,
                    <br><br>
                Alunos de ADS da FICR";
        ?>
    </main>
</body>
</html>
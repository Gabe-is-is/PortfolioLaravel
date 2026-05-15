<?php

// $sql = "SELECT * FROM habilidades AS h WHERE tipo = 'frontend' ORDER BY nome ASC ";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// $frontends = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $sql = "SELECT * FROM habilidades AS h WHERE tipo = 'ferramentas' ORDER BY nome ASC ";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// $ferramentas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $sql = "SELECT h.nome FROM habilidades AS h WHERE h.tipo = 'frameworks' ORDER BY h.nome ASC ";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// $frameworks = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<section class="habilidades">
    <div class="englobano2">
        <h2> Minhas Habilidades</h2>
        <div class="purple-block-3"></div>
        <p class="subtitulo2">Tecnologias e ferramentas com as quais trabalho para criar soluções web de alta
            qualidade</p>
    </div>
    <div class="coluna">
        <div class="div-do-frontend">
            <h3>Frontend</h3>
            <div class="linguagensfront">
                    <div class="linguagensfront2">
                        <div class="teste1"><span class="languagetitle">HTML</span>
                            <span class="percentage">50%</span>
                        </div>
                        <div class="barraroxa">
                            <div class="barraroxahtml5" style="width: 30%;"></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="div-do-ferramentas">
            <h3>Ferramentas & Outros</h3>
            <div class="linguagensfront">
                <div class="linguagensfront2">
                    <div class="teste1"><span class="languagetitle">CSS</span>
                        <span class="percentage">20%</span>
                    </div>
                    <div class="barraroxa">
                        <div class="barraroxahtml5" style="width: 80%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tecnologias">
        <h2>Outras Tecnologias</h2>
        <ul>
            <li class="tecno">framework</li>
        </ul>
    </div>
</section>
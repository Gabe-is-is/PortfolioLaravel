{{--
<?php

$sql = "SELECT
            p.id AS projeto_id,
            p.nome AS projeto_nome,
            p.descricao AS projeto_descricao,
            p.alt_text AS projeto_alt_text,
            p.link_demo AS projeto_link_demo,
            p.link_codigo AS projeto_link_codigo,

            ip.id AS imagem_id,
            ip.caminho AS imagem_caminho,

            hp.habilidades_id,
            
            h.nome AS habilidade_nome,
            h.id AS habilidade_id
        FROM projetos p
        LEFT JOIN imagens_projetos ip ON p.id = ip.projeto_id
        LEFT JOIN habilidades_projetos hp ON p.id = hp.projetos_id
        LEFT JOIN habilidades h ON h.id = hp.habilidades_id";
$stmt = $pdo->prepare($sql);

$stmt->execute();
$projetos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?> --}}



<section class="projects">
    <div class="englobano">
        <h2>Meus Projetos</h2>
        <div class="purple-block-2"></div>
        <p class="subtitulo">Confira alguns dos projetos que desenvolvi, demonstrando minhas habilidades e
            experiência</p>
    </div>
    <div class="projects-grid">
        {{--
        <?php foreach ($projetos as $projeto): ?> --}}
        <div class="projects-grid-first">
            <div class="projects-grid-first-border">
                <div class="projects-grid-first-border-image_1">
                    {{-- <img src="<?php echo $projeto[" imagem_caminho"] ?>" alt="Projeto 1" width="658" height="192"
                    loading="lazy"> --}}
                </div>
                <div class="projects-grid-first-border-texts">
                    <div>
                        {{-- <h3>
                            <?php echo $projeto["projeto_nome"] ?>
                        </h3> --}}
                    </div>
                    <div>
                        {{-- <h4>
                            <?php echo $projeto["projeto_descricao"] ?>
                        </h4> --}}
                    </div>
                </div>
                <!-- <div class="projects-grid-first-border-tags">
                        <div class="projects-grid-first-border-tags_1">
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>React</h4>
                            </div>
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>Next.js</h4>
                            </div>
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>Tailwind CSS</h4>
                            </div>
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>Stripe</h4>
                            </div>
                        </div>
                    </div> -->
                <div class="projects-grid-first-border-btns">
                    {{-- <a target="_blank" rel="noopener noreferrer" class="inline-flex1" href="<?php echo $projeto["
                        projeto_link_codigo"] ?>"><svg --}} xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                            </path>
                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                        </svg>Código</a>
                    {{-- <a target="_blank" rel="noopener noreferrer" class="inline-flex1" href="<?php echo $projeto["
                        projeto_link_demo"] ?>"><svg --}} xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        </svg>Demo</a>
                </div>
            </div>
        </div>
        {{--
        <?php endforeach; ?> --}}
    </div>
    <div class="projects-last_link">
        <button>
            <a target="_blank" rel="noopener noreferrer" href="https://github.com/Gabe-is-is"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                    </path>
                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                </svg>Ver mais no GitHub
            </a>
        </button>
    </div>
</section>

<!-- alterado -->
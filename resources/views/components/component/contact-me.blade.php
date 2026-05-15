<section class="section-do-contate-me">
            <div class="contate-me-container">
                <div class="contate-me">
                    <div class="englobano2">
                        <h2>Entre em Contato</h2>
                        <div class="purple-block-3"></div>
                        <p class="subtitulo3">Tem um projeto em mente ou quer conversar sobre uma oportunidade? Entre em
                            contato comigo!</p>
                    </div>
                    <div class="coluna20">
                        <div class="contate-me-grid-1">
                            <div class="contate-me-border">
                                <div class="informações-de-contato-contate-me">
                                    <h2>Informações de Contato</h2>
                                </div>
                                <div>
                                    <div class="localizacao-contate-me"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="svg-contate-me">
                                            <path
                                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                            </path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <div class="localizacao-contate-me-texts">
                                            <h4>Localização</h4>
                                            <p>location</p>
                                        </div>
                                    </div>
                                    <div class="email-contate-me"><svg xmlns="http://www.w3.org/2000/svg" width="20px"
                                            height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="svg-contate-me">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                        <div class="localizacao-contate-me-texts">
                                            <h4>Email</h4>
                                            <p>email</p>
                                        </div>
                                    </div>
                                    <div class="telefone-contate-me"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="svg-contate-me">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <div class="localizacao-contate-me-texts">
                                            <h4>Telefone</h4>
                                            <p>phone</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="horario-contate-me">
                                    <h4>Horário de Atendimento</h4>
                                    <p>schedule</p>
                                </div>
                            </div>
                        </div>
                        <div class="contate-me-grid-2">
                            <div class="contate-me-grid-2-border">
                                <div class="padding-contate-me">
        <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
                                    <form method="POST" action="{{ route('admin.contacts.create') }}">
                                        <div class="contate-me-grid-3">
                                            <div class="contate-me-nome-container">
                                                <label for="name">Nome</label>
                                                <input class="contate-me-input-1-2" placeholder="Seu nome" name="name">
                                            </div>
                                            <div class="contate-me-email-container">
                                                <label for="email">Email</label>
                                                <input class="contate-me-input-1-2" placeholder="seu.email@exemplo.com"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="contate-me-assunto-container">
                                            <label for="subject">Assunto</label>
                                            <input class="contate-me-input-3" placeholder="Assunto da mensagem"
                                                name="subject">
                                        </div>
                                        <div class="contate-me-mensagem-container">
                                            <label for="message">Mensagem</label>
                                            <textarea name="message" placeholder="Sua mensagem..." rows="6"></textarea>
                                        </div>
                                        <button class="contate-me-botao" type="submit"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-send mr-2 h-4 w-4">
                                                <path
                                                    d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                                </path>
                                                <path d="m21.854 2.147-10.94 10.939"></path>
                                            </svg>Enviar Mensagem</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
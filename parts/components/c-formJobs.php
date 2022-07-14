<div class="c-contactForm">
    <form action="#" class="c-form" id="jobsForm">
        <div class="c-form__hero">
            <div class="c-form__group u-fw100">
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="jobsForm__nome">Nome</label>
                        <input type="text" placeholder="Digite seu nome" id="jobsForm__nome">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="jobsForm__email">E-mail</label>
                        <input type="email" placeholder="Digite seu e-mail" id="jobsForm__email">
                    </div>
                </div>
            </div>
            <div class="c-form__group u-fw50">
                <div class="c-form__field">
                    <div class="c-field --confirmRead">
                        <input type="checkbox" id="jobsForm__privacy">
                        <label for="jobsForm__privacy">Li e concordo com os <a href="privacidade">Termos de Uso</a></label>
                    </div>
                </div>
                <div class="c-form__field">
                    <div class="c-field --btn">
                        <button class="c-btn --m --secondary --stroke">
                            <div class="c-btn__content">
                                <i class="c-btn__icon"><?php include('media/img/icons/icon_mail.svg');?></i>
                                <span class="c-btn__caption">Enviar</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="c-form__group u-fw50">
                <div class="c-form__field">
                    <div class="c-field --file">
                        <label for="jobsForm__file">Anexe seu currículo (PDF, DOC, DOCX ou TXT)</label>
                        <div class="c-field__file">
                            <input type="file" placeholder="Anexe" class="js-field__attach" id="jobsForm__file">
                            <input type="text" placeholder="Selecione o seu currículo" class="js-field__text">
                            <?php include('media/img/icons/icon_attach.svg')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-form__feedback">
            <?php
            $feedbackForm = array('extraClass' => '');
            include('parts/components/c-formFeedbacks.php');
            ?>
        </div>
    </form>
</div>
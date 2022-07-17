<div class="c-contactForm">
    <form action="#" class="c-form" id="contactForm">
        <div class="c-form__hero">
            <div class="c-form__group u-fw100">
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">Nome</label>
                        <input type="text" placeholder="Digite seu nome">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">E-mail</label>
                        <input type="email" placeholder="Digite seu e-mail">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --input">
                        <label for="#">Telefone</label>
                        <input type="text" placeholder="(XX) XXXXX-XXXX">
                    </div>
                </div>
                <div class="c-form__field u-fw50">
                    <div class="c-field --select">
                        <label for="#">Estado</label>
                        <select name="semlabel" id="formId_semlabel">
                            <option value="selecione" selected disabled>Selecione</option>
                            <option value="ac">Acre</option>
                            <option value="se">Sergipe</option>
                            <option value="to">Tocantins</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="c-form__group u-fw50 --last">
                <div class="c-form__field">
                    <div class="c-field --select">
                        <label for="#">Assunto</label>
                        <select name="semlabel" id="formId_semlabel">
                            <option value="selecione" selected disabled>Selecione o assunto do seu interesse</option>
                            <option value="ac">Lorem Ipsum</option>
                            <option value="se">Lorem Ipsum</option>
                            <option value="to">Lorem Ipsum</option>
                        </select>
                    </div>
                </div>
                <div class="c-form__field">
                    <div class="c-field --confirmRead">
                        <input type="checkbox" id="formId_option2">
                        <label for="formId_option2">Li e concordo com os <a href="privacidade">Termos de Uso</a></label>
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
                    <div class="c-field --textarea">
                        <label for="#">Telefone</label>
                        <textarea name="#" id="#" placeholder="Mensagem"></textarea>
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
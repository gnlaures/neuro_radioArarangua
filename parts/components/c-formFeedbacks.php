<div class="c-feedbackForm <?php echo $feedbackForm["extraClass"] ?>">
    <div class="c-feedbackForm__status --success u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_done.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text">Feedback de sucesso!</div>
        <div class="c-feedbackForm__status__btn">
            <a href="#" class="c-btn --m --primary">
                <div class="c-btn__content">
                    <i class="c-btn__icon"><?php include('media/img/icons/icon_mail.svg');?></i>
                    <span class="c-btn__caption">Enviar outro e-mail</span>
                </div>
            </a>
        </div>
    </div>
    <div class="c-feedbackForm__status --fail u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_error.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text">Feedback de erro!</div>
        <div class="c-feedbackForm__status__btn">
            <a href="#" class="c-btn --m --secondary">
                <div class="c-btn__content">
                    <span class="c-btn__caption">Tentar Novamente</span>
                </div>
            </a>
        </div>
    </div>
    <div class="c-feedbackForm__status --load u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_load.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text">Enviando...</div>
    </div>
</div>
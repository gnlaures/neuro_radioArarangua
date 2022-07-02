<div class="c-feedbackForm <?php echo $feedbackForm["extraClass"] ?>">
    <div class="c-feedbackForm__status --success u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_done.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text">Feedback de sucesso!</div>
        <div class="c-feedbackForm__status__btn">
            <a href="#" class="c-btn --stroke --gray u-ttu">Enviar outro e-mail</a>
        </div>
    </div>
    <div class="c-feedbackForm__status --fail u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_error.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text">Feedback de erro!</div>
        <div class="c-feedbackForm__status__btn">
            <a href="#" class="c-btn --stroke --gray u-ttu">Tentar Novamente</a>
        </div>
    </div>
    <div class="c-feedbackForm__status --load u-dnone">
        <div class="c-feedbackForm__status__icon">
            <?php include('media/img/icons/icon_formFeedback_load.svg'); ?>
        </div>
        <div class="c-feedbackForm__status__text">Enviando...</div>
    </div>
</div>
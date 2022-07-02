<div class="c-contactForm">
    <form action="#" class="c-form --fullBorder" id="contactForm">
        <ul class="c-form__fieldsHero --pad10">
            <li class="c-form__field u-fw100">
                <input id="contactForm_motivo" type="text" name="motivo" class="field" placeholder="Motivo do Contato" required>
            </li>
            <li class="c-form__field u-fw100">
                <input id="contactForm_nome" type="text" name="nome" class="field" placeholder="Nome" required>
            </li>
            <li class="c-form__field u-fw100">
                <input id="contactForm_email" type="email" name="email" class="field" placeholder="E-mail" required>
            </li>
            <li class="c-form__field u-fw70">
                <input id="contactForm_phone" type="tel" name="phone" class="field" placeholder="Telefone" required>
            </li>
            <li class="c-form__field u-fw30">
                <input id="contactForm_consumidor" type="text" name="consumidor" class="field" placeholder="Consumidor Final" required>
            </li>
            <li class="c-form__field u-fw70">
                <input id="contactForm_cidade" type="text" name="cidade" class="field" placeholder="Cidade" required>
            </li>
            <li class="c-form__field u-fw30 --select">
                <div class="selectBox">
                    <select name="estado" id="contactForm_estado" class="field" required>
                        <option value="">Estado</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="ap">Amapá</option>
                        <option value="am">Amazonas</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espirito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="ro">Rondônia</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="sp">São Paulo</option>
                        <option value="se">Sergipe</option>
                        <option value="to">Tocantins</option>
                    </select>
                    <div class="inputBox">
                        <input type="text" placeholder="Estado" readonly>
                    </div>
                </div>
            </li>
            <li class="c-form__field u-fw100">
                <textarea id="contactForm_mensagem" name="mensagem" class="field" placeholder="Digite sua mensagem" required></textarea>
            </li>
            <li class="c-form__field u-fw70 --check --checkbox">
                <ul class="checkHero">
                    <li>
                        <label for="contactForm_privacy">Li e concordo com o <a href="privacy">Aviso de Privacidade</a></label>
                        <input type="checkbox" id="contactForm_privacy">
                    </li>
                </ul>
            </li>
            <li class="c-form__field u-fw30 --file --noLabel">
                <input id="contactForm_file" class="inputAttach" name="#" type="file" required>
                <input class="inputText" type="text" placeholder="Anexar Arquivo">
            </li>
            <li class="c-form__field u-fw60 --captcha">
                <img src="media/img/content/captcha.png" alt="Captcha">
            </li>
            <li class="c-form__field u-fw40 --btn">
                <button class="c-btn --black --big u-ttu">Enviar</button>
            </li>
        </ul>
        <?php
            $feedbackForm = array('extraClass' => '');
            include('parts/components/c-feedbackForm.php');
        ?>
    </form>
</div>
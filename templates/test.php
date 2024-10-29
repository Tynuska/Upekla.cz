<?php
if (isset($_POST['send']) && $_POST['i7'] == 1) {

    include dirname(__FILE__) . '/../inc/PHPMailer.php';
    $post = $_POST;

    $provozovna = $post['i4'] == 1 ? 'Příbram' : 'Písek';

    $message = '<html><body>';
    $message .= '<h1>Objednávka</h1>';
    $message .= 'Jméno Přijmení : ' . $post['i1'];
    $message .= '<br/>Email : ' . $post['i2'];
    $message .= '<br/>Tel. : ' . $post['i3'];
    $message .= '<br/>Datum doručení : ' . $post['i5'];
    $message .= '<br/>Provozovna : ' . $provozovna;
    $message .= '<br/>Zpráva : ' . $post['i6'];
    $message .= '</body></html>';

    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('objednavky@upekla.cz', 'Upekla.cz');
    $mail->addAddress('jan.korecky@rvlt.digital');
    $mail->addAddress('pavol@revolta.cz');
    if (filter_var($post['i2'], FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($post['i2'], $post['i1']);
    }
    $mail->Subject = 'Objednávka - Upekla.cz';
    $mail->msgHTML($message);

    if ($mail->send()) {
        header('Location: ?odeslano');
        exit;
    }
}

/* if(isset($_POST['send']) && $_POST['i7'] == 1){
  $post = $_POST;
  $to  = 'info@upekla.cz';


  $subject = 'Objednávka - Upekla.cz';

  $headers = "From: formular@upekla.cz" . "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  $provozovna = $post['i4'] == 1 ? 'Příbram' : 'Písek';

  $message = '<html><body>';
  $message .= '<h1>Objednávka</h1>';
  $message .= 'Jméno Přijmení : '. $post['i1'];
  $message .= '<br/>Email : '. $post['i2'];
  $message .= '<br/>Tel. : '. $post['i3'];
  $message .= '<br/>Provozovna : '. $provozovna;
  $message .= '<br/>Zpráva : '. $post['i6'];
  $message .= '</body></html>';
  mail($to, $subject, $message, $headers);
  header('Location: ?odeslano');
  exit;
  } */
?>
<div class="content content--bg8">
    <div class="section section--midi">
        <h1 class="headline headline--center">Napište nám</h1>

        <div class="contact">
            <div class="contact__main">
                <h2 class="headline">Objednat<br />dobroty</h2>
                <?php if (isset($_GET['odeslano'])) { ?>
                    <p>Vaše zpráva byla úspěšně odeslána. Děkujeme.</p>
                <?php } else { ?>
                    <form action="" method="post" novalidate="novalidate" id="message">
                        <div class="form">
                            <div class="form__row">
                                <label class="form__label" for="i1">Jméno a příjmení</label>
                                <input type="text" id="i1" name="i1" value="" class="form__input" required="required"/>
                            </div>

                            <div class="form__row">
                                <label class="form__label" for="i2">E-mail</label>
                                <input type="text" id="i2" name="i2" value="" class="form__input" required="required"/>
                            </div>

                            <div class="form__row">
                                <label class="form__label" for="i3">Telefon</label>
                                <input type="text" id="i3" name="i3" value="+420 " class="form__input" required="required"/>
                            </div>

                            <div class="form__row">
                                <label class="radio">
                                    <input type="radio" id="i4" name="i4" value="1" checked="checked" />
                                    <span class="radio__mark"></span>
                                    <span class="radio__txt">Vyzvednout dobroty v Příbrami</span>
                                </label>

                                <label class="radio">
                                    <input type="radio" id="i4" name="i4" value="2" />
                                    <span class="radio__mark"></span>
                                    <span class="radio__txt">Vyzvednout dobroty v Písku</span>
                                </label>
                            </div>

                            <div class="form__row">
                                <label class="form__label" for="i5">Datum dodání</label>
                                <input type="text" id="i5" name="i5" value="" class="form__input" required="required"/>
                            </div>

                            <div class="form__row">
                                <label class="form__label">O jaké dobroty máte zájem?</label>
                                <textarea id="i6" name="i6" cols="45" rows="5" class="form__textarea" required="required"><?php
                                    if (isset($_GET['p'])) {
                                        echo $config->get_product($_GET['p']);
                                    }
                                    ?></textarea>
                            </div>

                            <div class="form__row">
                                <label class="checkbox">
                                    <input type="checkbox" id="i7" name="i7" value="1" required="required"/>
                                    <span class="checkbox__mark"></span>
                                    <span class="checkbox__txt">Přečetl jsem si <a href="zasady-ochrany-soukromi">zásady&nbsp;ochrany&nbsp;soukromí</a></span>
                                </label>
                            </div>

                            <div class="form__btns">
                                <button type="submit" class="btn btn--submit" name="send">Odeslat objednávku</button>
                            </div>

                        </div>
                    </form>
                <?php } ?>

            </div><!-- /contact__main -->

            <div class="contact__aside js-lazy" data-src="images/contact-bg.jpg"></div>

        </div><!-- /contact -->

    </div>

    <div class="content__bg js-lazy" data-src="images/bg-8.jpg"></div>
</div><!-- /content -->


<div class="content content--dark content--bg4">
    <div class="section">
        <div class="find-us js-animation-group">
            <div class="find-us__prologue">
                <p class="promo">Cukrárny</p>
                <h2>Kde nás<br />najdete</h2>
                <p>Cukrárny najdete v našich<br />domovských městech,<br />se kterými nás pojí silné pouto.</p>

                <div class="find-us__btns">
                    <a href="cukrarny#pribram" class="btn btn--midi btn--t-center">v Příbrami</a>
                    <a href="cukrarny#pisek" class="btn btn--midi btn--t-center">v Písku</a>
                </div>
            </div>

            <div class="find-us__fig">
                <div class="find-us__img js-animated-item" data-animation-delay="500">
                    <img src="#" data-src="images/cukrarna-1.jpg" alt="" class="js-lazy" />
                </div>

                <div class="find-us__img find-us__img--secondary js-animated-item" data-animation-delay="1000">
                    <img src="#" data-src="images/cukrarna-2.jpg" alt="" class="js-lazy" />
                </div>

            </div>


        </div><!-- /find-us -->
    </div>

    <div class="content__bg js-lazy" data-src="images/bg-4.png" ></div>
</div><!-- /content -->
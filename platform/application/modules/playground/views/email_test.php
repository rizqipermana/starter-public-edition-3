<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2014
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

?>

        <section>

            <div class="container">

                <div class="page-header">
                    <h1>Email Test</h1>
                </div>

                <div class="row">

                    <div class="col-md-12">

<?php

if ($this->settings->get('mailer_enabled')) {

    file_partial('messages');

?>

                        <h4>Sending a test message to the notification email address<h4/>

                        <?php echo form_open('', 'method="post" role="form"'); ?>

                            <div class="form-group">
                                <img id="captcha_image"
                                    src="<?php echo $this->captcha->src.'?nocache='.rand(100000000, 999999999); ?>"
                                    class="thumbnail"
                                    style="cursor: pointer;"
                                    i18n:title="captcha.tip"
                                />
                            </div>

                            <div class="form-group">
                                <div class="input-group" style="width: 100%; max-width: 300px;">
                                    <input type="text" id="contact_form_captcha" name="contact_form_captcha" class="form-control" i18n:placeholder="captcha.label|* " maxlength="<?php echo $this->captcha->length; ?>" />
                                </div>
                            </div>


                            <div class="form-group">
                                <span class="help-block"><i18n>ui_required_fields_note</i18n></span>
                            </div>

                            <div class="form-group">
                                <button id="contact_form_submit" name="contact_form_submit" type="submit" class="btn btn-primary btn-lg">
                                    <i id="contact_form_submit_icon" class="fa fa-check fa-fw"></i>
                                    <i id="contact_form_processing" class="fa fa-spinner fa-spin fa-fw" style="display: none;"></i>
                                    Send
                                </button>
                            </div>

                        <?php echo form_close(); ?>

                        <script type="text/javascript">
                        //<![CDATA[

                        function refresh_captcha() {

                            $('#captcha_image').attr('src', '<?php echo $this->captcha->src; ?>' + '?nocache=' + Math.random()*999999999);
                            $('#contact_form_captcha').val('');
                        }

                        $(function () {

                            $('#captcha_image').on('click', function() {
                                refresh_captcha();
                            });

                        });
                        //]]>
                        </script>

<?php

} else {

?>

                        <div class="status alert alert-warning">
                            <i18n>mailer_disabled</i18n>
                        </div>

<?php

}

?>

                    </div>

                </div>

            </div>

        </section>

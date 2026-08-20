
<section id="click_call_modal" style="display: none;z-index: 12">
    <div class="container">
        <div class="row contact-form-section click_modal_bg">
            <div onclick="close_click_call_modal()" style="position: absolute;right: 0; top: 0;padding: 10px;z-index: 13">
                X
            </div>
            <div class="col-md-12 col-sm-12 click_call_content" >
                <div class="section-header" style="margin-bottom: 0">
                    <h3 style="text-transform: none;text-align: center;font-size: 20px;margin-bottom: 0">Оставьте свой номер телефона для связи</h3>
                </div>
                <form id="contact-form" class="contactus-form">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" style="margin-bottom: 0">
                            <input type="text" name="contact-name" class="form-control" id="input_name" placeholder="Телефон" required="" style="margin-bottom: 0"/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" style="margin-bottom: 0">
                            <input type="submit" value="Отправить" id="btn_submit" title="Отправить" name="post" style="margin-bottom: 0">
                        </div>
                    </div>
                    <div id="alert-msg" class="alert-msg"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="click_call_modal_bg" onclick="close_click_call_modal()" style="display: none;">

</div>

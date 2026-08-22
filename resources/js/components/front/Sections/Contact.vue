<template>
    <section id="contact" class="block-section">
        <!--CONTACT TITLE-->
        <div class=" shape-bottom">
            <div class="bg-secondary block-title">
                <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">Контакты</h2>
                    <div class="title-icon"> <i class="fa fa-envelope-o"></i> </div>
                </div>
            </div>
        </div><!--END CONTACT TITLE-->


        <div class="contact-area">
            <div class="form-contact-area clearfix">
                <div class="inner-contact clearfix ">
                    <!--TABS CONTACT-->
                    <ul id="myTab" class="nav nav-tabs flat-nav-tabs" role="tablist">
                        <li class="active"><a href="#tab0" role="tab" data-toggle="tab">Оставить сообщение</a></li>
                        <li><a href="#tab1" role="tab" data-toggle="tab">Нанять меня</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content flat-tab-content">
                        <div class="tab-pane fade in active" id="tab0">
                            <form>
                                <div class="form-group">
                                    <label>Как к Вам обращаться (*)</label>
                                    <input type="text" class="form-control form-flat" id="contact_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email или телефон(*)</label>
                                    <input type="text" class="form-control form-flat" id="contact_email" required>
                                </div>
                                <div class="form-group">
                                    <label>Сообщение (*)</label>
                                    <textarea class="form-control form-flat" rows="8" id="contact_message" required></textarea>
                                </div>
                                <div class="form-group " id="contact_button">
                                    <a @click="sendContactForm()" class="btn btn-flat-solid primary-btn" >Отправить сообщение</a>
                                </div>
                                <div class="form-group">
                                    <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Пожалуйста подождите ...</div>
                                    <div class="message-submit error hidden"></div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab1">
                            <form enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Как к Вам обращаться (*)</label>
                                    <input type="text" class="form-control form-flat" id="hire_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email или телефон(*)</label>
                                    <input type="text" class="form-control form-flat" id="hire_email" required>
                                </div>
                                <div class="form-group">
                                    <label>Небольшое описание Вашего проекта (*)</label>
                                    <textarea class="form-control form-flat" id="hire_message" rows="8" required></textarea>
                                </div>
                                <div class="input-file-row">
                                    <label class="input-file">
                                        <input id="file" type="file" name="file[]" multiple>
                                        <span>Выберите файлы</span>
                                    </label>
                                    <div class="input-file-list"></div>
                                </div>


                                <div class="form-group" id="hire_button">
                                    <a @click="sendHireForm()" class="btn btn-flat-solid primary-btn">Отправить</a>
                                </div>

                                <div class="form-group">
                                    <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Пожалуйста подождите ...</div>
                                    <div class="message-submit error hidden"></div>
                                </div>
                            </form>
                        </div>
                    </div><!--End Tabs-->
                </div>
            </div>
            <div class="map-area">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A92f55cb8ead0a5b5dbd2872a875b140bc4108bb1609adf0143e8426efe3e022f&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>


    </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {
            dt:new DataTransfer()
        }
    },
    components: {},
    mounted() {


        $('.input-file input[type=file]').on('change', function(){
            let files_list = $(this).closest('.input-file').next();
            files_list.empty();

            for(var i = 0; i < this.files.length; i++){
                let new_file_input = '<div class="input-file-list-item">' +
                    '<span class="input-file-list-name">' + this.files.item(i).name + '</span>' +
                    '<a onclick="let name = $(this).prev().text();\n' +
                    '            let input = $(this).closest(\'.input-file-row\').find(\'input[type=file]\');\n' +
                    '            $(this).closest(\'.input-file-list-item\').remove();for(let i = 0; i < this.dt.items.length; i++){\n' +
                    '                if(name === this.dt.items[i].getAsFile().name){\n' +
                    '                    this.dt.items.remove(i);\n' +
                    '                }\n' +
                    '            }\n' +
                    '            input[0].files = this.dt.files;" style="color: red;padding: 3px;"><i class="fa fa-close"></i></a>' +
                    '</div>';
                files_list.append(new_file_input);
                this.dt.items.add(this.files.item(i));
            };
            this.files = this.dt.files;
        });
    },
    methods:{
        sendContactForm(){
            let contact_button = document.getElementById('contact_button');
            contact_button.style.display = 'none';
            let contact_name = document.getElementById('contact_name').value
            let contact_email = document.getElementById('contact_email').value
            let contact_message = document.getElementById('contact_message').value
            let data = {
                name:contact_name,
                email:contact_email,
                message:contact_message
            }
            axios.post('/api/send/contact/form',data)
                .then((res) => {
                    console.log(res.data)
                })
            setTimeout(() => {
                contact_button.style.display ="block"
            },3000)
        },
        sendHireForm(){
            let hire_button = document.getElementById('hire_button');
            hire_button.style.display = 'none';

            let name = document.getElementById('hire_name').value;
            let email = document.getElementById('hire_email').value;
            let message = document.getElementById('hire_message').value;
            let files = document.getElementById('file').files;
            let data = {
                name:name,
                email:email,
                message:message,
                files:files
            }

            axios.post('/api/send/hire/form',data,{headers: {
                'Content-Type': 'multipart/form-data'
            }})
                .then((res) => {
                    console.log(res.data)
                })

            setTimeout(() => {
                hire_button.style.display ="block"
            },3000)
        }
    }
})
</script>
<style scoped>
.input-file-row {
    display: inline-block;
}
.input-file {
    position: relative;
    display: inline-block;
}
.input-file span {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    text-decoration: none;
    font-size: 14px;
    vertical-align: middle;
    color: #000;
    border: 3px solid #000;
    border-radius: 0;
    text-align: center;
    background-color: #fafafa;
    line-height: 22px;
    padding: 10px 15px 10px 15px;
    box-sizing: border-box;
    margin: 0;
    transition: background-color 0.2s;
}
.input-file input[type=file] {
    position: absolute;
    z-index: -1;
    opacity: 0;
    display: block;
    width: 0;
    height: 0;
}

/* Focus */
.input-file input[type=file]:focus + span {
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}

/* Hover/Active */
.input-file:hover span {
    background-color: #000;
    color: #fff;
}
.input-file:active span {
    background-color: #000;
    color: #fff;
}

/* Disabled */
.input-file input[type=file]:disabled + span {
    background-color: #eee;
}

/* Список файлов */
.input-file-list {
    padding: 10px 0;
}
.input-file-list-item {
    margin-bottom: 10px;
}
</style>

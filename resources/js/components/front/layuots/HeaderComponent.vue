<template>
    <div class="remodal" data-remodal-id="modal">
        <button data-remodal-action="close" class="remodal-close"></button>
        <div id="modal_body">

        </div>
        <br>
    </div>
        <!-- Header -->
    <header class="header-main container-fluid no-padding">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Social -->
                    <div class="col-md-4 col-sm-4 col-xs-6 social">
                        <ul>
                            <li><a title="lang_button" @click.prevent="changeLanguage()" id="lang_button" style="text-decoration: none">EN</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
                        <router-link to="/" title="Logo">
                            <img :src="'/logo-big-blue.png'" alt="Web Site Technology" width="120" height="80"/>
                        </router-link>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 register">
                        <template v-if="this.$parent.successAuth === null">
                            <template v-if="this.$parent.lang === 'eng'">
                                <a @click="loginModal()" title="Login" style="margin: 5px" data-remodal-target="modal">Login</a>
                                <a @click="registerModal()" title="Register" data-remodal-target="modal">Register</a>
                            </template>
                            <template v-if="this.$parent.lang === 'rus'">
                                <a @click="loginModal()" title="Вход" style="margin: 5px" data-remodal-target="modal">Вход</a>
                                <a @click="registerModal()" title="Регистрация" data-remodal-target="modal">Регистрация</a>
                            </template>
                        </template>
                        <template v-else>
                            <a href="/home" :title="this.$parent.successAuth[0].name">{{ this.$parent.successAuth[0].name }}</a>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <HeaderNavMenuComponent ref="headerNavMenuComponent"/>
    </header>
</template>

<script>
    import HeaderNavMenuComponent from "@/components/front/layuots/HeaderNavMenuComponent.vue";
    export default {
        name: 'HeaderComponent',
        components: {
            HeaderNavMenuComponent
        },
        mounted() {
            this.checkAuth()
        },
        methods:{
            changeLanguage(){
                if(this.$parent.lang === 'eng'){
                    this.$parent.lang = 'rus'
                    document.getElementById('lang_button').innerHTML = 'RU'
                    this.$refs.headerNavMenuComponent.changeHeaderLinks(this.$parent.lang)
                    document.getElementById('modal_body').innerHTML = ''
                } else {
                    this.$parent.lang = 'eng'
                    document.getElementById('lang_button').innerHTML = 'EN'
                    this.$refs.headerNavMenuComponent.changeHeaderLinks(this.$parent.lang)
                    document.getElementById('modal_body').innerHTML = ''
                }
            },

            loginModal(){
                let html
                const csrf = document.querySelector('meta[name="csrf-token"]').content
                if(this.$parent.lang === 'eng'){
                    html = '<div class="row">' +
                        '<div class="col-md-12">' +
                        '<img src="/logo-big-blue.png" style="\n' +
                        '    width: 200px;\n' +
                        '    margin-bottom: 20px;\n' +
                        '"></div> ' +
                        '</div>' +
                        '<form method="POST" id="login" action="/login">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '       <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '           <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>\n' +
                        '           <div class="col-md-8">\n' +
                        '               <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>\n' +
                        '           </div>\n' +
                        '        </div>\n' +
                        '        <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '           <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>\n' +
                        '           <div class="col-md-8">\n' +
                        '               <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">\n' +
                        '           </div>\n' +
                        '        </div>\n' +
                        '        <div class="row mb-0">\n' +
                        '            <div class="col-md-4">\n' +
                        '            </div>\n' +
                        '            <div class="col-md-8" style="text-align: left">\n' +
                        '               <button type="submit" class="remodal-confirm">Login</button>\n' +
                        '            </div>\n' +
                        '        </div>\n' +
                        '    </form>'
                }
                if(this.$parent.lang === 'rus'){
                    html = '<div class="row">' +
                        '       <div class="col-md-12">' +
                        '           <img src="/logo-big-blue.png" style="\n' +
                        '    width: 200px;\n' +
                        '    margin-bottom: 20px;\n' +
                        '">' +
                        '       </div> ' +
                        '   </div>' +
                        '   <form method="POST" action="/login">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                 <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>\n' +
                        '                 <div class="col-md-6">\n' +
                        '                     <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>\n' +
                        '                 </div>\n' +
                        '             </div>\n' +
                        '             <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                  <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>\n' +
                        '                  <div class="col-md-6">\n' +
                        '                       <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">\n' +
                        '                  </div>\n' +
                        '             </div>\n' +
                        '             <div class="row mb-0">\n' +
                        '                  <div class="col-md-4">\n' +
                        '                  </div>\n' +
                        '                  <div class="col-md-8" style="text-align: left">\n' +
                        '                      <button type="submit" class="remodal-confirm">Войти</button>\n' +
                        '                  </div>\n' +
                        '              </div>\n' +
                        '          </form>'
                }
                document.getElementById('modal_body').innerHTML = html
            },
            registerModal(){
                let html
                const csrf = document.querySelector('meta[name="csrf-token"]').content
                if(this.$parent.lang === 'eng'){
                    html = '<div class="row">' +
                        '       <div class="col-md-12">' +
                        '           <img src="/logo-big-blue.png" style="\n' +
                        '    width: 200px;\n' +
                        '    margin-bottom: 20px;\n' +
                        '">' +
                        '       </div> ' +
                        '   </div>' +
                        '   <form method="POST" id="reg_form" action="/register" onsubmit="return registerValidator(event)">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '               <label for="reg_name" class="col-md-4 col-form-label text-md-end">Name</label>\n' +
                        '               <div class="col-md-8">\n' +
                        '                    <input id="reg_name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>\n' +
                        '               </div>\n' +
                        '               <div class="col-md-12" id="reg_name_alert" style="display: none;color: #ff6400">The name must be between 3 and 50 characters long.</div>'+
                        '            </div>\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                <label for="reg_email" class="col-md-4 col-form-label text-md-end">Email Address</label>\n' +
                        '                <div class="col-md-8">\n' +
                        '                     <input id="reg_email" type="email" class="form-control" name="email" required autocomplete="email">\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                 <label for="reg_password" class="col-md-4 col-form-label text-md-end">Password</label>\n' +
                        '                 <div class="col-md-8">\n' +
                        '                      <input id="reg_password" type="password" class="form-control" name="password" required autocomplete="new-password">\n' +
                        '                  <a href="#" class="password-control"></a>' +
                        '</div>\n' +
                        '               <div class="col-md-12" id="reg_pass_alert" style="display: none;color: #ff6400">The password must be between 8 and 50 characters long.</div>'+
                        '             </div>\n' +
                        '             <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                  <label for="reg_password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>\n' +
                        '                  <div class="col-md-8">\n' +
                        '                        <input id="reg_password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">\n' +
                        '                  </div>\n' +
                        '               <div class="col-md-12" id="reg_confirm_alert" style="display: none;color: #ff6400">The password and the password confirmation must match.</div>'+
                        '              </div>\n' +
                        '              <div class="row mb-0">\n' +
                        '                  <div class="col-md-4">\n' +
                        '                  </div>\n' +
                        '                  <div class="col-md-8" style="text-align: left">\n' +
                        '                      <button type="submit" class="remodal-confirm">Register</button>\n' +
                        '                  </div>\n' +
                        '              </div>\n' +
                        '      </form>';
                }
                if(this.$parent.lang === 'rus'){
                    html = '<div class="row">' +
                        '       <div class="col-md-12">' +
                        '           <img src="/logo-big-blue.png" style="\n' +
                        '    width: 200px;\n' +
                        '    margin-bottom: 20px;\n' +
                        '">' +
                        '       </div> ' +
                        '   </div>' +
                        '   <form method="POST" id="reg_form" action="/register" onsubmit="return registerValidator(event)">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '               <label for="reg_name" class="col-md-4 col-form-label text-md-end">Имя</label>\n' +
                        '               <div class="col-md-8">\n' +
                        '                    <input id="reg_name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>\n' +
                        '               </div>\n' +
                        '               <div class="col-md-12" id="reg_name_alert" style="display: none;color: #ff6400">Имя должно быть от 3 до 50 символов.</div>'+
                        '            </div>\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                <label for="reg_email" class="col-md-4 col-form-label text-md-end">Email</label>\n' +
                        '                <div class="col-md-8">\n' +
                        '                     <input id="reg_email" type="email" class="form-control" name="email" required autocomplete="email">\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '            <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                 <label for="reg_password" class="col-md-4 col-form-label text-md-end">Пароль</label>\n' +
                        '                 <div class="col-md-8">\n' +
                        '                      <input id="reg_password" type="password" class="form-control" name="password" required autocomplete="new-password">\n' +
                        '                  <a href="#" class="password-control"></a>' +
                        '</div>\n' +
                        '               <div class="col-md-12" id="reg_pass_alert" style="display: none;color: #ff6400">Пароль должен быть от 8 до 50 символов.</div>'+
                        '             </div>\n' +
                        '             <div class="row mb-3" style="margin-bottom: 10px">\n' +
                        '                  <label for="reg_password-confirm" class="col-md-4 col-form-label text-md-end">Подтверждение пароля</label>\n' +
                        '                  <div class="col-md-8">\n' +
                        '                        <input id="reg_password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">\n' +
                        '                  </div>\n' +
                        '               <div class="col-md-12" id="reg_confirm_alert" style="display: none;color: #ff6400">Пароль и подтверждение пароля должны совпадать.</div>'+
                        '              </div>\n' +
                        '              <div class="row mb-0">\n' +
                        '                  <div class="col-md-4">\n' +
                        '                  </div>\n' +
                        '                  <div class="col-md-8" style="text-align: left">\n' +
                        '                      <button type="submit" class="remodal-confirm">Зарегистироваться</button>\n' +
                        '                  </div>\n' +
                        '              </div>\n' +
                        '      </form>';
                }
                document.getElementById('modal_body').innerHTML = html
            },
            checkAuth(){
                let user_id = document.querySelector('meta[name="user_id"]').content
                if(user_id !== ''){
                    axios.post('/api/front/check_auth/' + user_id)
                        .then(res => {
                            this.$parent.successAuth = res.data
                        })
                }
            },

        }
    }
</script>

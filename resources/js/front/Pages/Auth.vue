<template>
<div>
    <!-- PageBanner -->
    <div class="container-fluid page-banner blogpost no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block">
                <div class="banner-content">
                    <h3>Login/Register</h3>
                    <ol class="breadcrumb">
                        <li><router-link to="/">Home</router-link></li>
                        <li class="active">Login/Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- PageBanner /- -->
    <div class="section-padding"></div>
    <div class="container">
        <div class="row contact-form-section">
            <div class="col-md-6 col-sm-6">
                <div class="section-header">
                    <h3>Login</h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="email" name="login-email" class="form-control" id="login-email" placeholder="Your E-mail" required=""/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="login-password" class="form-control" id="login-password" placeholder="Password"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="submit" value="Login" id="login_btn_submit" title="Send" name="post">
                    </div>
                </div>
                <div id="alert-msg" class="alert-msg"></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="section-header">
                    <h3>Register</h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="reg-name" class="form-control" id="reg-name" placeholder="Your Name*" required=""/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="email" name="reg-email" class="form-control" id="reg-email" placeholder="Your E-mail" required=""/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="reg-password" class="form-control" id="reg-password" placeholder="Password"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="confirm-reg-password" class="form-control" id="confirm-reg-password" placeholder="Confirm Password"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="submit" value="Register" id="reg_btn_submit" title="Send" name="post">
                    </div>
                </div>
                <div id="alert-msg" class="alert-msg"></div>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
</template>
<script>
export default {
    name: 'AuthPage'
}
</script>
<style scoped>

</style>

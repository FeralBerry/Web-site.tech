<template>
    <div>
        <div class="row">
            <!-- Customer Service Widget -->
            <aside class="col-md-3 col-sm-6 col-xs-6 widget widget_customer_services">
                <h3 class="block-title">Customer services</h3>
                <ul>
                    <li><a title="Online Earning" href="#">Online Earning</a></li>
                    <li><a title="Materials" href="#">Materials</a></li>
                    <li><a title="Presentation" href="#">Presentation</a></li>
                    <li><a title="Printed materials" href="#">Printed materials</a></li>
                    <li><a title="Curriculum" href="#">curriculum</a></li>
                    <li><a title="Literature" href="#">literature</a></li>
                    <li><a title="Help & Faq" href="#">Help & Faq</a></li>
                </ul>
            </aside><!-- Customer Service Widget /- -->

            <!-- Quick Links Widget -->
            <aside class="col-md-2 col-sm-6 col-xs-6 widget widget_quick_links">
                <h3 class="block-title">Quick links</h3>
                <ul>
                    <li><a title="Faq" href="#">Faq</a></li>
                    <li><a title="Support" href="#">Support</a></li>
                    <li><a title="Sitemap" href="#">Sitemap</a></li>
                    <li><a title="Community" href="#">Community</a></li>
                    <li><a title="membership" href="#">membership</a></li>
                    <li><a title="Events" href="#">Events</a></li>
                    <li><a title="Contact us" href="#">Contact us</a></li>
                </ul>
            </aside><!-- Quick Links Widget /- -->

            <!-- ContactUs Widget -->
            <aside class="col-md-3 col-sm-6 col-xs-6 widget widget_contactus">
                <h3 class="block-title">Contact Us</h3>
<!--                <div class="contactinfo-box">
                    <i class="fa fa-map-marker"></i>
                    <p>09 Design Street, Mitri, Victoria, Australia.</p>
                </div>-->

                <div class="contactinfo-box">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <p>
                        <a href="mailto:admin@web-site.tech" title="admin@web-site.tech">admin@web-site.tech</a>
                    </p>
                </div>
                <div class="contactinfo-box">
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                    <p>
                        <a title="https://t.me/+mN-jol9DHFYxOWQ6" href="https://t.me/+mN-jol9DHFYxOWQ6">https://t.me/+mN-jol9DHFYxOWQ6</a>
                    </p>
                </div>
            </aside><!-- ContactUs Widget /- -->

            <!-- NewsLetter Widget -->
            <aside class="col-md-4 col-sm-6 col-xs-6 widget widget_newsletter">
                <template v-if="this.$parent.$parent.lang === 'eng'">
                    <h3 class="block-title">Subscribe</h3>
                    <p>If you want to receive news from the site by email, enter it below.</p>
                </template>
                <template v-if="this.$parent.$parent.lang === 'rus'">
                    <h3 class="block-title">Подписаться</h3>
                    <p>Если хотете получать новости с сайта на почту, по введите ее ниже.</p>
                </template>
                <div class="input-group">
                    <template v-if="this.$parent.$parent.lang === 'eng'">
                        <input type="text" placeholder="Enter Address" class="form-control">
                    </template>
                    <template v-if="this.$parent.$parent.lang === 'rus'">
                        <input type="text" placeholder="Введите Емаил" class="form-control">
                    </template>
                    <span class="input-group-btn">
                <button type="button" title="Subscribe" class="btn">Go</button>
            </span>
                </div>
                <ul>
                    <li><a title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a title="Dribbble" data-toggle="tooltip" href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </aside><!-- NewsLetter Widget /- -->
        </div>
    </div>
</template>

<script>
    export default {
        name: 'FooterSubscribeComponent',
        components: {

        },

        mounted() {

        }
    }
</script>

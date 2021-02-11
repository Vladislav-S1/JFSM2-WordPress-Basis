<?php
if ( ! function_exists( 'get_contact_form_shortcode' ) ) {
	function get_contact_form_shortcode() { 
        $content = '<section class="form-section-main">
                <div id="form-wrapper">
                    <form method="post" id="form" enctype="multipart/form-data">
                        <label for="name">' . __( 'Full name', 'jfsm2' ) . '<br/>
                            <input title="Full name" type="text" name="name"  id="name" />
                        </label><br/>
                        <label for="email">' . __( 'E-mail', 'jfsm2' ) . '<br/>
                            <input title="Email" type="email" name="email"  id="mail" />
                        </label><br/>
                        <label for="phone">' . __( 'Phone', 'jfsm2' ) . '<br/>
                            <div class="phone-wrapper">
                                <div class="phone-input-add">
                                    <input title="Phone number" type="tel" name="phone_0" id="phone" />
                                    <input id="add-phone-field" class="btn" type="submit" value="+" name="add_phone_field"/>
                                </div>
                            </div><br/>
                        </label><br/>
                        <label for="age">' . __( 'Age', 'jfsm2' ) . '<br/>
                            <input title="Age" type="number" min="1" max="100" name="age" id="age" />
                        </label><br/>
                        <label for="photo">' . __( 'Photo', 'jfsm2' ) . '<br/>
                            <input title="file" type="file" accept="image/*" name="file" id="file" /><br/>
                            <div class="photo-drop">
                                <span id="output"></span>
                                <div id="preview"><img src="' . get_template_directory() . '/icons/png/imagePrev.png" /></div>
                            </div>
                        </label><br/>
                        <label for="resume">' . __( 'Resume', 'jfsm2' ) . '<br/>
                            <textarea title="Resume" name="resume" cols="50" rows="15"></textarea><br/>
                        </label><br/>
                        <input type="submit" value="Send" name="save_form" disabled="disabled" style="display: inline-block;" />
                    </form>
                </div>
            </section>'; 
        return $content;
    }
}?>
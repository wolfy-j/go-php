<extends:layout.base title="[[Welcome To Spiral]]"/>
<use:element path="embed/links" as="homepage:links"/>
<define:body>
    <div class="columns is-vcentered">
        <div class="login column is-4 ">
            <section class="section">
                <div class="has-text-centered">
                    <img class="login-logo" src="/img/logo_r_resumme.png">
                </div>

                <div class="field">
                    <label class="label">Username</label>
                    <div class="control has-icons-right">
                        <input class="input" type="text">
                        <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control has-icons-right">
                        <input class="input" type="password">
                        <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>
                    </div>
                </div>
                <div class="has-text-centered">
                    <a class="button is-vcentered is-primary is-outlined">Login</a>
                </div>
                <div class="has-text-centered">
                    <a href="signup.html"> Don't you have an account? Sign up now!</a>
                </div>
            </section>
        </div>
        <div id="particles-js" class="interactive-bg column is-8">
        </div>
    </div>
</define:body>

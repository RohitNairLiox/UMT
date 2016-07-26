			<div class="uk-width-medium-1-2 uk-container-center">

               
                <form class="uk-panel uk-panel-box uk-form" method="post" action="<?php echo base_url(); ?>orderview">
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" name="USRNAME" id="USRNAME" placeholder="Username" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" name="PSWD" id="PSWD" placeholder="Password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    </div>
                    <div class="uk-form-row">
                        <button type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large">Login</button>
                    </div>
                    
                </form>

            </div>
<div class="form" >
        <div id="signup">
            <h1>Sign Up for Free</h1>
            <form action="./Register/KhachHangDangKy" method="POST">
                <div class="field-wrap">
                    <label>
                        User Name<span class="req">*</span>
                    </label>
                    <input type="text"required autocomplete="off" name="username" id="username"/>
                    <div id="message"></div>
                </div>
                <div class="field-wrap">
                    <label>Set A Password<span class="req" >*</span>
                    </label>
                    <input type="password" required autocomplete="off" name="password"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name="email"/>
                </div>
                <button type="submit" class="button button-block" name="submit_register"/>Get Started</button>
            </form>
            <?php if(isset($data['result'])){ ?>
            <p>
                <?php
                    if($data["result"]==true)
                    {
                        echo "Dang ki thanh cong";
                    } else {
                        echo "Dang ki that bai";
                    }
                ?>

            </p>
            <?php }?>
        </div>

</div> <!-- /form -->

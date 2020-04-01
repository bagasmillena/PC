<div style="padding-left: 30%">

    <h2> <b>Login</b> </h2>
    <br>
    <form action="<?= base_url('LoginController/login') ?>" method="POST">
        <p style="padding: 15px 0 0 0">username</p>
        <input type="username" name="username" value="<?= set_value('username') ?>" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">Password</p>
        <input type="password" name="password" value="<?= set_value('password') ?>" style="padding: 5px; padding-right: 225px;">
        <br>
        <br>
        <button type="submit" class="btn btn-primary float-center">
            Register Account
        </button>
        </a>
    </form>
</div>
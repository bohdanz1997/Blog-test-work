<div class="container">
    <form action="/login" method="POST" id="contactform" role="form">
        <div class="form-group">
            <p><label for="login">Email</label></p>
            <input id="login" class="form-control" type="text" name="login[email]" tabindex="1" required>
        </div>
        <div class="form-group">
            <p><label for="password">Password</label></p>
            <input id="password" name="login[pass]" class="form-control" tabindex="2" type="password" required>
        </div>
        <div class="container">
            <input type="submit" value="Log in" id="submit" class="btn btn-default"/>
        </div>
    </form>
</div>


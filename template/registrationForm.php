<form method="post" name="register_form">
    <table class="register_form">
        <tr><td class="email_label">Email:</td><td><input id="email" type="text" class="email" name="email"/></td><td id="email_error" class="validation_error"></td></tr>
        <tr><td class="username_label">Nazwa użytkownika:</td><td><input id="username" type="text" class="username" name="username"/></td><td></td></tr>
        <tr><td class="password_label">Hasło:</td><td><input id="password" type="password" class="password" name="password"/></td><td></td></tr>
        <tr><td class="password_label">Hasło powtórzone:</td><td><input id="password2" type="password" class="password" name="password2"/></td><td id="password_error" class="validation_error"></td>
        <tr><td colspan="3"><input type="submit" class="submit" name="submit" value="Zarejestruj" onclick="return validateForm()"/></td></tr>
    </table>
    
</form>
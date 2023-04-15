<form action="problem.php" method="post">
        <label for="titles"> Title:</label>
            <select name="titles" id="titles" required>
                <option value=""> </option>
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Dr.">Dr.</option>
                <option value="Esq.">Esq.</option>
                <option value="Hon.">Hon.</option>
            </select><br>
        <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required maxlength=25><br>
        <label for="lName">Last Name:</label>
            <input type="text" id="lName" name="lName" required required maxlength=25><br>
        <label for="roles"> Role:</label>
            <select name="roles" id="roles" required>
                <option value=""> </option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="CEO">CEO</option>
            </select><br>
        <input type="submit" id="submit" value="login">
    </form>
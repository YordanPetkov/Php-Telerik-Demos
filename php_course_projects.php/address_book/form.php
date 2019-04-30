<?php
    include 'includes/header.php';
?>
    <a href="index.php">Списък</a>

    <form>
        <div>Име: <input type="text" name="username" /></div>
        <div>Телефон: <input type="text" name="phone" /></div>
        <div>
            <select name="group">
                <option>Приятели</option>
                <option>Бивши</option>
                <option>Колеги</option>
            </select>
        </div>
        <div><input type="submit" value="Добави" /> </div>
    </form>

<?php
    include 'includes/footer.php';
?>



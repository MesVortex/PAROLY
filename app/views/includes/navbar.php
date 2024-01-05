<div class="topbar">
    <div class="prev-next-buttons">
        <button type="button" class="fa fas fa-chevron-left"></button>
        <button type="button" class="fa fas fa-chevron-right"></button>
    </div>
    <div class="navbar">
        <ul>
            <li>
                <a href="#">Premium</a>
            </li>
            <li>
                <a href="#">Support</a>
            </li>
            <li>
                <a href="#">Download</a>
            </li>
            <li class="divider">|</li>

            <?php if (!isset($_SESSION['email'])): ?>
                <li>
                    <a href="<?php echo URLROOT; ?>/pages/signup">Sign Up</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/pages/login">
                        <button type="button">Log In</button>
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <a href="./controllers/Users.php?q=logout">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
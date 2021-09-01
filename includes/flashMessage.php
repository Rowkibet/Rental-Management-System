<?php if(isset($_SESSION['message'])): ?>
        <div class="message <?php echo $_SESSION['type']; ?>">
            <li><?php echo $_SESSION['message']; ?></li>

            <!-- The msg will disappear when the page is refreshed -->
            <?php
                unset($_SESSION['message']);
                unset($_SESSION['type']);
            ?>
        </div>
    <?php endif; ?>
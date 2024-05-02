<?php

function sidenavStudent($dbContext){
            
    if ($dbContext->getUsersDatabase()->getAuth()->hasRole(DigitalHelpRoles::STUDENT)) 
    {
        ?>
    <li class="line-split"></li>
    <li>
        <a href="/student"  >
            <span class="sidebar-icon"><i class="fas fa-calendar"></i></span>
            <span class="sidebar-text"> Student bla bla</span>
        </a>
    </li>
    <?php
    }

}

?>
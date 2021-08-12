<style>
<?= '.' . PREFIX ?>-header-wrapper{
    position: <?= MENU_CONTENTS['sticky'] ? 'fixed' : 'relative' ?>;
    width: 100%;
    z-index: 1000;

    background: <?= MENU_CONTENTS['background'] ?>;
    padding: 0.5rem;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 0px 1px rgba(12, 26, 75, 0.24), 0px 3px 8px -1px rgba(50, 50, 71, 0.05);

    box-shadow: 0px 0px 1px rgb(12 26 75 / 24%), 0px 3px 15px -1px rgb(50 50 71 / 5%);

    color: <?= MENU_CONTENTS['color'] ?>;

}

<?php if(MENU_CONTENTS['sticky']): ?>
    <?= '.' . PREFIX ?>-header-wrapper.top{
        padding: 1rem;
        padding-bottom: 0;
        background: transparent;
        box-shadow: none;
    }

<?php endif ?>

.modal-open <?= '.' . PREFIX ?>-header-wrapper{
    margin-right: 15px;
}

<?= '.' . PREFIX ?>-header-spacer{
    height:106px;
}

<?= '.' . PREFIX ?>-header{
    width: 100%;
    border-radius: 16px;
    padding: 0.7rem;
    align-items: center;

}



<?= '.' . PREFIX ?>-header-logo{
    height: 3rem;
    transition: transform 0.5s cubic-bezier(0.42, 0, 0, 1.68);
    transform-origin: top left;
}


<?php if(MENU_CONTENTS['sticky']): ?>
    <?= '.' . PREFIX ?>-header-wrapper.top <?= '.' . PREFIX ?>-header-logo{
        transform: scale(2.6); 
    }

<?php endif; ?>

<?= '.' . PREFIX ?>-header-items{
    /* margin-left: auto; */
}

button<?= '.' . PREFIX ?>-disconnected-btn{
    border-radius: 10rem;
    background-color: <?= MENU_CONTENTS['disconnectedBg'] ?>;
    color: <?= MENU_CONTENTS['disconnectedColor'] ?>;
    display: flex;
    align-items: center;

    transition: all 0.5s ease-in-out;
}

<?= '.' . PREFIX ?>-disconnected-btn::before{
    content: "";
    display: inline-block;
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    background-color: <?= MENU_CONTENTS['disconnectedIconColor'] ?>;
    margin-right: 0.5rem;
}

button<?= '.' . PREFIX ?>-disconnected-btn.mobile{
    background-color: transparent;
    color: #535353;

    display: none;
}

<?= '.' . PREFIX ?>-header-item{
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 0.03em;
    padding-top: 2px;

    padding-bottom: 0;
    /* padding: 0 1.5rem; */

    background-color: <?= MENU_CONTENTS['menuItemBg'] ?>;
    border-radius: 1rem;
    margin: 0 0.5rem;
    font-weight: 800;
    box-shadow: none;

    transition: all 0.5s ease-in-out;
}


<?= '.' . PREFIX ?>-header-item a{
    color: inherit;
    text-decoration: none;
    cursor: pointer;

    display: block;
    padding: 0 1.5rem;

    transition: all 0.3s ease-in-out;
}

<?= '.' . PREFIX ?>-header-item:hover{
    background-color: <?= MENU_CONTENTS['menuItemHoverBg'] ?>;
    color: <?= MENU_CONTENTS['menuItemHoverColor'] ?>

}



<?= '.' . PREFIX ?>-header-burger{
    margin-left: auto;
    background: white;
    padding: 0.5rem;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0px 0px 1px rgb(12 26 75 / 24%), 0px 3px 8px -1px rgb(50 50 71 / 5%);

    display: none;
}

<?= '.' . PREFIX ?>-header-items <?= '.' . PREFIX ?>-menu-close{
    padding: 0.5rem;
    line-height: 1rem;

    visibility: hidden;
}

<?php if(MENU_CONTENTS['sticky']): ?>

    @media only screen and (min-width: 1001px) {
        <?= '.' . PREFIX ?>-header-wrapper.top <?= '.' . PREFIX ?>-header-item,
        <?= '.' . PREFIX ?>-header-wrapper.top <?= '.' . PREFIX ?>-disconnected-btn{
            transform: translate3d(0, 2rem, 0);

            box-shadow: 0px 0px 1px rgba(12, 26, 75, 0.24), 0px 3px 8px -1px rgba(50, 50, 71, 0.05);
        }
    }

<?php endif; ?>

@media only screen and (max-width: 1000px) {

    <?= '.' . PREFIX ?>-header-wrapper{
        background-color: transparent;
        box-shadow: none;
    }

    <?= '.' . PREFIX ?>-header-wrapper.top <?= '.' . PREFIX ?>-header-logo {
        transform: scale(1.3);
    }

    <?= '.' . PREFIX ?>-header-items{
        position: fixed;
        top: 0;
        right: 0;
        height: 100%;
        background: whitesmoke;
        padding: 2rem 0.5rem;
        padding-top: 0.5rem;
        flex-direction: column;

        transform: translate3d(100%, 0, 0);

        transition: all 0.3s ease-in-out;
    }

    body.show-menu <?= '.' . PREFIX ?>-header-items{
        transform: translate3d(0, 0, 0);
    }

    body.show-menu <?= '.' . PREFIX ?>-header-items <?= '.' . PREFIX ?>-menu-close{
        visibility: visible;
    }

    <?= '.' . PREFIX ?>-header-wrapper.top <?= '.' . PREFIX ?>-header-item{    
        box-shadow: none;
    }

    <?= '.' . PREFIX ?>-header-burger{
        display: block;
    }

    <?= '.' . PREFIX ?>-disconnected-container{
        display: none;
    }

    button<?= '.' . PREFIX ?>-disconnected-btn.mobile{
        display: block;
    }
}

</style>
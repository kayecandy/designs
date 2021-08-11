<style>
html, body{
min-width: 400px;
}

body{
    color:white;
    font-family: 'Carmen Sans';
    font-size: 1rem;
    font-style: normal;
    font-weight: 400;
    line-height: 30px;
    letter-spacing: 0.06em;
    text-align: left;
}

a{
    color: inherit;
    text-decoration:s none;
}

a:hover{
    color: inherit;
}

button:not(.accordion-button){
    border: none;
    outline: none;
    border-radius: 0.5rem;
    padding: 0.5rem 2rem;
    font-weight: 800;
    letter-spacing: 0.03em;
    background-color: #555BB9;
    color: white;

    cursor: pointer;

    transition: transform 0.3s cubic-bezier(0.93, 0.52, 0.11, 1.57)
}

button:not(.accordion-button):hover{
    transform: scale(1.03);
}


button.btn-yellow{
    background-color: #ffda00;
    color: #353535;
}


<?= '.' . PREFIX ?>-bg-white{
    background-color: black;
}

<?= '.' . PREFIX ?>-bg-animated{
    background-image: url("assets/bg-tile.png?v3.4");
    -webkit-animation: background-animation 90s linear infinite;
    animation: background-animation 90s linear infinite;
    background-size: 100% auto;
}

@keyframes background-animation{to{background-position:0 0}0%{background-position:3000px -1504px}}

/* Section General Style */
.section-container{
    /* min-height: 100vh; */
    padding-top: 6rem;
    /* padding-bottom: 3rem; */
    position: relative;
}


<?= '.' . PREFIX ?>-section-border-bottom{
    border-bottom: 9px solid #efefef;
}

<?= '.' . PREFIX ?>-section-border-top{
    border-top: 9px solid #efefef;

}

</style>
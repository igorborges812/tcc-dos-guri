<?php header("Content-Type: text/css; charset=UTF-8"); ?>   

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Noto Sans JP', sans-serif;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color:#DCDCDC;
}

.content{
    border-radius:15px;
    background-color:#FFFFFF;
    width: 960px;
    height: 60%;
    justify-content:space-between;
    align-items:center;
    position:relative;
}
.content::before {
    content: "";
    position: absolute;
    background-color: #4D8C78;
    width: 40%;
    height: 100%;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    left:0;
 
}
.title{
    font-size:28px;
    font-weight:bold;
}

.title-first{
    color:#FFF;
    
}
.title-second{
    color:#4D8C78;
    
}
.description{
    font-size: 14px;
    font-weight:300;
    color:#FFF;
    line-height:30px;
}
.btn{
    border-radius:15px;
    text-transform: uppercase;
    color:#FFF;
    font-size:10px;
    padding:10px 50px;
    cursor: pointer;
    font-weight:bold;
    width:150px;
    align-self:center;
    border:none;
    margin-top:1rem;
    
   
}
.btn-primary{
    background-color: transparent;
    border: 1px solid #FFF;
    margin-top:70px;
    
}
.btn-primary:hover{
    background-color: #FFF;
    color:#4D8C78;  
}
.btn-second {
    background-color: #4D8C78;
    border: 1px solid #4D8C78;
    transition: background-color .5s;
    border-color:#FFF;
    text-align:center;
    
}
.btn-second:hover {
    background-color: #fff;
    border: 1px solid #4D8C78;
    color: #4D8C78;
}


.first-content {
display:flex;

}
.first-content .second-column{
    z-index:11;
}
.first-column {
    text-align:center;
    width: 40%;
    z-index: 10;
}

.second-column{
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: center;
    
}

.form {
    display:flex;
    flex-direction:column;
    width:55%;
    
}

.form input {
    height: 45px;
    width: 100%;
    border: none;
    background-color: #ecf0f1;
   
     }
     
     input:-webkit-autofill 
{    
    -webkit-box-shadow: 0 0 0px 1000px #ecf0f1 inset !important;
    -webkit-text-fill-color: #000 !important;
 }

.label-input {
    background-color: #ecf0f1;
    display: flex;
    align-items: center;
    margin:8px;

}
.icon-modify {
    color: #7f8c8d;
    padding: 0 5px;
    }

.second-content {
position: absolute;
display:flex;
}

.second-content .first-column {
    order: 2;  
  z-index:-1;
}
.second-content .second-column {
    order: 1;   
    z-index:-1;
}

.sign-in-js .first-content .first-column {
    z-index: -1;
}

.sign-in-js .second-content .second-column {
    z-index: 11;
}
.sign-in-js .second-content .first-column {
    z-index: 13;
}

.sign-in-js .content::before {
    left: 60%;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    animation: slidein 1.3s; /*MODIFIQUEI DE 3s PARA 1.3s*/

    z-index: 12;
}

.sign-up-js .content::before {
    animation: slideout 1.3s; /*MODIFIQUEI DE 3s PARA 1.3s*/

    z-index: 12;
}

.sign-up-js .second-content .first-column,
.sign-up-js .second-content .second-column {
    z-index: -1;
}

.sign-up-js .first-content .second-column {
    z-index: 11;
}

.sign-up-js .first-content .first-column {
    z-index: 13;    
}

.sign-in-js .first-content .second-column {

    z-index: -1;
    position: relative;
    animation: deslocamentoEsq 1.3s; /*MODIFIQUEI DE 3s PARA 1.3s*/
}

.sign-up-js .second-content .second-column {
    position: relative;
    z-index: -1;
    animation: deslocamentoDir 1.3s; /*MODIFIQUEI DE 3s PARA 1.3s*/
}

@keyframes deslocamentoEsq {

    from {
        left: 0;
        opacity: 1;
        z-index: 12;
    }

    25% {
        left: -80px;
        opacity: .5;
        /* z-index: 12; NÃO HÁ NECESSIDADE */
    }

    50% {
        left: -100px;
        opacity: .2;
        /* z-index: 12; NÃO HÁ NECESSIDADE */
    }

    to {
        left: -110px;
        opacity: 0;
        z-index: -1;
    }
}


@keyframes deslocamentoDir {

    from {
        left: 0;
        z-index: 12;
    }

    25% {
        left: 80px;
        /* z-index: 12;  NÃO HÁ NECESSIDADE*/
    }

    50% {
        left: 100px;
        /* z-index: 12; NÃO HÁ NECESSIDADE*/
        /* background-color: yellow;  Exemplo que dei no vídeo*/
    }

    to {
        left: 110px;
        z-index: -1;
    }
}


@keyframes slidein {

    from {
        left: 0;
        width: 40%;
    }

    25% {
        left: 5%;
        width: 50%;
    }

    50% {
        left: 25%;
        width: 60%;
    }

    75% {
        left: 45%;
        width: 50%;
    }

    to {
        left: 60%;
        width: 40%;
    }
}

@keyframes slideout {

    from {
        left: 60%;
        width: 40%;
    }

    25% {
        left: 45%;
        width: 50%;
    }

    50% {
        left: 25%;
        width: 60%;
    }

    75% {
        left: 5%;
        width: 50%;
    }

    to {
        left: 0;
        width: 40%;
    }
}

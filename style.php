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
    width: 80%;
    height: 50%;
    justify-content:space-between;
    align-items:center;
    position:relative;
}
.content::before {
    content: "";
    position: absolute;
    background-color: #74D8FD;
    width: 40%;
    height: 100%;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    
}
.title{
    font-size:28px;
    font-weight:bold;
    text-transform:capitalize;
}

.title-welcome{
    color:#FFF;
    
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
}
.btn-primary{
    background-color: transparent;
    border: 1px solid #FFF;
}
.btn-primary:hover{
    background-color: #FFF;
    color:#74D8FD;  
}
.first-content {
display:flex;
}

.first-column {
    text-align:center;
    width: 40%;
    z-index: 10;
}
.second-column{
    width: 60%;
    
}

.form {
    display:flex;
    flex-direction:column;
}


.second-content {
position: absolute;
display:none;
}
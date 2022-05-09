//bulk navbar re-shaping


//changing href of navbar button 'Sign Up' on all pages
function signupPageHref() {
const find=document.querySelector('a[href*="sign"]');
find.setAttribute('href','https://www.urlatlas.org/user-area');
}
setTimeout(signupPageHref,"1");

//changing href of navbar buttons 'User Made Lists' & 'Login' on all pages
function setLoginHref(){
const find2=document.querySelector('a[href*="login"]');
find2.setAttribute('href','https://www.urlatlas.org/user-area/loginindex.php');
}

setTimeout(setLoginHref,"1");

function detectHomeHref(){
    
    const x=document.getElementById('HomeBtn');
     
    x.setAttribute('href','https://www.urlatlas.org');

}

setTimeout(detectHomeHref,"1");

function removeLangAndCateg(){
    
    const x=document.querySelector('a[href*="languages"]');
    const y=document.querySelector('a[href*="categories"]');

     
    x.setAttribute('href','#');
    y.setAttribute('href','#');
    x.innerHTML='';
    y.innerHTML='';
     x.style.display='none';
    y.style.display='none';

}

setTimeout(removeLangAndCateg,"1");


function setUserLists(){
const find2=document.querySelector('a[href*="user-made"]');
find2.setAttribute('href','https://www.urlatlas.org/user-made-lists/');
}

setTimeout(setUserLists,"1");
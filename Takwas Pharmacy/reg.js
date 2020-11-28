const myForm=document.querySelector('.myform-r');
const nameInput=document.querySelector('#Pname');
const passwordInput=document.querySelector('#Ppass');
const passwordInputA=document.querySelector('#Ppassa');
const phone=document.querySelector('#Phone');
const emailInput=document.querySelector('#Email');
const bloodGroup=document.querySelector('#BG');
const address=document.querySelector('#Address');
const nid=document.querySelector('#NID');
const msg=document.querySelector('.msg');
console.log('hi there testing');
var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

myForm.addEventListener('submit', onSubmit)           

function onSubmit(e)
{
    e.preventDefault();

    if(nameInput.value===''||passwordInput.value===''|| passwordInputA.value===''||
        phone.value===''|| emailInput.value===''||bloodGroup.value===''|| address.value===''|| nid.value==='')
    {
        msg.classList.add('error')
        msg.innerHTML='Please Enter all Fields'
        console.log('all fields are not filled');
        setTimeout(()=>msg.remove(),3000)
        alert("Please Enter all Fields");
    }
     else if((nameInput.value.match(letters))==null)
    {

        msg.classList.add('error')
        msg.innerHTML='Please Enter Valid Username'
        nameInput.value=''
        setTimeout(()=>msg.remove(),3000)
        console.log('User Name not good');
        alert("User Name must have alphanumeric characters only");

    }
    else if(passwordInput.value.length<4||passwordInput.value.length>8)
    {
        msg.classList.add('error')
        msg.innerHTML='Password length should be in between 4 to 8'
        passwordInput.value=''
        passwordInputA.value=''
        setTimeout(()=>msg.remove(),3000)
        console.log('Password not good');
        alert("Password length should be in between 4 to 8");
    }
    else if(passwordInput.value!==passwordInputA.value)
    {
        msg.classList.add('error')
        msg.innerHTML='Password doesnt match'
        passwordInput.value=''
        passwordInputA.value=''
        setTimeout(()=>msg.remove(),3000)
        console.log('Password not match');
        alert("Password doesnt match");
    }
    else if((emailInput.value.match(mailformat))==null)
    {
        msg.classList.add('error')
        msg.innerHTML='Please insert a valid Email'
        emailInput.value=''
        setTimeout(()=>msg.remove(),3000)
        console.log('Email not good');
        alert("Please insert a valid Email");
    }
    else if(nid.value.length<5||nid.value.length>10)
    {
        msg.classList.add('error')
        msg.innerHTML='NID length should be in between 4 to 8'
        nid.value=''
        setTimeout(()=>msg.remove(),3000)
        console.log('NID not good');
        alert("NID length should be in between 4 to 8");
    }
    else
    {
        msg.classList.add('success')
        msg.innerHTML='Your Registration Is Completed!'
        nameInput.value=''
        passwordInput.value=''
        passwordInputA.value=''
        phone.value=''
        emailInput.value=''
        bloodGroup.value=''
        address.value=''
        nid.value=''
        setTimeout(()=>msg.remove(),3000)
        alert("Your Registration Is Completed!");

    }

}
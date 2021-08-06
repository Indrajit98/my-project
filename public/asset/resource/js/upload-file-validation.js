const form = document.getElementById('form');
const name = document.getElementById('name');
const address =document.getElementById('address');

//show error message
function showError(input,message){
    const shop = input.parentElement;
    shop.className = 'shop error';
    const small = shop.querySelector('small');
    small.innerText = message;
}
//show success outline
function showSuccess(input){
    const shop = input.parentElement;
    shop.className = 'shop success';
}
//check required
function checkRequired(inputArr){
    inputArr.forEach(function(input){
        if(input.value.trim() ===''){
            showError(input,`${input.id} is required`);
        }
        else{
            showSuccess(input);
        }
    })
}
//event listeners
form.addEventListener('submit',function(e){
    e.preventDefault();
  checkRequired([name,address,image])
})

///// Mobile menu
function openNav(){
    document.getElementById("myNav").style.width = "100%"
}
function closeNav(){
    document.getElementById("myNav").style.width = "0%"
}
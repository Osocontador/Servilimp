const openModal = document.querySelector('.user#Agregar');
const modal=document.querySelector('.modal');
const closeModal=document.querySelector('.modal_close')

openModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('show');
    formulario.style.display="none";
    inputsfor. forEach((input) =>{
        input.value="";    });
});

closeModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('show');
});


const inputs=document.querySelectorAll('input');
inputs. forEach(input =>{
    input.onfocus=()=>{
        input.previousElementSibling.classList.add('top');
        input.previousElementSibling.classList.add('focus');
        input.parentNode.classList.add('focus');
       
    }
    input.onblur=()=>{
        input.value=input.value.trim();
        if(input.value.trim().length==0){
            input.previousElementSibling.classList.remove('top');
        }
       
        input.previousElementSibling.classList.remove('focus');
        input.parentNode.classList.remove('focus');
    }  
    

});
const inputsfor=document.querySelectorAll('input[id="entrada"]');
const labels=document.querySelectorAll('.Datos');
const  form=document.getElementById('form');
const spans=document.querySelectorAll('.texto')
const iconos=document.querySelectorAll('i.fas.fa-check-circle');
const iconos2=document.querySelectorAll('i.fas.fa-exclamation-circle');

/*

form.addEventListener('submit',e=>{
    e.preventDefault();
    inputsfor. forEach((input,index) =>{
        input.value=input.value.trim();
            if(input.value.trim().length==0){
                spans[index].classList.add('novalido');
                labels[index].classList.add('novalido');
                iconos[index].classList.remove('mostrar');
                iconos2[index].classList.add('mostrar');
            }
            else{
                labels[index].classList.remove('novalido');
                spans[index].classList.remove('novalido');
                iconos2[index].classList.remove('mostrar');
                iconos[index].classList.add('mostrar');
                labels[index].classList.add('valido');
                spans[index].classList.add('valido');
            }
        });
    
});
*/


   labels. forEach((label,index) =>{
        label.addEventListener('click',e=>{
                spans[index].classList.remove('novalido');
                labels[index].classList.remove('novalido');
                spans[index].classList.remove('valido');
                labels[index].classList.remove('valido');
                label.classList.add('focus');
                spans[index].classList.add('focus');
                iconos[index].classList.remove('mostrar');
                iconos2[index].classList.remove('mostrar');
         
        }); 
});

labels. forEach((label,index) =>{
    label.addEventListener('keydown',e=>{
            label.classList.add('focus');
            spans[index].classList.add('focus');
            iconos[index].classList.remove('mostrar');
            iconos2[index].classList.remove('mostrar');
            label.classList.remove('novalido');
            label.classList.remove('valido');
     
    }); 
});


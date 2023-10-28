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
*/
const mostrar=document.getElementById('nuevo');
const formulario=document.getElementById('detalles');

mostrar.addEventListener("click",function(event){
event.preventDefault();
formulario.style.display="block";
inputsfor. forEach((input) =>{
    input.value="";
    input.removeAttribute('readonly');

});
});

const areas=document.querySelectorAll('textarea');
areas. forEach(area =>{
    area.onfocus=()=>{
        area.previousElementSibling.classList.add('top');
        area.previousElementSibling.classList.add('focus');
        area.parentNode.classList.add('focus');
       
    }
    area.onblur=()=>{
        area.value=area.value.trim();
        if(area.value.trim().length==0){
            area.previousElementSibling.classList.remove('top');
        }
       
        area.previousElementSibling.classList.remove('focus');
        area.parentNode.classList.remove('focus');
    }  
});



const abrirModal = document.querySelector('.Boton#buscar');
const selecliente=document.querySelector('.clientes');
const cerrarCliente=document.querySelector('.modal_close#cerrarbuscar');

abrirModal.addEventListener('click', (e)=>{
    e.preventDefault();
    selecliente.classList.add('show');
});

cerrarCliente.addEventListener('click', (e)=>{
    e.preventDefault();
    selecliente.classList.remove('show');
});
/*
form.addEventListener("submit", function (event) {
    event.preventDefault();
    inputsfor. forEach((input) =>{
        input.value="";       
});
  
});*/


const inputsllenar=document.querySelectorAll('input.dato');
let count=0;
window.addEventListener("click", (e) => {
    if (e.target.matches(".Select_boton")) {
      let data = e.target.parentElement.parentElement.children;
     fillData(data);
    }
  });
  
const fillData = (data) => {
    count=0;
    for (let index of inputsllenar) {
      index.value = data[count].textContent;
      console.log(index);
      count += 1;
      formulario.style.display="block";
      index.previousElementSibling.classList.add('top');
      index.previousElementSibling.classList.add('focus');
      index.parentNode.classList.add('focus');
      index.setAttribute('readonly', true);
    }
  };
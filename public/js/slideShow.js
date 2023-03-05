
    nextRight = document.querySelector('.btn-next-right');
    nextLeft = document.querySelector('.btn-next-left');

    var count = 0;
    var lengthSlide = document.querySelectorAll('.circle__item input').length-1;
    displaySlide(count);
    var timeSleep =6000;
    var timer = setInterval(autoSlide,timeSleep);
    function autoSlide(){
        count++;
        if (count>lengthSlide){
            count=0;
        }
        
        displaySlide(count);
       
    }
    function plusSlideRight(){
        count+=1;
        if (count>lengthSlide){
            count=0;
        }
        displaySlide(count);
        resetTimer();
    }
    function plusSlideLeft(){
        count-=1;
        if (count<0){
            count=lengthSlide;
        }
        displaySlide(count);
        resetTimer();
    }
    function currentSlide(n){
        count = n;
        displaySlide(count);
        resetTimer();
    }
    function resetTimer(){
        clearInterval(timer); 
        timer = setInterval(autoSlide,timeSleep);
    }
    function displaySlide(n){
        if (document.querySelector('.first')) {
            document.querySelector('.first').style.marginLeft = n* (-100) +"%";
            document.querySelectorAll('.circle__item input')[n].checked =true;
        }
        
    }
    ///slide in mid
function nextSlideRight(){
    var max = 0
    s = document.querySelector('.product__discount--inner')
    numberElements = document.querySelectorAll('.product__discount-row')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });
    
    temp = parseInt(s.style.marginLeft.split("%")[0])|| 0

   if (s.offsetWidth <1023){
        if (temp >=-108*(max-1)){
            temp = temp -108; 
        }
        if(temp <-108*(max-1))
            temp =-108*(max-1);
       
   }
   
    else{
        if (temp >=-35*(max-3)){
            temp = temp -35; 
        }
        if(temp <-35*(max-3))
            temp =-35*(max-3);
       
        
    }
    s.style.marginLeft = temp +"%";
    
}
function nextSlideLeft(){
    var max = 0
    s = document.querySelector('.product__discount--inner')
    numberElements = document.querySelectorAll('.product__discount-row')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });
    s.style.marginLeft = 0 +"%";
    temp = parseInt(s.style.marginLeft.split("%")[0])|| 0
    if (s.offsetWidth <1023){
        if (temp <=-108){
            temp = temp + 108;
            
        }
        if(temp >-108 & temp <0)
            temp = 0;
        
   }
   else{
    if (temp <=-35){
        temp = temp + 35;
        
    }
    if(temp >-35 & temp <0)
        temp = 0;
   }
    
    s.style.marginLeft = temp +"%";
    
}
//slide sp mua nhieu
function nextSlideRight_new(){
    var max = 0
    dis =document.querySelector(".product__buy--inner")
    s = document.querySelector('.product__buy--list')
    numberElements = document.querySelectorAll('.product__buy--list')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });

    temp = parseInt(s.style.marginLeft.split("%")[0])|| 0
    if (dis.offsetWidth <500){
        if (temp >-105*(max-1)){
            temp = temp -105; 
        }
        if(temp <-105*(max-1))
            temp =-105*(max-1);
        
   }
   else{
    if (temp >-34.1*(max-3)){
        temp = temp -34.2; 
    }
    if(temp <-34.1*(max-3))
        temp =-34.2*(max-3);
   }
    s.style.marginLeft = temp +"%";
}
function nextSlideLeft_new(){
    var max = 0
    dis =document.querySelector(".product__buy--inner")
    s = document.querySelector('.product__buy--list')
    numberElements = document.querySelectorAll('.product__buy--list')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });
    temp = parseInt(s.style.marginLeft.split("%")[0])|| 0
    if (dis.offsetWidth <500){
        if (temp <=-105){
            temp = temp + 105;
            
        }
        if(temp >-105 & temp <0)
            temp = 0;
    }
    else{
        if (temp <=-34.2){
            temp = temp + 34.2;
            
        }
        if(temp >-34.2 & temp <0)
            temp = 0;
    }
    
    s.style.marginLeft = temp +"%";

}
   
function nextSlideRight_bottom(){
    var max = 0
    s = document.querySelector('.product__new--inner')
    numberElements = s.querySelectorAll('.product__discount-row')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });
   
    temp = parseInt(s.style.marginLeft.split("%")[0])|| 0
    
    if (temp >= -105*(max-1)){
        temp = temp - 105;
      
    }
    if(temp <-105*(max-1))
    {
        temp = -105*(max-1);
    
    }
        
    s.style.marginLeft = temp +"%";
    
}
function nextSlideLeft_bottom(){
    var max = 0
    s = document.querySelector('.product__new--inner')
    numberElements = s.querySelectorAll('.product__discount-row')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });
    temp =parseInt(s.style.marginLeft.split("%")[0])|| 0
    console.log(temp)
    if (temp <=-105){
        temp = temp + 105;
        
    }
    if(temp >-105 & temp <0)
        temp = 0;
    s.style.marginLeft = temp +"%";
    
}
function setOffSetMarginSlide(){
    var w = window.outerWidth;
    if (w >=1024){
        document.querySelector('.product__discount--inner').style.margin = "0%";

    }
}
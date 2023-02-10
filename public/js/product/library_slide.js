function nextSlideRightProduct(){
    var max = 0
    s = document.querySelector('.product-same__list')
    numberElements = document.querySelectorAll('.product-same__list')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });

    var style = getComputedStyle(s);
    var temp = Math.round(parseInt(style.marginLeft)/(parseInt(style.width)/200))
   
    if (temp >-25*(max-4)){
        temp = temp -25; 
    }
    if(temp <-25*(max-4))
        temp =-25*(max-4);
    s.style.marginLeft = temp +"%";
    
}
function nextSlideLeftProduct(){
    var max = 0
    s = document.querySelector('.product-same__list')
    numberElements = document.querySelectorAll('.product-same__list')
    numberElements.forEach(element => {
        if (element.children.length>max)
         max = element.children.length;
    });
    var style = getComputedStyle(s);
    var temp = Math.round(parseFloat(style.marginLeft)/(parseFloat(style.width)/200))
    
    if (temp <=-25){
        temp = temp + 25;
        
    }
    if(temp >-25 & temp <0)
        temp = 0;
    s.style.marginLeft = temp +"%";
    
}
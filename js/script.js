    //Enquiry form control script
    
    var enqry = document.querySelector('.enquiry-btn')
    var cancel = document.querySelector('.fa-xmark')
    var toggle =  document.querySelector('.toggle-btn')
    var showform = document.querySelector('#form-container')
    var nav_item = document.querySelector('.nav-bar')

    enqry.addEventListener('click', function(e){
        e.stopPropagation();
        showform.style.display = 'inline';

    })
    cancel.addEventListener('click', function(e){
        e.stopPropagation();
        showform.style.display = 'none';
    })

    window.addEventListener('click', ()=>{

        showform.style.display = 'none';
    })
     showform.addEventListener('click', function(e) {
        e.stopPropagation();
    });

    document.addEventListener('keydown', (e)=>{
        if(e.key === "Escape"){
            showform.style.display = 'none';

        }
    } )

    //toggle button control script

    let i=1;
    nav_item.style.position = 'absolute'
    toggle.addEventListener('click',()=>{
    if(i <= 1){
    nav_item.style.visibility = 'visible';
    nav_item.style.position = 'relative';
    i++;
    }else{
        nav_item.style.visibility = 'hidden';
        nav_item.style.position = 'absolute';
        i--;
    }
   })

//    script to show big image after click

var imageContainer = document.querySelector('.show-big-container');
var bigImage = document.querySelector('.big-image');
var smallImages = document.querySelectorAll('.image');

smallImages.forEach(function(smallImage) {

smallImage.addEventListener('click',()=>{
bigImage.src = smallImage.src;
imageContainer.style.display = 'flex';
document.body.style.overflow = 'hidden';
});
});

bigImage.addEventListener('click',()=>{
    imageContainer.style.display = 'none';
    ocument.body.style.overflow = 'auto';
});
    
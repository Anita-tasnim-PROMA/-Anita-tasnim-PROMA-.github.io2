// menu show y hidden

const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

// ---------menu show------------
// validate if constant exists
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

// ----- Menu Hidden -----
// validate if constant exists
// if(navClose){
//     navClose.addEventListener('click',() =>{
//         navMenu.classList.add('hide-menu')
//     })
  
// }

if(navClose){
    navClose.addEventListener('click',() =>{
        navMenu.classList.remove('show-menu')
    })
  
}

// Remove Menu Mobile--------------
//important from one github.....................................
const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav_link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))
// eituk github theke.... ^^^^^^.................................



// Skills---------------------------------------------------------
const skillsContent = document.getElementsByClassName('skills_content'),
    skillHeader = document.querySelectorAll('.skills_header')

function toggleSkills(){
    let itemClass = this.parentNode.className

    for(i=0; i<skillsContent.length; i++){
        skillsContent[i].className = 'skills_content skills_close'
    }
     
    if(itemClass === 'skills_content skills_close'){
        this.parentNode.className = 'skills_content skills_open'
    }
}

skillHeader.forEach((el) =>{
    el.addEventListener('click',toggleSkills)
})


// ========== Qualification Tabs
const tabs = document.querySelectorAll('[data-target]'),
    tabContents = document.querySelectorAll('[data-content]')

tabs.forEach(tab =>{
    tab.addEventListener('click', () =>{
        const target = document.querySelector(tab.dataset.target)
        
        tabContents.forEach(tabContent =>{
                tabContent.classList.remove('qualification_active')
           
        })

        target.classList.add('qualification_active')
        tabs.forEach(tab=>{
            tab.classList.remove('qualification_active')
        })
        tab.classList.add('qualification_active')

    })
})

//-------------------------------------------------------------------


// ======== Service Modal ===========================













    const modalViews = document.querySelectorAll('.services_modal'),
        modalBtns = document.querySelectorAll('.services_button'),
        modalCloses = document.querySelectorAll('Close_ho')

    let modal = function(modalClick){
        modalViews[modalClick].classList.add('active-modal')
    }

    modalBtns.forEach((modalBtn, i) => {
        modalBtn.addEventListener('click', () =>{
            modal(i)
        })
    })




   modalCloses.forEach((modalClose) => {
       modalClose.addEventListener('click', () => {
           modalView.forEach((modalView) => {
               modalView.classList.remove('active-modal')
           })
       })
   })

     

// if(navClose){
//     navClose.addEventListener('click',() =>{
//         navMenu.classList.remove('show-menu')
//     })
  
// }

// abr dekhte hobe ^^^^^^^^^^^^^ porer gula kori age




// navbar active
try{

  var navbar = document.querySelector("nav").querySelectorAll("li");
navbar.forEach((Element) => {
  Element.addEventListener("click", function () {
    navbar.forEach((nav) => nav.classList.remove("active"));
    this.classList.add("active");
  });
});

}catch(error){

}

// menu

try{

  var nav_btn_span = document.querySelector(".navbar-toggler .open");
var nav_btn_i = document.querySelector(".navbar-toggler .colse");
var nav = document.querySelector(".navbar-collapse");
nav_btn_span.addEventListener("click", function () {
  nav.classList.add("nav_open");
  nav_btn_span.classList.add("d-none");
  nav_btn_i.classList.remove("d-none");
});
nav_btn_i.addEventListener("click", function () {
  nav.classList.remove("nav_open");
  nav_btn_i.classList.add("d-none");
  nav_btn_span.classList.remove("d-none");
});



}catch(error){

}

// scroll to top
try{
  var scroll = document.querySelector(".scrollTop");
  scroll.addEventListener("click", function () {
    window.scrollTo(0, 0);
  });
}catch(error){

}


// navbar sticky
try{
  window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 50);
  
    if (window.scrollY > 1080) {
      scroll.classList.add("d-block");
      scroll.classList.remove("d-none");
    } else {
      scroll.classList.add("d-none");
      scroll.classList.remove("d-block");
    }
  });
}catch(error){

}




// contact form validation
try{

  var form = document.querySelector(".form .min_from");

  form.addEventListener("submit", function(event){
  
    var name =document.querySelector(".form .name");
    var email =document.querySelector(".form .email");
    var select =document.querySelector(".form .form-select");
    var message =document.querySelector(".form .message");
    
    var v_name = String(name.value.trim());
    var v_email = String(email.value.trim());
    var v_select = String(select.value.trim());
    var v_message = String(message.value.trim());
  
    var name_feedback = document.querySelector(".form .name + .valid-feedback");
    var email_feedback = document.querySelector(".form .email + .valid-feedback");
    var select_feedback = document.querySelector(".form .form-select + .valid-feedback");
    var message_feedback = document.querySelector(".form .textarea + .valid-feedback");
  
      let regx = /^([a-xA-Z0-9\.-]+)@([a-xA-Z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
      let regx2 =regx.test(v_email);
  
    if(  v_name =="" || v_name.length < 3 ){
      name.classList.add("ininput");
      name_feedback.innerHTML=" Please wirte a valid Name";
      name_feedback.classList.add("invalid");
      event.preventDefault();
    }else{
      name.classList.add("va_input");
      name_feedback.classList.remove("invalid");
      name_feedback.classList.add("d-none");
    }
    
    if(v_email=="" || v_email.length < 9 || regx2 == false){
      email.classList.add("ininput");
      email_feedback.innerHTML=" Please wirte a valid Emial";
      email_feedback.classList.add("invalid");
      event.preventDefault();
    }else{
      email.classList.add("va_input");
      email_feedback.classList.remove("invalid");
      email_feedback.classList.add("d-none");
   
    }
    if(v_select == 0){
    select.classList.add("ininput");
    select_feedback.innerHTML=" Please select one";
    select_feedback.classList.add("invalid");
    event.preventDefault();
    }else{
      select.classList.add("va_input");
      select_feedback.classList.remove("invalid");
      select_feedback.classList.add("d-none");
    }
  
    if(v_message ==""){
     message.classList.add("ininput");
     message_feedback.innerHTML=" Please type your message";
     message_feedback.classList.add("invalid");
     event.preventDefault();
      }else if(v_message.length < 10){
        message.classList.add("ininput");
        message_feedback.innerHTML=" Please type your message more";
        message_feedback.classList.add("invalid");
        event.preventDefault();
      }else{
        message.classList.add("va_input");
        message_feedback.classList.remove("invalid");
        message_feedback.classList.add("d-none");
      }
  
  });
}catch(error){

}

// in pages skills bar 
try{
  var sec_skills = document.querySelector("#about_project #skills");
  var progressbar = document.querySelectorAll("#about_project #skills .progress-bar");

  function showprogress(){
    progressbar.forEach(progressbar =>{
      const progressw =progressbar.dataset.name;
      progressbar.style.opacity = 1;
      progressbar.style.width = `${progressw}%`;
  
      
    })
  }
  function hideprogress(){
    progressbar.forEach(progressbar =>{
      progressbar.style.opacity = 0;
      progressbar.style.width = 0;

    })
  }

  window.addEventListener('scroll', ()=>{

    const sectionpos = sec_skills.getBoundingClientRect();
    const section_position = sectionpos.top +300;
    const sereenPos = window.innerHeight;
    if(section_position < sereenPos){
      showprogress();
    }else{
      hideprogress();
    }
});

}catch(error){
 console,length(error);
}

// in about pages skills bar 

try{

  var skills_section = document.querySelector("#Skills");
  var progress_bar = document.querySelectorAll("#Skills .progress_box .progress-bar");

  function show_fuc(){
    progress_bar.forEach(progress_bar =>{
     const progress_bar_w = progress_bar.dataset.progress;

      progress_bar.style.opacity = 1;
      progress_bar.style.width = `${progress_bar_w}%`;
    })
  }

  function hiede_fuc(){
    progress_bar.forEach(progress_bar =>{
      progress_bar.style.opacity = 0;
      progress_bar.style.width = 0;
    })
  }

  window.addEventListener('scroll',()=>{

  const section_top= skills_section.getBoundingClientRect().top ;
  const  section_top_val =section_top +300;
  var screen_height = window.innerHeight;


  if(section_top_val < screen_height){
  show_fuc()
  }else{
    hiede_fuc()
  }
  })

}catch(error){

}








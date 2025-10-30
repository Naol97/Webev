// const loggin = document.getElementById("loggin");
// const rreg = document.getElementById("rreg");
// const logpage = document.getElementById("logpage");
// const regpage = document.getElementById("regpage");
// const as = document.querySelectorAll(".link");

// logpage.classList.add("active");

// // as.forEach(a=>{
// //     a.addEventListener("mouseover", event=>{
// //         event.target.add("hover")
// //     })
// //     a.addEventListener("mouseout", event=>{
// //         event.target.remove("hover")
// //     })
// // })


// loggin.addEventListener("mouseover", event=>{
//     event.target.classList.add("hover");
// })
// loggin.addEventListener("mouseout", event=>{
//     event.target.classList.remove("hover");
// })
// rreg.addEventListener("mouseover", event=>{
//     event.target.classList.add("hover");
// })
// rreg.addEventListener("mouseout", event=>{
//     event.target.classList.remove("hover");
// })

// loggin.addEventListener("click", event=>{
//     logpage.classList.add("active")
//    regpage.classList.remove("active");
// })
// rreg.addEventListener("click", event=>{
//     regpage.classList.add("active")
//     logpage.classList.remove("active");
// })


//NEW JAVASCRIPT

function showForm(formid){
    document.querySelectorAll(".oo").forEach(form=>form.classList.remove('active'));
    document.getElementById(formid).classList.add('active');
    // document.getElementById(formid).style.animationFillMode.
}
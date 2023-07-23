function openForm() {
    userForm.style.display = "block";
}
function closeForm() {
    userForm.style.display = "none";
    nameInput.value = "";
    emailInput.value = "";
}
function confirmation(){
    var result = confirm("Are you sure to delete?");
    if(result){
      console.log("Deleted")
    }
  }
  const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
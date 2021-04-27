function myFunction(x){
    x.classList.toggle("fa-thumbs-up");
}
    var x = document.getElementsByClassName("details");
    var i;
    for(i=0;i<x.length;i++){
        x[i].addEventListener("click",function(){ 
            var content=this.nextElementSibling;
            if (content.style.display === "none") {
              content.style.display = "block";
            } else {
              x.style.display = "none";
            }
            });
    }